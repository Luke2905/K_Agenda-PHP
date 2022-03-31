<body class="body_form">
<div class="formulario">
    <div class="box">
        <form action="">
            <fieldset>
                <legend><b>Fórmulário de Agrendamento</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                <p>Escolha o Cabeleleiro</p>
                <br>
                <select class="selectList" name="type" id="opc_cabeleleiro" required >
                    <option value="Cabeleleiro 1">Cabeleleiro 1</option>
                    <option value="Cabeleleiro 2">Cabeleleiro 2</option>
                    <option value="Cabeleleiro 3">Cabeleleiro 3</option>
                    <option value="Cabeleleiro 4">Cabeleleiro 4</option>
                    <option value="Cabeleleiro 5">Cabeleleiro 5</option>
                </select>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br>
                <p>Corte:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br><br>
                <label for="data_nascimento"><b>Data do Agentamento</b></label>
                <input type="datetime-local" name="data_nascimento" id="data_agendamento" required>
                <br><br>
                <div class="inputBox">
                <p>Escolha o o Salão</p>
                <br>
                <select class="selectList" name="type" id="opc_salao" required>
                    <option value="Salao 1">Salao Diadema</option>
                    <option value="Salao 2">Salao Santo Andre</option>
                    <option value="Salao 3">Salao Sao Bernado</option>
                </select>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</div>

</body>
