<?php

/*
Есть два списка посещаемости студентов. В первом студенты записаны рядками, во втором - колонками. Нужно эти два списка объединить.
*/

$students1 = [
  ['',                  'Week 1', 'Week 2', 'Week 3'],
  ['Jeffrie Domingues', '+',      '-',      '+'],
  ['Todd Tinoco',       '+',      '-',      '-'],
  ['Janessa Mikel',     '+',      '+',      '+']
];

$students2 = [
  ['',       'Cliff Brasfield', 'Jerrod Ellers', 'Adele Bichrest'],
  ['Week 1', '-',               '-',             '+'],
  ['Week 2', '+',               '+',             '-'],
  ['Week 3', '+',               '-',             '+']
];


$ans = [
  ['',                  'Week 1', 'Week 2', 'Week 3'],
  ['Jeffrie Domingues', '+',      '-',      '+'],
  ['Todd Tinoco',       '+',      '-',      '-'],
  ['Janessa Mikel',     '+',      '+',      '+'],
  ['Cliff Brasfield',   '-',      '+',      '+'],
  ['Jerrod Ellers',     '-',      '+',      '-'],
  ['Adele Bichrest',    '+',      '-',      '+']
];

$out = [];

foreach($students2 as $row_id => $row){
  foreach($row as $col_id => $val){
      $out[$col_id][$row_id] = $val;
  }
}
// unset($out[0]);

$result = array_merge($students1, $out);
$result= array_map("unserialize", array_unique(array_map("serialize", $result)));
// $result = array_unique($result);
print_r ($result);