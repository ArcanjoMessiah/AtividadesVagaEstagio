<?php

include_once 'webcomplement.html';



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
    <link rel="stylesheet" href="style.css" />

</head>

<body>



    <br><br>

    <form action="Atividade2.php" method="post">
        <div class="container">
            <div class="card bg-dark text-white text-center font-weight-bold">
                <div class="menu-bar">
                    <div>

                        <a class="nav-link dropdown text-white" href="#" id="navbardrop" data-toggle="dropdown">
                            <h2>| Atividades |</h2>
                        </a>

                        <div class="dropdown-menu float-center">
                            <a class="dropdown-item" href="Atividade1.php" target="centro">Atividade 1</a>
                            <a class="dropdown-item" href="Atividade2.php" target="centro">Atividade 2</a>
                            <a class="dropdown-item" href="Atividade3.php" target="centro">Atividade 3</a>
                            <a class="dropdown-item" href="Atividade4.php" target="centro">Atividade 4</a>
                            <a class="dropdown-item" href="Atividade5.php" target="centro">Atividade 5</a>
                        </div>



                    </div>
                </div>



                <div class="card-body">
                    <h2>Atividade 3 </h2>
                </div>

                <div class="content"> Letra A Resposta:

                    <?php
                    $sequence = array();
                    $number = 1;
                    for ($i = 0; $i < 4; $i++) {
                        array_push($sequence, $number);
                        $number += 2;
                        echo " " . $number . ",";
                    }

                    ?>

                </div>

                <div class="content"> Letra B Resposta:
                    <?php
                    $sequence = array(2);
                    for ($i = 1; $i < 7; $i++) {
                        $number = end($sequence) * 2;
                        array_push($sequence, $number);

                        echo $number;
                        echo ", ";
                    }
                    echo " ...";

                    ?>


                </div>


                <div class="content"> Letra C Resposta:
                    <?php
                    $sequenceC = array(0, 1, 4, 9, 16, 25, 36);
                    $odd_number = 2;
                    $last_number = end($sequenceC);
                    $penult_number = prev($sequenceC);
                    $next_number = $last_number + ($last_number - $penult_number) + $odd_number;


                    echo "Próximo número = " . $next_number . " = " . $last_number . " + (" . $last_number . " - " . $penult_number . ") + " . $odd_number;


                    ?>
                </div>


                <div class="content"> Letra D Resposta:
                    <?php
                    $sequenceD = array(4, 16, 36, 64);
                    $last_number = end($sequenceD);
                    $next_number = $last_number * 2;
                    echo "Sequência: ultimo número * 2 <br>";

                    echo "Próximo número: " . $next_number . " = " . $last_number . " * 2";
                    ?>
                </div>


                <div class="content"> Letra E Resposta:
                    <?php
                    $sequenceE = array(1, 1, 2, 3, 5, 8);
                    $last_n = end($sequenceE);
                    $penult_n = prev($sequenceE);
                    $next_n = $last_n + $penult_n;
                    echo "Sequência: ";

                    echo "Próximo número: " . $next_n . " = " . $last_n . " + " . $penult_n . "<br>";

                    print_r($sequenceE);
                    ?>
                </div>


                <div class="content"> Letra F Resposta:
                    <?php

                    echo 'Os números que tem nome iniciado com a letra D <br><br>';
                    function numeroPorExtenso($numero)
                    {
                        $unidades = array('', 'um', 'dois', 'três', 'quatro', 'cinco', 'seis', 'sete', 'oito', 'nove');
                        $dezenas = array('', 'dez', 'vinte', 'trinta', 'quarenta', 'cinquenta', 'sessenta', 'setenta', 'oitenta', 'noventa');
                        $especiais = array('dez', 'onze', 'doze', 'treze', 'catorze', 'quinze', 'dezesseis', 'dezessete', 'dezoito', 'dezenove');
                        $unidades2 = array('', 'cem','duzentos','trezentos','quatrocentos','quinhentos','seicentos','setecentos','oitocentos','novecentos');

                        if ($numero < 10) {
                            return $unidades[$numero];
                        } elseif ($numero >= 10 && $numero < 20) {
                            return $especiais[$numero - 10];
                        } elseif ($numero % 10 == 0 && $numero < 100) {
                            return $dezenas[$numero / 10];
                        } elseif ($numero >= 20 && $numero < 100) {
                            return $dezenas[floor($numero / 10)] . ' e ' . $unidades[$numero % 10];
                        } elseif ($numero >= 100 && $numero < 1000) {
                            $centenas = floor($numero / 100);
                            $resto = $numero % 100;
                            $dezenas = ($resto == 0) ? '' : ' e ' . numeroPorExtenso($resto);
                            return $unidades2[$centenas] . '  ' . $dezenas . '' .$unidades[$numero % 10];
                        } else {
                            return 'Número inválido!';
                        }
                    }

                    for ($i = 1; $i <= 200; $i++) {
                        $extenso = numeroPorExtenso($i);
                        if (substr($extenso, 0, 1) === 'd') {
                            echo $i . ' por extenso: ' . $extenso . '<br>';
                        }
                    }
                    ?>
                    

                </div>




            </div>





</body>

</html>