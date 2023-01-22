<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{

    public function index()
    {
        return UserResource::collection(User::all());
    }


    public function create()
    {
        //
    }


    public function store(StoreUserRequest $request)
    {
        //
    }


    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        //
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        //
    }


    public function destroy(User $user)
    {
        //
    }
}
