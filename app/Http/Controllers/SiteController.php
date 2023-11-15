<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertyDetailsRequest;
use App\Repositories\Interfaces\PropertyRepositoryInterface;
use App\Services\PropertyService;
use Illuminate\Contracts\View\View;

class SiteController extends Controller
{
    private PropertyRepositoryInterface $repository;

    public function __construct(PropertyRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function all(): View
    {
        return view('layouts.home', [
            'properties' => $this->repository->all()
        ]);
    }

    public function show(PropertyDetailsRequest $request): View
    {
        $checkin = now()->format('Y-m-d');
        if ($request->checkin) $checkin = $request->checkin;

        $checkout = now()->addDay()->format('Y-m-d');
        if ($request->checkout) $checkout = $request->checkout;

        $rooms = $this->repository->showRoomPrices($request->id, $checkin);

        return view('layouts.property-details', [
            'property' => $this->repository->showProperty($request->id),
            'rooms' => $rooms,
            'totalByRoom' => (new PropertyService())->calculateFinalPrice($checkin, $checkout, $rooms),
            'checkin' => $checkin,
            'checkout' => $checkout,
        ]);
    }
}
