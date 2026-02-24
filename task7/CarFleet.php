<?php

class CarFleet
{
    public function carFleet($target, $position, $speed)
    {
        $cars = array_map(function ($p, $s) {
            return ['pos' => $p, 'speed' => $s];
        }, $position, $speed);

        usort($cars, function ($a, $b) {
            return $b['pos'] <=> $a['pos'];
        });

        $fleets = 0;
        $maxTime = 0;

        foreach ($cars as $car) {
            $currentTime = ($target - $car['pos']) / $car['speed'];
            if ($currentTime > $maxTime) {
                $fleets++;
                $maxTime = $currentTime;
            }
        }
        return $fleets;

    }
}
