<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = User::query()->get();
        return UserResource::collection($data);
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        $user = User::findOrFail($id);
        return new UserResource($user);
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }

    public function me()
    {
        $me = auth()->user();
        return new JsonResponse(['result' => $me]);
    }
}
