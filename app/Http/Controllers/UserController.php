<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        return User::all();
    }

    public function store(Request $request)
    {
        $reqBody = $request->all();
        $user = User::create($reqBody);
        $userId = $user->id;
        return $userId;
    }

    public function show(string $id)
    {
        return User::findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
    }

    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
    }
}
