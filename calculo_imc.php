<?php
// RECEBENDO DADOS DO FORMULÁRIO //
     $peso = $_POST['peso'];
     $altura = $_POST['altura'];

// Calcula o IMC //
     $IMC = $peso / ($altura * $altura);

// Diminui as casas decimais //
     $IMC = round($IMC , 2);

// Calcula o IMC
     echo $IMC;

// Condição multiplas escolhass //
     if ($IMC < 18.5) {
        echo "Abaixo do Peso Normal  ".$IMC;
     }

     elseif ($IMC < 25) {
        echo "Peso Normal  ".$IMC;
     }

     elseif ($IMC < 30) {
        echo "Acima do Peso  ".$IMC;
     }

     
     elseif ($IMC < 35) {
        echo "Obesidade Classe I  ".$IMC;
     }

     elseif ($IMC < 40) {
        echo "Obesidade Classe II  ".$IMC;
     }

     else {
        echo "Obesidade Classe III  ".$IMC;
     }
?>
