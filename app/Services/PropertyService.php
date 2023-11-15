<?php

namespace App\Services;

use DateInterval;
use DatePeriod;
use DateTime;

class PropertyService
{
    public function calculateFinalPrice(string $checkin, string $checkout, $roomPricesByDates): array
    {
        $roomsTotal = [];
        $priceIntervals = $this->prepareRoomForCalculation($roomPricesByDates);

        $checkin = new DateTime($checkin);
        $checkout = new DateTime($checkout);

        $interval = new DateInterval('P1D');
        $period = new DatePeriod($checkin, $interval, $checkout);

        foreach ($roomPricesByDates as $room) {
            $totalCost = 0;

            foreach ($period as $date) {

                foreach ($priceIntervals as $roomPricesByDate) {
                    $startInterval = new DateTime($roomPricesByDate['start_at']);
                    $endInterval = new DateTime($roomPricesByDate['end_at']);

                    if ($date >= $startInterval && $date < $endInterval) {
                        $totalCost += $room->prices[0]->price;
                        break;
                    }
                }
            }

            $roomsTotal[$room->id] = [
                'bookingDays' =>  $checkin->diff($checkout)->days,
                'bookingCost' => $totalCost,
            ];
        }

        return $roomsTotal;
    }

    public function prepareRoomForCalculation($roomPricesByDates): array
    {
        $roomPrices = [];
        foreach ($roomPricesByDates as $room) {
            $roomPrices[] = [
                'start_at' => now()->parse($room->prices[0]['start_at'])->format('Y-m-d'),
                'end_at' => now()->parse($room->prices[0]['end_at'])->format('Y-m-d'),
                'price' => $room->prices[0]['price'],
            ];
        }

        return $roomPrices;
    }
}
