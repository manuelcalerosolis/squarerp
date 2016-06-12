<?php

namespace App\Http\Controllers;

use App\Models\Lang;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\Lang\Create;
use App\Http\Requests\Lang\Update;
use Illuminate\Support\Facades\Redirect;

class LangController extends Controller
{
    protected $lang;

    public function __construct(Lang $lang)
    {
        $this->lang = $lang;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $langs = $this->lang->all();

        return view('lang.index', ['langs' => $langs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Create $request)
    {
        $this->lang->create($request->all());

        return Redirect::to('lang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lang = $this->lang->findOrFail($id);

        return view('lang.edit', ['lang' => $lang]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lang = $this->lang->findOrFail($id);

        return view('lang.edit', ['lang' => $lang]);
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
        $lang = $this->lang->findOrFail($id);

        $lang->update($request->all());

        return Redirect::to('lang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->lang->destroy($id);

        return Redirect::to('lang');
    }
}
