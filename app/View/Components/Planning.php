<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Carbon\Carbon;

class Planning extends Component
{
    public array $planning;
    public string $weekTitle;
    public ?int $prevWeek;
    public ?int $nextWeek;

    public function __construct()
    {
        // Choix de la semaine
        $selectedWeek = request()->integer('week');
        if (! $selectedWeek) {
            $day = Carbon::now()->day;
            $selectedWeek = ($day >= 14 && $day <= 20) ? 2 : 1;
        }

        $monday = $selectedWeek === 2 ? 14 : 7;
        $this->weekTitle = "du {$monday} au " . ($monday + 6) . ' juillet';
        $this->prevWeek   = $selectedWeek === 2 ? 1 : null;
        $this->nextWeek   = $selectedWeek === 1 ? 2 : null;

        // Chargement des données
        $content = include config_path('planning_content.php');
        $this->planning = $this->buildWeekFromContent($content, $monday);
    }

    /**
     * Construit les 7 jours de la semaine à partir du contenu statique.
     */
    private function buildWeekFromContent(array $content, int $startDay): array
    {
        $week = [];

        for ($i = 0; $i < 7; $i++) {
            $dayNum = $startDay + $i;
            $date   = "{$dayNum} juillet";

            // Nom du jour en français
            $carbonDate = Carbon::create(null, 7, $dayNum);
            $dayName = ucfirst($carbonDate->locale('fr')->isoFormat('dddd'));

            // Récupère les events ou tableau vide
            $events = $content[$dayNum] ?? [];

            // Flag "aujourd'hui" pour le styling, sans modifier $events
            $now = Carbon::now();
            $isToday = ($now->month === 7 && $now->day === $dayNum);

            $week[$dayName] = [
                'date'   => $date,
                'events' => $events,
                'today'  => $isToday,
            ];
        }

        return $week;
    }


    public function render()
    {
        return view('components.planning');
    }
}
