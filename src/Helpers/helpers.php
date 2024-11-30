<?php

function calculatePercentage($value, $total): float|int
{
    if ($total == 0) {
        return 0; // Avoid division by zero
    }

    $percentage = ($value / $total) * 100;
    $percentage = floor($percentage * 100) / 100;

    // Ensure the percentage is between 0 and 100
    return min(100, max(0, $percentage));
}
