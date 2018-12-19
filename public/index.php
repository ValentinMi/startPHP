<?php
// public/index.php
require __DIR__.'/../vendor/autoload.php';

echo 'Hello World!<br>';

$foo = 123;
dump($foo);

$bar = 3.14;
dump($bar);

$baz = true;
dump($baz);

$lorem = "lorem ipsum";
dump($lorem);

$values = [123, 3.14, true, 'lorem ipsum'];
dump($values);

if ($foo > 100) {
    echo 'la variable $foo est supérieur à 100<br>';
}

if ('123' !== 123) {
    echo '123 et 123 sont différents<br>';
}

echo 'toto alias \'the dev\'<br>';

for ($i = 0; $i < count($value); $i++) {
    echo $value[$i].'<br>';
}

foreach ($values as $value) {
    echo $value.'<br>';
}

$valuesAndKeys =[
    'user' => 'toto',
    'email' => 'toto@pop.eu.com',
    'newsletter' => false,
];

echo $valuesAndKeys['email'].'<br>';
$valuesAndKeys['newsletter'] = true;

echo $valuesAndKeys['newsletter'] ? 'true<br>' : 'false<br>';

$valuesAndKeys = [
    1 => 123,
    2 => 3.14,
    3 => 'foo',
    4 => true,
];

function add($a, $b) {
    return $a + $b;
}

echo add(2, 3).'<br>';

switch ($userChoice) {
    case 1:
        echo 'userChoice est 1<br>';
        break;
    case 2:
        echo 'userChoice est 2<br>';
        break;
    case 3:
        echo 'userChoice est 3<br>';
        break;
    default:
        echo 'autre cas<br>';
}
