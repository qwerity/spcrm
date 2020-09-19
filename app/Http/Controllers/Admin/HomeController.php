<?php

namespace App\Http\Controllers\Admin;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class HomeController
{
    public function index()
    {
        $settings1 = [
            'chart_title'        => 'Ամսական վճարներ ըստ ծառայություն',
            'chart_type'         => 'line',
            'report_type'        => 'group_by_relationship',
            'model'              => 'App\\Payment',
            'group_by_field'     => 'type',
            'aggregate_function' => 'sum',
            'aggregate_field'    => 'amount',
            'filter_field'       => 'created_at',
            'filter_period'      => 'month',
            'column_class'       => 'col-md-12',
            'entries_number'     => '5',
            'relationship_name'  => 'service',
        ];

        $chart1 = new LaravelChart($settings1);

        return view('home', compact('chart1'));
    }
}
