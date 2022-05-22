# K Agenda

A K Agenda é um site de agendamento de horários que visa simplificar e melhorar o gerenciamento do processo de agendamentos.

# Requisitos necessários para executar o projeto

- XAMPP (https://www.apachefriends.org/pt_br/download.html)
- Composer (https://getcomposer.org/download/)
- Codeigniter 4 (https://codeigniter.com/download)

# Como rodar o projeto

- Ligar o servidor XAMPP
- Clicar no botão "Config" do Apache
- Clicar na opção "PHP (php.ini)"
- Será aberto um arquivo de texto. Navegue até a linha 924 e ative a extensão "Intl" (Retirar o ; da frente da linha)
- Salve o arquivo php.ini
- Reiniciar o XAMPP
- Após reiniciar o XAMPP, Ligue o Apache
- Abra um prompt de comando
- Navegue até a pasta raiz do projeto (K_Agenda-PHP)
- Utilize a seguinte lista de comandos:
- "composer update" (Só precisará ser executado na primeira vez a cada inicialização do projeto)
- "php spark serve --port 80" (Comando utilizado para "depurar" o projeto)

- Profit.