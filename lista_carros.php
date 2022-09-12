<h1 style="text-align:center;">Listagem</h1>
<?php
    $consulta = $conn->prepare('SELECT v.IDViagem,v.Modelo,v.Placa,v.Nome,v.LocaldeOrigem,v.LocaldeDestino,v.KM,v.LitrosGastos,v.ValorGasolina from viagem v');
    $consulta->execute();//consulta no banco de dados e passa as informações para a listagem
?>
<div class="shadow p-3 mb-5 bg-body rounded">
<table class='table'>
    <thead>
        <tr>
            <th scope="col">IDCarro</th>
            <th scope="col">Modelo</th>
            <th scope="col">Placa</th>
            <th scope="col">Nome</th>
            <th scope="col">Local de Origem</th>
            <th scope="col">Local de Destino</th>
            <th scope="col">KM/Percoridos</th>
            <th scope="col">LTR/Usados</th>
            <th scope="col">Valor Gasolina</th>
            <th scope="col">Autonomia</th>
            <th scope="col">Valor Gasto</th>
            <th scope="col">Total da Viagem</th>
        </tr>
    </thead>
    <tbody>
            <?php
            while ($linha = $consulta->fetch()){//lista dentro de uma table as informações do carro salvo
            echo "<tr><td>{$linha['IDViagem']}</td>";
            echo "<td>{$linha['Modelo']}</td>";
            echo "<td>{$linha['Placa']}</td>";
            echo "<td>{$linha['Nome']}</td>";
            echo "<td>{$linha['LocaldeOrigem']}</td>";
            echo "<td>{$linha['LocaldeDestino']}</td>";
            echo "<td>{$linha['KM']}</td>";
            echo "<td>{$linha['LitrosGastos']}</td>";
            echo "<td>{$linha['ValorGasolina']}</td>";

            $autonomia = $linha['KM']/$linha['LitrosGastos'];//calcula a autonomia do carro Km/L
            $valorgasto = $linha['ValorGasolina']/$autonomia;//o quanto foi gasto por Km
            $total = $valorgasto * $linha['KM'];//gasto no total
            echo "<td>{$autonomia}</td>";
            echo "<td>{$valorgasto}</td>";
            echo "<td>{$total}</td></tr>";
            }
            ?>
    </tbody>
</table>
</div>