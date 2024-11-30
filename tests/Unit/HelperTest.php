<?php

test('calculate valid percentage', function () {
    $percentage = calculatePercentage(50, 100);
    $this->assertEquals(50, $percentage);
});
