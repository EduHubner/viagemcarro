<?php

include_once("lib/conexao.php");

$data =  $conn->prepare("INSERT INTO viagem(Modelo,Placa,Nome,LocaldeOrigem,LocaldeDestino,KM,LitrosGastos,ValorGasolina)
values (:Modelo,:Placa,:Nome,:LocaldeOrigem,:LocaldeDestino,:KM,:LitrosGastos,:ValorGasolina)");//insere no banco de dados

$data->execute(array(
    "Modelo"=>$_POST['modelo'],"Placa"=>$_POST['placa'],
    "Nome"=>$_POST['nome'],"LocaldeOrigem"=>$_POST['origem'],
    "LitrosGastos"=>$_POST['Litros'],"KM"=>$_POST['percorrido'],
    "LocaldeDestino"=>$_POST['destino'],"ValorGasolina"=>$_POST['valor']));

    include "lista_carros.php";//inclue a listagem para os carros
?>