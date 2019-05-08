<?php

namespace App\Http\Controllers;

use App\Cement;
use App\Type;
use DB;
use Illuminate\Http\Request;

class CementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $cement = Cement::select('*')
                            ->whereYear('cements.created_at', '=', date('Y'))
                            ->get();
        
        $bar = Cement::selectRaw('*, Sum(total_defects) as defect')
                            ->groupBy('cause')
                            ->whereYear('created_at', '=', date('Y'))
                            ->get()->toArray();
        // dd($bar);
        $types = Cement::selectRaw('*, Sum(total_defects) as defect')
                            ->groupBy('cause','types')
                            ->whereYear('created_at', '=', date('Y'))
                            ->get()->toArray();
        return view('welcome',compact('cement','bar','types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type = Type::all();
        return view('cement.addcement',compact('type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate(request(),[
            'cause' => 'required',
            'total_loaded' => 'required',
            'types' => 'required',
            'good' => 'required'
        ]);
        DB::beginTransaction();
        try{
            $cement = new Cement;
            $cement->cause = $request->cause;
            $cement->total_no_bags = $request->total_loaded;
            $cement->types = $request->types;
            $cement->total_good = $request->good;
            $cement->total_defects = $request->total_loaded - $request->good;
            $cement->save();

        }
        catch(Exception $e){
            DB::rollback();
            throw $e;
        }
        DB::commit();
        return redirect('/')->with('success', 'Created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cement  $cement
     * @return \Illuminate\Http\Response
     */
    public function show(Cement $cement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cement  $cement
     * @return \Illuminate\Http\Response
     */
    public function edit(Cement $cement)
    {
        $cements = Cement::find($cement->id);
        $type = Type::all();
        return view('cement.editcement',compact('cements','type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cement  $cement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cement $cement)
    {
        // dd($request->all());
        $this->validate(request(),[
            'cause' => 'required',
            'total_loaded' => 'required',
            'types' => 'required',
            'good' => 'required'
        ]);
        DB::beginTransaction();
        try{
            $cement = Cement::find($cement->id)->first();
            $cement->cause = $request->cause;
            $cement->total_no_bags = $request->total_loaded;
            $cement->types = $request->types;
            $cement->total_good = $request->good;
            $cement->total_defects = $request->total_loaded - $request->good;
            $cement->save();

        }
        catch(Exception $e){
            DB::rollback();
            throw $e;
        }
        DB::commit();
        return redirect('/')->with('success', 'Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cement  $cement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cement $cement)
    {
        $cementfind = Cement::find($cement->id);
        if($cementfind->delete()){
            return redirect('/')->with('success', 'Data are now deleted');
        } else {
            return redirect('/')->with('danger', 'Theres a problem on deleting data');
        }
        
    }
    public function reports(){
        $cement = Cement::select('*')
                ->whereYear('created_at', '=', date('Y'))
                ->get();
        $bar = Cement::selectRaw('*, Sum(total_defects) as defect')
                ->groupBy('cause')
                ->whereYear('created_at', '=', date('Y'))
                ->get()->toArray();
        // dd($bar);
        $types = Cement::selectRaw('*, Sum(total_defects) as defect')
                ->groupBy('cause','types')
                ->whereYear('created_at', '=', date('Y'))
                ->get()->toArray();
        return view('cement.reports',compact('cement','bar','types'));
    }
    public function choosedate(Request $request){
       
        if(empty($request->month)){
            $cement = Cement::select('*')
                ->whereYear('created_at', '=', $request->year)
                ->get();
            // dd($cement);
            $bar = Cement::selectRaw('*, Sum(total_defects) as defect')
                    ->groupBy('cause')
                    ->whereYear('created_at', '=', $request->year)
                    ->get()->toArray();
            // dd($bar);
            $types = Cement::selectRaw('*, Sum(total_defects) as defect')
                    ->groupBy('cause','types')
                    ->whereYear('created_at', '=', $request->year)
                    ->get()->toArray();
        } else {
            $cement = Cement::select('*')
                    ->whereYear('created_at', '=', $request->year)
                    ->whereMonth('created_at', $request->month)
                    ->get();
            $bar = Cement::selectRaw('*, Sum(total_defects) as defect')
                    ->groupBy('cause')
                    ->whereYear('created_at', '=', $request->year)
                    ->whereMonth('created_at', $request->month)
                    ->get()->toArray();
            // dd($bar);
            $types = Cement::selectRaw('*, Sum(total_defects) as defect')
                    ->groupBy('cause','types')
                    ->whereYear('created_at', '=', $request->year)
                    ->whereMonth('created_at', $request->month)
                    ->get()->toArray();
        }
        return view('cement.reports',compact('cement','bar','types'));
    }
}
