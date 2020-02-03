<?php

namespace App\Http\Controllers;

use App\Area;
use App\Course;
use App\Institution;
use App\Region;
use App\StudyCycle;
use App\Type;
use Illuminate\Http\Request;
use Mockery\Undefined;
use Symfony\Component\Console\Input\Input;

class InstitutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index() {
        return view('explorehome');
    }


    public function explore(Request $param)
    {
        //

        $institutions = Institution::all();
        $regions = Region::all();
        $areas = Area::all();
        $types = Type::all();
        $cycles = StudyCycle::all();



        $view = 1;
        $primary = null;
        $secondary = null;


        if (!empty( $param->except('_token') )) {
            $filteredAreas = !empty ( $param['areas'] ) ? (explode(",",$param['areas'])) : Area::all()->pluck('id');
            $filteredTypes = !empty ( $param['types'] ) ? (explode(",",$param['types'])) : Type::all()->pluck('id');
            $filteredCycles = !empty ( $param['cycles'] ) ? (explode(",",$param['cycles'])) : StudyCycle::all()->pluck('id');
            $filteredRegions = !empty ( $param['regions'] ) ? (explode(",",$param['regions'])) : Region::all()->pluck('id');

            $filteredInstitutions = Institution::where(function ($query) use ($filteredTypes, $filteredRegions){
                $query->whereIn('type_id', $filteredTypes)->whereIn('region_id', $filteredRegions);
            })->get();

            $result = Course::where(function ($query) use ($filteredAreas, $filteredCycles){
                $query->whereIn('area_id', $filteredAreas)->whereIn('study_cycle_id', $filteredCycles);
            })->get();

            $found = "0";
            foreach ($filteredInstitutions as $keyInst => $valueInst) {
                foreach ($result as $keyResult => $valueResult) {
                    if($valueInst['id'] === $valueResult['institution_id']) {
                        $found = "1";
                        break;
                    }
                }
                if ($found === "0") {
                    unset($filteredInstitutions[$keyInst]);
                }
                # code...
                $found = "0";
            }


            $primary = $filteredInstitutions;
            $secondary = $result;
            $view = 2;
        } else {
            $primary = $regions;
            $secondary = $institutions;
            $view = 1;
        }


        return view('explore', ['institutions' => $institutions, 'regions' => $regions, 'areas' => $areas, 'types' => $types, 'cycles' => $cycles, 'primary' => $primary, 'secondary' => $secondary, 'view' => $view]);

        // ->with('institutions', $institutions);
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
     * @param  \App\Institution  $institution
     * @return \Illuminate\Http\Response
     */
    public function show(Institution $institution)
    {
        //
    }
    public function find(Request $request)
    {
        //
        $data = $request->all();
        $areas = !empty ( $data['areas'] ) ? [$data['areas']] : null;
        $types = !empty ( $data['types'] ) ? [$data['types']] : null;
        $cycles = !empty ( $data['cycles'] ) ? [$data['cycles']] : null;
        $regions = !empty ( $data['regions'] ) ? [$data['regions']] : null;

        $urlParams = "?";

        if ($areas) {
            $urlParams = $urlParams . "areas=";
            foreach ($areas[0] as $key => $id) {
                $urlParams = $urlParams . $key;
                if ($key !== array_key_last($areas[0]) )
                $urlParams = $urlParams . ",";
            }
        }

        if ($types) {
            if (preg_match('/=/', $urlParams))
            $urlParams = $urlParams . "&";
            $urlParams = $urlParams . "types=";
            foreach ($types[0] as $key => $id) {
                $urlParams = $urlParams . $key;
                if ($key !== array_key_last($types[0]) )
                $urlParams = $urlParams . ",";
            }
        }

        if ($cycles) {
            if (preg_match('/=/', $urlParams))
            $urlParams = $urlParams . "&";
            $urlParams = $urlParams . "cycles=";
            foreach ($cycles[0] as $key => $id) {
                $urlParams = $urlParams . $key;
                if ($key !== array_key_last($cycles[0]) )
                $urlParams = $urlParams . ",";
            }
        }

        if ($regions) {
            if (preg_match('/=/', $urlParams))
            $urlParams = $urlParams . "&";
            $urlParams = $urlParams . "regions=";
            foreach ($regions[0] as $key => $id) {
                $urlParams = $urlParams . $key;
                if ($key !== array_key_last($regions[0]) )
                $urlParams = $urlParams . ",";
            }
        }

        return redirect("/explorar/lista".$urlParams);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Institution  $institution
     * @return \Illuminate\Http\Response
     */
    public function edit(Institution $institution)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Institution  $institution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Institution $institution)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Institution  $institution
     * @return \Illuminate\Http\Response
     */
    public function destroy(Institution $institution)
    {
        //
    }
}
