<?php


$pessoas = array(); //Função de array, adiciona valores.


array_push($pessoas, array(
    "nome"=>"Francisco",
    "idade"=>22,
    "Sexo" => 'M'
)); //Adicina valor ao array

array_push($pessoas, array(
    "nome"=>"Maria",
    "idade"=>52,
    "Sexo" => 'F'
)); 

print_r($pessoas);

   array_pop($pessoas); // Apaga o ultimo vetor

print_r($pessoas);



?>