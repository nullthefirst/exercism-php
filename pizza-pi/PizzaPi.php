<?php

class PizzaPi
{
    public function calculateDoughRequirement($num_of_pizzas, $num_of_persons)
    {
        return $num_of_pizzas * (($num_of_persons * 20) + 200);
    }

    public function calculateSauceRequirement($num_of_pizzas, $sauce_can_volume)
    {
        $sauce_per_pizza = 125;
        return $num_of_pizzas * $sauce_per_pizza / $sauce_can_volume;
    }

    public function calculateCheeseCubeCoverage($cheese_side_length, $cheese_layer_thickness, $pizza_diameter)
    {
        $coverage = ($cheese_side_length ** 3) / ($cheese_layer_thickness * pi() * $pizza_diameter);
        return floor($coverage);
    }

    public function calculateLeftOverSlices($num_of_pizzas, $num_of_friends)
    {
        return ($num_of_pizzas * 8) % $num_of_friends;
    }
}
