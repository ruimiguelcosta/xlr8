<?php

namespace App\Repositories;

use App\Models\Property;
use App\Models\Room;
use App\Repositories\Interfaces\PropertyRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Builder;

class PropertyRepository implements PropertyRepositoryInterface
{
    public function all(array $relations = []): Collection
    {
        $properties = Property::query();

        if ($relations) $properties = $properties->with($relations);

        return $properties->get();
    }

    public function showProperty(int $id)
    {
        return Property::find($id);
    }

    public function showRoomPrices(int $id, string $checkin): Collection|array
    {
        return Room::query()
            ->with(['prices', 'roomType'])
            ->whereHas('prices', function(Builder $query) use($checkin) {
                $query->where('start_at', '<=', $checkin)
                    ->where('end_at', '>=', $checkin);
            })
            ->where('property_id', $id)
            ->get();
    }
}
