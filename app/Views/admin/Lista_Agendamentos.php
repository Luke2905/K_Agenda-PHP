<?php $this->extend("admin/layout_adm");?>

<?php $this->section("Lista_Agendamentos");?>

<div class="container_agenda">
    <table class="tabela_agenda">
        <thead>
            <tr class="titulo_agenda">
                <th>ID</th>
                <th>Cliente</th>
                <th>Cabelereiro</th>
                <th>Agendamento</th>
                <th></th>
                <th></th>
            <?php foreach($tabela->getResult('array') as $row){ 

echo "</tr>";
echo "<tr class='Conteudo_agenda'>";
echo "<th scope='row'>".$row['id_agend']."</th>";
echo "<td>".$row['nome_agend']."</td>";
echo "<td>".$row['nome_pro']."</td>";
echo "<td>".$row['data_agend']."</td>";
echo "<td>".$row['hora_agend']."</td>";
echo "<form action='/Agendamento/concluirAgendamento' method='post'>";
echo "<td><button class='feito'' name='Feito' type='submit' value='".$row['id_agend']."'>Feito</button></td>";
echo "</form>";
echo "<form action='/Agendamento/cancelarAgendamento' method='post'>";
echo "<td><button class='cancelar' name='Cancelado' type='submit' value='".$row['id_agend']."'>Cancelar</button></td>";
echo "</form>";
echo "</tr>";
} 
?>

            
        </thead>
    </table>
</div>

<?php $this->endSection(); ?>