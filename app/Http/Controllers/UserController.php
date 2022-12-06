<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{

    public function index()
    {
        return User::paginate();
    }


    public function store(UserCreateRequest $request)
    {
        $user = User::create(
            $request->only('first_name', 'last_name', 'email') + ['password' => Hash::make(1234)]
        );

        return response($user, Response::HTTP_CREATED);
    }


    public function show($id)
    {
        return User::find($id);
    }


    public function update(UserUpdateRequest $request, $id)
    {
        $user = User::find($id);

        $user->update($request->only('first_name', 'last_name', 'email'));
        return response($user, Response::HTTP_ACCEPTED);
    }


    public function destroy($id)
    {
        User::destroy($id);
        return response('delete success', Response::HTTP_NO_CONTENT);
    }
}
