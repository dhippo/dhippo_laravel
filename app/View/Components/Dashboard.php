<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Dashboard extends Component
{
    /** @var array */
    public $stats;

    public function __construct()
    {
        // Définition de chaque “carte” du dashboard
        $this->stats = [
            [
                'title'       => 'Séances réalisées',
                'icon'        => '💪',
                'value'       => '5/7',
                'percent'     => 71.43,              // 5 ÷ 7 × 100
                'gradient'    => 'from-blue-400 to-blue-600',
                'text_color'  => 'text-blue-200',
                'shadow_hover'=> 'hover:shadow-blue-500/25',
            ],
            [
                'title'       => 'Calories dépensées',
                'icon'        => '🔥',
                'value'       => '2000 / 3500 kcal',
                'percent'     => 57.14,              // 2000 ÷ 3500 × 100
                'gradient'    => 'from-red-400 to-red-600',
                'text_color'  => 'text-red-200',
                'shadow_hover'=> 'hover:shadow-red-500/25',
            ],
            [
                'title'       => 'Pompes réalisées',
                'icon'        => '💥',
                'value'       => '120/200',
                'percent'     => 60,                 // 120 ÷ 200 × 100
                'gradient'    => 'from-yellow-400 to-yellow-600',
                'text_color'  => 'text-yellow-200',
                'shadow_hover'=> 'hover:shadow-yellow-500/25',
            ],
            [
                'title'       => 'Qualité alimentation',
                'icon'        => '🥗',
                'value'       => '78%',
                'percent'     => 78,
                'gradient'    => 'from-green-400 to-green-600',
                'text_color'  => 'text-green-200',
                'shadow_hover'=> 'hover:shadow-green-500/25',
            ],
        ];
    }

    public function render()
    {
        return view('components.dashboard');
    }
}
