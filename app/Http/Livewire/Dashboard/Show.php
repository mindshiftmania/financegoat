<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use Asantibanez\LivewireCharts\Facades\LivewireCharts;

class Show extends Component
{

    public function render()
    {
        $columnChartModel =
        LivewireCharts::columnChartModel()
            ->setTitle('Expenses by Type')
            ->addColumn('Food', 100, '#f6ad55')
            ->addColumn('Shopping', 200, '#fc8181')
            ->addColumn('Travel', 300, '#90cdf4')
        ;
        return view('livewire.dashboard.show')->with(['columnChartModel' => $columnChartModel]);
    }
}
