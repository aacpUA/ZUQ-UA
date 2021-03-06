<?php

namespace App\Http\Controllers\Backoffice;

use App\Area;
use App\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator as IlluminateValidator;

class ExploreAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function filteredList(Request $request) {

        $data = $request->all();
        $result = null;

        $area = !empty ( $data['area'] ) ? $data['area'] : Area::select('id')->get();
        /* $type = $data['type'];
        $cycle = $data['cycle'];
        $region = $data['region']; */
        $institution = $data['institution'];

             $result = Course::where(function ($query) use ($area, $institution){
                 $query->whereIn('area_id', $area)->where('institution_id', '=', $institution);
             })->get();



        // if ($data['area']) {
        //     $result = Course::where('area_id', '=', $data['area'])->get();
        // }
        // if ($data['institution']) {
        //     $result = Course::where('institution_id', '=', $data['institution'])->get();
        // }

        return $result;

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
