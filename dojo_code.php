<?php

function hasAPair (array $hand) : bool
{
    $values = array_count_values($hand);

    return array_reduce($values, function ($result, $value) {
        return $value >= 2 ? true : $result;
    }, false);
}

function hasThreeOfAKind (array $hand) : bool
{
    $values = array_count_values($hand);

    return array_reduce($values, function ($result, $value) {
        return $value >= 3 ? true : $result;
    }, false);
}

function hasASquare (array $hand) : bool
{
    $values = array_count_values($hand);

    return array_reduce($values, function ($result, $value) {
        return $value >= 4 ? true : $result;
    }, false);
}

function hasAFull (array $hand) : bool
{
    $values = array_count_values($hand);
    return in_array(2, $values) && in_array(3, $values);
}

function hasAStraight (array $hand) : bool
{
    if(count($hand) != 5)
        return false;

    sort($hand);
    $previous = null;

    foreach($hand as $card) {
        if($previous == null) {
            $previous = $card;
            continue;
        }

        if($card !== $previous + 1) return false;

        $previous = $card;
    }

    return true;
}