<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use App\Eventos;
Use App\Charts\SampleChart;

class ChartController extends Controller
{
    public function __construct()
    {
        $this->middleware('UserCheck');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $grafica = DB::table('Eventos')->get();

        $chart = new SampleChart;
        $chart->labels(['00', '01', '02','03','04','05','06']);
        $chart->dataset('My dataset 1', 'horizontalBar', [3,2])
            ->color("rgba(47, 209, 229,0.8)")
            ->backgroundColor("rgba(47, 209, 229, 0.5)")
            ->options(['borderSkipped'=>'top']);
        $chart->dataset('My dataset 2', 'horizontalBar', collect([0, 0, 5, 6]))
            ->color("rgba(241,44,44,0.8)")
            ->backgroundColor("rgba(241, 44, 44, 0.5)")
        ->options(['borderSkipped'=>'top']);
        $chart->dataset('My dataset 3', 'horizontalBar', [3,2])
            ->color("rgba(47, 209, 229,0.8)")
            ->backgroundColor("rgba(47, 209, 229, 0.5)")
            ->options(['borderSkipped'=>'top']);

        /*$chart = new SampleChart;
        $chart->labels(['00','01','02','03','04','05']);
        $chart->dataset('My dataset 1','scatter',[3,4,0,0,0,0])
        ->color("rgba(47,209,229,0.8)")
        ->backgroundColor("rgba(47,209,229,0.5)")
        ->options(['borderSkipped'=>'top']);*/

        return view('chart.chartEventos', [ 'EventosChart' => $chart ] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }      
}
