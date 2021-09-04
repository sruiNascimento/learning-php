<?php
$randomNumbers = [1, 4, 5, 8, 9, 12];

//Para adicionar um elemento na última posição devemos apenas adicionar sem índice

foreach ($randomNumbers as $number) {
    echo $number . " => " ;
}
echo 'end' . PHP_EOL;

//Adicionando elemento na última posição
$randomNumbers[count($randomNumbers)] = 12;
$randomNumbers[7] = 99;
$randomNumbers[] = 100;

foreach ($randomNumbers as $number) {
    echo $number . " =>  " ;
}
echo 'end' . PHP_EOL;

//caso eu tenha arrays associativos, tereie que adicionar a chave

$logins = ['email' => 'sruy@outlook.com', 'e-mail' => 'narasamp@gmail.com'];
$logins['Email'] = 'top@live.com';

foreach($logins as $k => $v) {
    echo $k . " =>  " . $v . PHP_EOL;
}
