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
            </tr>
            <tr class="Conteudo_agenda">
                <td>1</td>
                <td>Augusto</td>
                <td>Gusravinho</td>
                <td>12/04/2022</td>
                <form action="Metodo Feito" method="post">
                <td><button class="feito">Feito</button></td>
                </form>
                <form action="Metodo Cancelado" method="post">
                <td><button class="cancelar">Cancelar</button></td>
                </form>
            </tr>
        </thead>
    </table>
</div>

<?php $this->endSection(); ?>