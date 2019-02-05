<?php

/*
Есть массив пользователей. У нас есть какое-то количество бонусов (nBonuses), которое нужно случайным образом распределить между пользователями, поставить им  bonus = 1. У одного пользователя не может быть несколько бонусов.
*/

$users = [
  [
    'name' => 'Claude Towles',
    'bonus' => 0
  ],
  [
    'name' => 'Lovetta Pogue',
    'bonus' => 0
  ],
  [
    'name' => 'Joye Calero',
    'bonus' => 0
  ],
  [
    'name' => 'Andrew Stalker',
    'bonus' => 0
  ],
  [
    'name' => 'Samatha Collett',
    'bonus' => 0
  ]
];

function assignBonuses($users, $nBonuses) {
  if ($nBonuses > count($users)) {
    $nBonuses = count($users);
  }
  $newUsers = $users;
  while ($nBonuses > 0) {
    $fartUser = rand(0, strval(count($users) - 1));
    echo $nBonuses . $fartUser;
    if ($users[$fartUser]['bonus'] != 1) {
      // $users[$fartUser]['bonus'] = 1;
      $users[$fartUser]['bonus'] = 1;
      $nBonuses = $nBonuses - 1;
      // unset($users[$fartUser]);
    }
  }
  return $users;
}

print_r(assignBonuses($users, 6));