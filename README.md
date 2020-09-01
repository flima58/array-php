
______________________________________________ <h1>Array PHP</h1>_________________________________________


<p>Array com apenas uma dimenção e chamda de Vetor</p>

<strong> Exmeplo</strong>

```html

$frutas = array('Uva', 'Melancia','Abacate','Melão','Banana','Laranja');

print_r($frutas);
```


<h4>Array bidimensional </h4>
<p>São formados com duas alturas, como será mostrado no exemplo abaixo</p>

```html

<?php


$carros [0][0] = "GM";
$carros [0][1] = "Cobalt";
$carros [0][2] = "Onix";
$carros [0][3] = "Camaro";

$carros [1][0] = "Ford";
$carros [1][1] = "fista";
$carros [1][2] = "fusion";
$carros [1][3] = "Eco sport";




    echo "<p>".$carros[0][3]."</p>";
    echo "<p>".end($carros[1])."</p>"; // Pega o ultimo valor do vetor do array $carros[1] 

?>

 ```

<p>Funções para tratar Arrays</p>

```html
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






 ```