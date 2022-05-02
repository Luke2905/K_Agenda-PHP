<?php $this->extend("admin/layout_adm");?>

<?php $this->section("home");?>

<div class="graficos">

<div id="grafico1">
    <h3>Frequencia</h3>
</div>

<script>

    var el = document.getElementById("grafico1");
    var options = {
        chart: {
            type: 'line',
            heigth: 100,
            width: 700
        },
        series: [
            {
                name: 'Homens',
                data: [10,50,35,40,70]
            },
            {
                name: 'Mulheres',
                data: [60,35,50,40,20]
            }
        ],
        labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio'],
        colors: ['#004cff', '#ff00ea'],
        
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
<h3>Agendamentos Dia</h3>
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
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Gilvan</td>
        <td>25/04/2022 14:00</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Marcos</td>
        <td>25/04/2022 13:00</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>Spencer</td>
        <td>25/04/2022 13:00</td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>Lucas</td>
        <td>Gilvan</td>
        <td>25/04/2022 15:00</td>
      </tr>
      <tr>
        <th scope="row">5</th>
        <td>Jaco</td>
        <td>Gilvan</td>
        <td>25/04/2022 16:00</td>
      </tr>
      <tr>
        <th scope="row">6</th>
        <td>Jaime</td>
        <td>Spencer</td>
        <td>25/04/2022 15:00</td>
      </tr>
    </tbody>
  </table>

</div>
</div>

</div>

<a href="/Home/index">Sair</a>

<?php $this->endSection(); ?>