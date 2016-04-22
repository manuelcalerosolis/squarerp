<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Role;
use App\Http\Requests\EntityRole\Create;
use App\Http\Requests\EntityRole\Update;
use Illuminate\Support\Facades\Redirect;

class EntityRoleController extends Controller
{

    protected $entityRole;

    public function __construct(EntityRole $entityRole)
    {
        $this->entityRole = $entityRole;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('entity_role.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entity_role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Create $request)
    {
        $this->entityRole->create($request->all());

        return Redirect::to('entity');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rol = $this->entityRole->findOrFail($id);

        return view('entityrole.edit', ['entityRole' => $entityRole]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $entityRole = $this->entityRole->findOrFail($id);

        return view('entityrole.edit', ['entityRole' => $entityRole]);
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
        $entityRole = $this->entityRole->findOrFail($id);

        $entityRole->update($request->all());

        return Redirect::to('entity');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->rol->destroy($id);

        return Redirect::to('rol');
    }
}
