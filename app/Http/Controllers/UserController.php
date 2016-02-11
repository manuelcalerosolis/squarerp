<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use App\Http\Requests\User\Create;
use App\Http\Requests\User\Update;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Create $request)
    {
        User::create($request->all());
        return ['created' => true];
    }

    public function show($id)
    {
        return User::findOrFail($id);
    }

    public function edit($id)
    {
        $user = User::find($id);

        if (!$user)
        {
            return response()->json(['errors'=>array(['code'=>404,'message'=>'No se encuentra un usuario con ese c�digo.'])],404);
        }

        return view('user.edit', ['user' => $user]);
    }

    public function update(Update $request, $id)
    {
        $user = User::find($id);
        if (!$user)
        {
            return ['updated' => false];
        }
        $user->update($request->all());

        return ['updated' => true];
    }

    public function destroy($id)
    {
        User::destroy($id);
        return ['deleted' => true ];
    }
}
