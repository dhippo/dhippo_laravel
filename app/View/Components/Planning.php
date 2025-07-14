<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Carbon\Carbon;

class Planning extends Component
{
    /**
     * Tableau du planning courant.
     */
    public array $planning;

    /**
     * Titre indiquant la période de la semaine.
     */
    public string $weekTitle;

    /**
     * Numéro de la semaine précédente ou null.
     */
    public ?int $prevWeek;

    /**
     * Numéro de la semaine suivante ou null.
     */
    public ?int $nextWeek;

    public function __construct()
    {
        // Déterminer la semaine sélectionnée
        $selectedWeek = request()->integer('week');
        if (!$selectedWeek) {
            $day = Carbon::now()->day;
            $selectedWeek = ($day >= 14 && $day <= 20) ? 2 : 1;
        }

        $monday = $selectedWeek === 2 ? 14 : 7;

        $this->weekTitle = "du {$monday} au " . ($monday + 6) . ' juillet';
        $this->prevWeek = $selectedWeek === 2 ? 1 : null;
        $this->nextWeek = $selectedWeek === 1 ? 2 : null;

        $this->planning = $this->buildWeek($monday);
    }

    /**
     * Construit le planning pour une semaine dont le lundi est au jour donné.
     */
    private function buildWeek(int $startDay): array
    {
        $p = [
            'Lundi' => [
                'date'       => $startDay . ' juillet',
                'events'     => [[
                    'icon'      => '🏊‍♂️',
                    'label'     => '2km',
                    'bg'        => 'bg-gradient-to-r from-blue-500 to-blue-600',
                    'text'      => 'text-white',
                    'hover'     => 'hover:shadow-blue-500/50',
                    'card_bg'   => 'bg-blue-500/70',
                    'date_color'=> 'text-blue-200',
                ]],
                'date_color' => 'text-blue-200',
            ],
            'Mardi' => [
                'date'       => ($startDay + 1) . ' juillet',
                'events'     => [[
                    'icon'      => '💤',
                    'label'     => 'Repos',
                    'bg'        => 'bg-white/10',
                    'text'      => 'text-gray-300',
                    'hover'     => '',
                    'card_bg'   => 'bg-gray-500/60',
                    'date_color'=> 'text-gray-300',
                ]],
                'date_color' => 'text-gray-300',
            ],
            'Mercredi' => [
                'date'       => ($startDay + 2) . ' juillet',
                'events'     => [
                    [
                        'icon'      => '🏋️‍♂️',
                        'label'     => 'dos',
                        'bg'        => 'bg-gradient-to-r from-green-500 to-green-600',
                        'text'      => 'text-white',
                        'hover'     => 'hover:shadow-green-500/50',
                        'card_bg'   => 'bg-green-500/60',
                        'date_color'=> 'text-green-200',
                    ],
                    [
                        'icon'      => '🚴‍♂️',
                        'label'     => '1h',
                        'bg'        => 'bg-gradient-to-r from-purple-500 to-purple-600',
                        'text'      => 'text-white',
                        'hover'     => 'hover:shadow-purple-500/50',
                        'card_bg'   => 'bg-yellow-600/60',
                        'date_color'=> 'text-purple-200',
                    ],
                ],
                'date_color' => 'text-green-200',
            ],
            'Jeudi' => [
                'date'       => ($startDay + 3) . ' juillet',
                'events'     => [[
                    'icon'      => '🏃‍♂️',
                    'label'     => '8km',
                    'bg'        => 'bg-gradient-to-r from-yellow-500 to-orange-500',
                    'text'      => 'text-white',
                    'hover'     => 'hover:shadow-orange-500/50',
                    'card_bg'   => 'bg-orange-500/20',
                    'date_color'=> 'text-yellow-200',
                ]],
                'date_color' => 'text-yellow-200',
                'day_color'  => 'text-yellow-300',
            ],
        ];

        foreach (['Vendredi','Samedi','Dimanche'] as $index => $day) {
            $date = ($startDay + 4 + $index) . ' juillet';
            if ($day === 'Samedi') {
                $p[$day] = [
                    'date'       => $date,
                    'events'     => [[
                        'icon'      => '🏊‍♂️',
                        'label'     => 'Objectif : 2 km natation',
                        'bg'        => 'bg-gradient-to-r from-blue-500 to-blue-600',
                        'text'      => 'text-white',
                        'hover'     => 'hover:shadow-blue-500/50',
                        'card_bg'   => 'bg-blue-500/20',
                        'date_color'=> 'text-blue-200',
                    ]],
                    'date_color' => 'text-blue-200',
                ];
            } else {
                $p[$day] = [
                    'date'       => $date,
                    'events'     => [[
                        'icon'      => '💤',
                        'label'     => 'Repos',
                        'bg'        => 'bg-white/10',
                        'text'      => 'text-gray-300',
                        'hover'     => '',
                        'card_bg'   => 'bg-slate-500/10',
                        'date_color'=> 'text-gray-300',
                    ]],
                    'date_color' => 'text-gray-300',
                ];
            }
        }

        $today = Carbon::now();
        $inWeek = $today->month == 7 && $today->day >= $startDay && $today->day <= ($startDay + 6);
        $todayName = ucfirst($today->locale('fr')->isoFormat('dddd'));

        foreach ($p as $day => &$data) {
            $data['today'] = $inWeek && ($day === $todayName);
            if ($data['today']) {
                $data['events'] = [[
                    'icon'      => '🏋️‍♂️',
                    'label'     => 'pecs',
                    'bg'        => 'bg-gradient-to-r from-green-500 to-green-600',
                    'text'      => 'text-white',
                    'hover'     => 'hover:shadow-green-500/50',
                    'card_bg'   => 'bg-green-500/60',
                    'date_color'=> $data['date_color'],
                ]];
            }
        }
        unset($data);

        return $p;
    }

    public function render()
    {
        return view('components.planning');
    }
}

