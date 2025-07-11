<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Carbon\Carbon;

class Planning extends Component
{
    /** @var array */
    public $planning;

    public function __construct()
    {
        // 1. Construire le planning statique
        $p = [
            'Lundi' => [
                'date'       => '7 juillet',
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
                'date'       => '8 juillet',
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
                'date'       => '9 juillet',
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
                'date'       => '10 juillet',
                'events'     => [[
                    // 🏃‍♂️ 8 km
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

        // 2. Vendredi–Dimanche, avec Samedi en natation
        foreach (['Vendredi'=>'11 juillet','Samedi'=>'12 juillet','Dimanche'=>'13 juillet'] as $day=>$date) {
            if ($day === 'Samedi') {
                // Samedi : Objectif 2km de natation
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
                // Vendredi et Dimanche = repos
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

        // 3. Détection du jour courant et sur­écriture si “aujourd’hui”
        $todayName = ucfirst(
            Carbon::now()->locale('fr')->isoFormat('dddd')
        );
        foreach ($p as $day => &$data) {
            $data['today'] = ($day === $todayName);
            if ($data['today']) {
                // Aujourd’hui : muscu “pecs”
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

        $this->planning = $p;
    }

    public function render()
    {
        return view('components.planning');
    }
}
