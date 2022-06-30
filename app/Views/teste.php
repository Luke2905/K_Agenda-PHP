<table border="1">
    <tr>
         <td>ID</td>
        <td>Nome</td>
        <td>Profissional</td>
        <td>data</td>
        <td>hora</td>
    </tr>
Agendamentos para  <?php foreach($tabela->getResult('array') as $row){ echo $row['nome_pro'];}?>
    <?php foreach($tabela->getResult('array') as $row){ 

echo "</tr>";
echo "<tr class='Conteudo_agenda'>";
echo "<th scope='row'>".$row['id_agend']."</th>";
echo "<td>".$row['nome_agend']."</td>";
echo "<td>".$row['nome_pro']."</td>";
echo "<td>".$row['data_agend']."</td>";
echo "<td>".$row['hora_agend']."</td>";;
echo "</tr>";
} 
?>

</table>