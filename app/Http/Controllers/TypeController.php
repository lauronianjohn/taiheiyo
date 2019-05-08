<?php

namespace App\Http\Controllers;

use App\Type;
use DB;
use Illuminate\Http\Request;

class TypeController extends Controller
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
        return view('types.addtype');
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
            'type' => 'required | alpha',
            'type' => 'required | unique:types,name',
        ]);
        DB::beginTransaction();
        try{
            $type = new Type;
            $type->create(array('name' => $request->type));
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
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function show(Type $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit(Type $type)
    {
        $types = Type::find($type->id)->first();
        return view('types.edittype', compact('types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Type $type)
    {
        DB::beginTransaction();
        try{
            $types = Type::find($type->id)->first();
            $types->name = $request->type;
            $types->save();

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
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type $type)
    {
        $types = Type::find($type->id)->first();
        if($types->delete()){
            return redirect('/')->with('success', 'Data are now deleted');
        } else {
            return redirect('/')->with('danger', 'Theres a problem on deleting data');
        }
    }
}
