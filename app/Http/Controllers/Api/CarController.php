<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AssignUserRequest;
use App\Http\Resources\CarResource;
use App\Http\Resources\UserResource;
use App\Models\Car;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CarController extends Controller
{

    public function index(): ResourceCollection
    {
        return CarResource::collection(Car::all());
    }

    public function show(Car $car): CarResource
    {
        return new CarResource($car);
    }


    public function getAssignedUser(Car $car): UserResource|JsonResponse
    {
        $user = $car->user()->first();

        if (!$user) {
            return response()->json('User not assigned');
        }

        return new UserResource($user);
    }

    public function assignUser(Car $car, AssignUserRequest $request): JsonResponse
    {
        $user = User::query()->find($request->get('user_id'));

        if (!is_null($user->car()->first())) {
            return response()->json('User already assigned');
        }

        $car->user()->associate($user);

        $car->save();

        return response()->json('Success');
    }

    public function unassign(Car $car): JsonResponse
    {
        $car->user_id = null;

        $car->save();

        return response()->json('Success');
    }
}
