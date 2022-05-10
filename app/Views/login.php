<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Login</title>
    <style>
    body{
        background-size: 100%;
        background-image: url('https://universoretro.com.br/wp-content/uploads/2020/10/salao-new-order-hair.jpg');
        background-repeat: no-repeat;
    }
    .container{
        padding: 20px;
        margin-top: 100px;   
    }
    h1{
        color: white;
        margin-top: 50px;
        text-align: center;
    }
    .erro{
        color: white;
    }
    .card{
        background-color: transparent;
        color: white;
        border-style: solid;
        border-color: black;
        border-radius: 30px 0px 30px 0;
    }
    .form-control{
        border-style: solid;
        border-color: black;
        border-radius: 70px;
    }
</style>
</head>
<body>
<h1>King Agendamentos</h1>
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <div class="card">
  <div class="card-header">
   Login
  </div>
  <div class="card-body">
   <form action="/Home/autenticar" method="post">
       <label class="form-label" for="">Usuario</label>
       <input class="form-control" type="text" name="usuario" id="">
       <label class="form-label" for="">Senha</label>
       <input class="form-control" type="password" name="senha" id="">
       <button class="mt-3 form-control btn btn-primary" type="submit">Login</button>
       <a href="/Admin/novoUser">Novo Usuario</a>
   </form>
  </div>
</div class="erro"><?php echo isset($erro)? $erro : ''?></div>
        <div class="col"></div>
    </div>
</div>
