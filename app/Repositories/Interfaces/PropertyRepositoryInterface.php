<?php

namespace App\Repositories\Interfaces;

use App\Http\Requests\PropertyDetailsRequest;
use Illuminate\Database\Eloquent\Collection;

interface PropertyRepositoryInterface
{
    public function all(array $relations): Collection;

    public function showProperty(int $id);

    public function showRoomPrices(int $id, string $checkin);
}
