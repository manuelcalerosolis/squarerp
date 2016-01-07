<?php
namespace App\Http\Controllers;

use App\Models\Entity;

use App\Http\Requests;
use App\Http\Requests\Entity\Create;
use App\Http\Requests\Entity\Update;

use Illuminate\Support\Facades\Redirect;

/**
 * Class EntityController
 * @package App\Http\Controllers
 */
class EntityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('entities.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Create $request)
    {
        Entity::create($request->all());

        return Redirect::to('/entity');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entity = Entity::find($id);
        if (!$entity)
        {
            return response()->json(['errors'=>array(['code'=>404,'message'=>'No se encuentra una entidad con ese c�digo.'])],404);
        }
        return response()->json(['status'=>'ok','data'=>$entity],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $entity = Entity::find($id);

        if (!$entity)
        {
            return response()->json(['errors'=>array(['code'=>404,'message'=>'No se encuentra una entidad con ese c�digo.'])],404);
        }
        return view('entities.edit', compact('entity'));
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

        $entity = Entity::find($id);
        if (!$entity)
        {
            return response()->json(['errors'=>array(['code'=>404,'message'=>'No se encuentra una entidad con ese c�digo.'])],404);
        }
        $entity->fill($request->all());
        $entity->save();

        return Redirect::to('/entity');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Entity::destroy($id);
        return Redirect::to('/entity');
    }
}
