<?php

include_once 'webcomplement.html';



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4</title>
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
                    <h2>Atividade 4 </h2>
                </div>

                <?php
                // Distância entre Ribeirão Preto e Franca
                $distancia = 100;

                // Velocidade do carro em km/h
                $velocidade_carro = 110;

                // Velocidade do caminhão em km/h
                $velocidade_caminhao = 80;

                // Tempo de viagem do carro em horas
                $tempo_carro = ($distancia / $velocidade_carro);

                // Tempo de viagem do caminhão em horas
                $tempo_caminhao = ($distancia / $velocidade_caminhao) + (10 / 60); // adiciona 10 minutos dos pedágios

                // Distância percorrida pelo carro até o ponto de encontro
                $distancia_carro = $distancia / 2;

                // Distância percorrida pelo caminhão até o ponto de encontro
                $distancia_caminhao = ($velocidade_caminhao * $tempo_caminhao) - 10; // subtrai 10 km dos pedágios


                ?>
                <br><br><br>

                <?php
                // Distância entre Ribeirão Preto e Franca
                $distancia = 100;

                // Velocidade do carro em km/h
                $velocidade_carro = 110;

                // Velocidade do caminhão em km/h
                $velocidade_caminhao = 80;

                // Tempo de viagem do caminhão sem os pedágios em horas
                $tempo_caminhao_sem_pedagio = $distancia / ($velocidade_carro + $velocidade_caminhao);

                // Tempo de viagem do caminhão com os pedágios em horas
                $tempo_caminhao_com_pedagio = $tempo_caminhao_sem_pedagio + (2 * 5 / 60);

                // Distância percorrida pelo caminhão até o ponto de encontro
                $distancia_caminhao = $velocidade_caminhao * $tempo_caminhao_com_pedagio;

                // Distância do ponto de referência (Ribeirão Preto) até o ponto de encontro
                $distancia_referencia_ao_ponto_de_encontro = $distancia - $distancia_caminhao;

                // Verifica qual veículo está mais próximo de Ribeirão Preto
                

                // Imprime a distância do ponto de referência (Ribeirão Preto) até o ponto de encontro
                echo "A distância do ponto de referência (Ribeirão Preto) até o ponto de encontro é de " . $distancia_referencia_ao_ponto_de_encontro . " km.";
                echo "<br><br> No momento em que se cruzam ambos os carros estão há mesma distância de Ribeirão preto"
                ?>
                <br><br><br>


            </div>





</body>

</html>