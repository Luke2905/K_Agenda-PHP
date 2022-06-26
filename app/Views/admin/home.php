<?php $this->extend("admin/layout_adm");?>

<?php $this->section("home");?>

<div class="graficos">

<div id="grafico1">
    <h3>Agendamentos</h3>
</div>

<script>

    var el = document.getElementById("grafico1");
    var options = {
        chart: {
            type: 'bar',
            heigth: 100,
            width: 700
        },
        series: [
            {
                name: 'Agendamentos',
                data: [    <?php 
    foreach($agendamento->getResult('array') as $row){ /*-> retorna os numeros de agendamentos */
      echo "".$row['Agendamentos'].",";
    } 
    ?>]
            },
        ],
        labels: [<?php 
    foreach($agendamento->getResult('array') as $row){ /*-> retorna os nomes dos Profissionais */
      echo "'".$row['nome_pro']."',";
    } 
    ?>],
        colors: ['#004cff'],
        
    };

    var chart = new ApexCharts(el, options);
    chart.render();

</script>

<div id="grafico2"></div>
<script>

    var el = document.getElementById("grafico2");
    var options = {
        chart: {
            type: 'donut',
            heigth: 400,
            width: 400
        },
        series: [64,20,15,50,30],
        labels: ['Corte Normal', 'Trançado', 'Degrade', 'Corte de 1000', 'Quimica'],
        title: {
    text: "Cortes",
    align: 'center',
    margin: 10,
    offsetX: 0,
    offsetY: 0,
    floating: false,
    style: {
      fontSize:  '14px',
      fontWeight:  'bold',
      fontFamily:  undefined,
      color:  '#263238'
    },
}
    };

    var chart = new ApexCharts(el, options);
    chart.render();

</script>
<div>
<h3>Agendamentos do Dia</h3>
<div id="agenda" class="table-wrapper-scroll-y my-custom-scrollbar">
  <table class="table table-bordered table-striped mb-0">
  
    <thead >
      <tr>
        <th scope="col">#</th>
        <th scope="col">Cliente</th>
        <th scope="col">Cabelereiro</th>
        <th scope="col">Agendamento</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    foreach($tabela->getResult('array') as $row){ 


      echo "<tr>";
      echo "<th scope='row'>".$row['id_agend']."</th>";
      echo "<td>".$row['nome_agend']."</td>";
      echo "<td>".$row['nome_pro']."</td>";
      echo "<td>".$row['data_agend']."</td>";
      echo "</tr>";
    } 
    ?>
      
    </tbody>
  </table>

</div>
</div>

</div>

<a href="/Home/index">Sair</a>

<?php $this->endSection(); ?>