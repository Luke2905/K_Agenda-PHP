<?php $this->extend("admin/layout_adm");?>

<?php $this->section("home");?>

<div id="solicitacao"> 
<a href="/Agendamento/selectAgendamento">
<button class="btn btn-outline-dark" >
  
              Solicitações
            <span class="badge bg-dark text-white ms-1 rounded-pill" style="color:white;"><?php 
    foreach($solicitacao->getResult('array') as $row){ /*-> retorna os numeros de agendamentos */
      echo $row['Agendamentos'];
    } 
    ?></span>
    </button>
</a> 

</div>

<div class="graficos">

<div id="grafico3">
    <h3>Agendamentos Cancelados</h3>
</div>

<script>

    var el = document.getElementById("grafico3");
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
    foreach($cancelado->getResult('array') as $row){ /*-> retorna os numeros de agendamentos */
      echo "".$row['Agendamentos'].",";
    } 
    ?>]
            },
        ],
        labels: [<?php 
    foreach($cancelado->getResult('array') as $row){ /*-> retorna os nomes dos Profissionais */
      echo "'".$row['nome_pro']."',";
    } 
    ?>],
        colors: ['#eb1607'],
        
    };

    var chart = new ApexCharts(el, options);
    chart.render();

</script>

<div id="grafico1">
    <h3>Agendamentos por Cabelereiro</h3>
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
</div>
</div>
<script>

    var el = document.getElementById("agenda");
    var options = {
        chart: {
            type: 'line',
            heigth: 100,
            width: 400
        },
        series: [
            {
                name: 'Agendamentos',
                data: [    <?php 
    foreach($grafico->getResult('array') as $row){ /*-> retorna os numeros de agendamentos */
      echo "".$row['Agendamentos'].",";
    } 
    ?>]
            },
        ],
        labels: [<?php 
    foreach($grafico->getResult('array') as $row){ /*-> retorna os nomes dos Profissionais */
      echo "'".$row['Data']."',";
    } 
    ?>],
        colors: ['#004cff'],
        
    };

    var chart = new ApexCharts(el, options);
    chart.render();

</script>
</div>

<?php $this->endSection(); ?>