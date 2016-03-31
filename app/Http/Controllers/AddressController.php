<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Address;
use App\Http\Requests\Address\Create;
use App\Http\Requests\Address\Update;
use App\Models\Entity;
use Illuminate\Support\Facades\Redirect;

/**
 * Class AddressController
 * @package App\Http\Controllers
 */
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
    public function create(Entity $entity)
    {
        return view('address.create', ['entity' => $entity]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Create|\Illuminate\Http\Request $request
     * @param Entity $entity
     * @return \Illuminate\Http\Response
     */
    public function store(Create $request, Entity $entity )
    {
        $entity->addresses()->create( $request->all() );

        return redirect()->route('entity.edit', [$entity->id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Entity $entity)
    {
        $address = Address::findOrFail($id);

        return view('address.edit', ['address' => $address], ['entity' => $entity]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request, $id, Entity $entity)
    {

        $address = Address::findOrFail($id);

        $address->update($request->all());

        return redirect()->route('entity.edit', [$entity->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Entity $entity)
    {
        Address::destroy($id);

        return redirect()->route('entity.edit', [$entity->id]);
    }
}
