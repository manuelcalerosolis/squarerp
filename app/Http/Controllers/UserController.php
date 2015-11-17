<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    public function index()
    {
        return User::all();//
    }

    public function create()
    {
        return view('CreateUser');
    }

    public function store(CreateUserRequest $request)
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
        return view('EditUser');
    }

    public function update(UpdateUserRequest $request, $id)
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
