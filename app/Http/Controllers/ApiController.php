<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertyDetailsRequest;
use App\Repositories\Interfaces\PropertyRepositoryInterface;
use App\Services\PropertyService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    private PropertyRepositoryInterface $repository;

    public function __construct(PropertyRepositoryInterface $repository)
    {
        $this->repository = $repository;    }

    public function all(): JsonResponse
    {
        return response()->json([
            'status' => true,
            'data' => [
                'properties' => $this->repository->all(['rooms', 'rooms.roomType', 'rooms.prices']),
            ]
        ]);
    }

    public function show(PropertyDetailsRequest $request): JsonResponse
    {
        $checkin = now()->format('Y-m-d');
        if ($request->checkin) $checkin = $request->checkin;

        $checkout = now()->addDay()->format('Y-m-d');
        if ($request->checkout) $checkout = $request->checkout;

        $rooms = $this->repository->showRoomPrices($request->id, $checkin);

        return response()->json([
            'status' => true,
            'data' => [
                'property' => $this->repository->showProperty($request->id),
                'rooms' => $rooms,
                'totalByRoom' => (new PropertyService())->calculateFinalPrice($checkin, $checkout, $rooms),
                'checkin' => $checkin,
                'checkout' => $checkout,
            ]
        ]);
    }
}
