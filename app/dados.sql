

select agendamento.nome_agend,agendamento.email_agend,profissionais.nome_pro, agendamento.data_agend from agendamento inner join profissionais on agendamento.id_pro=profissionais.id_pro;