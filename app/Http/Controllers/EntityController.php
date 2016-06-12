<?php

namespace App\Http\Controllers;

use App\Models\Entity;
use App\Models\Role;
use App\Http\Requests;
use App\Http\Requests\Entity\Create;
use App\Http\Requests\Entity\Update;
use Illuminate\Support\Facades\Redirect;

class EntityController extends Controller
{

    protected $entity;
    protected $role;

    public function __construct(Entity $entity, Role $role)
    {
        $this->entity   = $entity;
        $this->role     = $role;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entities = $this->entity->all();

        return view('entity.index', ['entities' => $entities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles  = $this->role->lists('name', 'id');

        return view('entity.create', ['roles' => $roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Create $request)
    {
        $entity = $this->entity->create($request->all());

        $entity->roles()->attach( $request->input('role_list') );

        return Redirect::to('entity');
    }

    /**
     * Display the specified resource.
     *
     * @param  Entity  $entity
     * @return \Illuminate\Http\Response
     */
    public function show(Entity $entity)
    {
        return view('entity.edit', ['entity' => $entity]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Entity  $entity
     * @return \Illuminate\Http\Response
     */
    public function edit(Entity $entity)
    {
        $roles  = $this->role->lists('name', 'id');

        return view('entity.edit', ['entity' => $entity, 'roles' => $roles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Entity  $entity
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request, Entity $entity)
    {
        $entity->update($request->all());

        $entity->roles()->sync( $request->input('role_list') );

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
        $this->entity->destroy($id);

        return Redirect::to('entity');
    }
}
