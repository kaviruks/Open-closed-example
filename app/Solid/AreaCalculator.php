<?php

namespace App\Solid;


class AreaCalculator 

{

    public function totalArea(ShapeInterface ...$shapes)
    {

        $area = 0;

        foreach ($shapes as $shape) {

            $area += $shape->area();


        }

        
        return $area;


    }



}