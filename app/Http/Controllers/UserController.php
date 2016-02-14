<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\User;
use App\Http\Requests\User\Create;
use App\Http\Requests\User\Update;
use Illuminate\Support\Facades\Redirect;

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

        return Redirect::to('user');
    }

    public function show($id)
    {
        return User::findOrFail($id);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('user.edit', ['user' => $user]);
    }

    public function update(Update $request, $id)
    {
        $user = User::findOrFail($id);

        $user->update($request->all());

        return Redirect::to('user');
    }

    public function destroy($id)
    {
        User::destroy($id);

        return Redirect::to('user');
    }
}
