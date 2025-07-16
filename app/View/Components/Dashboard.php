<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Dashboard extends Component
{
    /** @var array */
    public $stats;

    public function __construct()
    {
        // Définition de chaque “carte” du dashboard avec les nouvelles données
        $this->stats = [
            [
                'title'       => 'Séances réalisées',
                'icon'        => '💪',
                'value'       => '8/14',
                'percent'     => round(8 / 14 * 100, 2),   // ≃ 57.14
                'gradient'    => 'from-blue-400 to-blue-600',
                'text_color'  => 'text-blue-200',
                'shadow_hover'=> 'hover:shadow-blue-500/25',
            ],
            [
                'title'       => 'Calories dépensées',
                'icon'        => '🔥',
                'value'       => '4200 / 7000 kcal',
                'percent'     => round(4200 / 7000 * 100, 2), // 60.00
                'gradient'    => 'from-red-400 to-red-600',
                'text_color'  => 'text-red-200',
                'shadow_hover'=> 'hover:shadow-red-500/25',
            ],
            [
                'title'       => 'Pompes réalisées',
                'icon'        => '💥',
                'value'       => '180/400',
                'percent'     => round(180 / 400 * 100, 2),  // 45.00
                'gradient'    => 'from-yellow-400 to-yellow-600',
                'text_color'  => 'text-yellow-200',
                'shadow_hover'=> 'hover:shadow-yellow-500/25',
            ],
            [
                'title'       => 'Qualité alimentation',
                'icon'        => '🥗',
                'value'       => '72%',
                'percent'     => 72.00,
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
