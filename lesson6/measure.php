<?php

/*
На вход подаются группы измерений. Каждое измерение пронумеровано, новая группа начинается с единицы. Нужно получить массив в котором отмечено, к какой группе относится измерение.
*/

$measurements = [1,2,3, 1,2,3,4, 1,2];

$ans = [
  [1, 1],
  [2, 1],
  [3, 1],

  [1, 2],
  [2, 2],
  [3, 2],
  [4, 2],

  [1, 3],
  [2, 3],
];

function measureGroup($measurements) {
    $result = [];
    $groupIndex = 1;

    for ($i = 0; $i < count($measurements); $i++) {
        $currentElement = $measurements[$i];

        $j = $i - 1;
        if ($j < 0) {
            $j = 0;
        }
        $previousElement = $measurements[$j];

        if ($currentElement < $previousElement) {
            $groupIndex++;
        }

        $result[] = [$currentElement, $groupIndex];
    }


    return $result;
}

print_r(measureGroup($measurements));