<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Address;
use App\Http\Requests\Address\Create;
use App\Http\Requests\Address\Update;
use App\Models\Entity;
use Illuminate\Support\Facades\Redirect;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('address.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('address.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Create $request, Entity $entity )
    {
        Address::create($request->all());

        return Redirect::to('address');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $address = Address::find($id);

        if (!$address)
        {
            return response()->json(['errors'=>array(['code'=>404,'message'=>'No se encuentra una entidad con ese c�digo.'])],404);
        }

        return response()->json(['status'=>'ok','data'=>$address],200);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $address = Address::findOrFail($id);

        return view('address.edit', ['address' => $address]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request, $id)
    {
        $address = Address::findOrFail($id);

        $address->update($request->all());

        return Redirect::to('address');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Address::destroy($id);

        return Redirect::to('address');
    }
}
