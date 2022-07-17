<?php
  session_start();
  include_once("./includes/funcoes.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistema de Agendamento | Agendix - Carros & Ambientes </title>

    <!-- Bootstrap -->
    <link href="./gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="./gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="./gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="./gentelella/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="./gentelella/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form>
              <h1>Agendix</h1>
              <div>
               Esqueceu sua senha! Informe seu usuário ou email e clique em enviar, você receberá um email com dados para recuperação!
              </div>
              <div>
                <span id="div_mensagem"></span>
              </div>
              <div>
                <input type="text" id="log_usuario"class="form-control" placeholder="usuário ou email" required="" />
              </div>
              
              <div>
                <button type="button" id="log_acessar" class="btn btn-secondary">Enviar</button>
                <a class="reset_pass" href="index.php">Voltar inicio?</a>
              </div>
              <div class="clearfix"></div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
<!-- jQuery -->
<script src="./gentelella/vendors/jquery/dist/jquery.min.js"></script>
<script>
  //login no sistema faz validação;
  $("#log_acessar").click(function(e) {
    if ($('#log_usuario').val() == '' || $('#log_senha').val() == ''){
      $('#div_mensagem').html('Usuário ou senha em branco!');
      $('#div_mensagem').css({'color':'red','text-align':'center'});
    }else{
      $.ajax({
        type: "POST",
        url: "./includes/login.php",
        cache: false,
        dataType: 'json',
        data: {
          log_token: '<?php echo $funcoes->token(date("Ymd")) ?>',
          log_usuario: $('#log_usuario').val(),
          log_senha: $('#log_senha').val()
        },
        success: function(retorno) {
          $('#div_mensagem').html('');
          if (retorno.token == 'valido' && retorno.login == 'valido') {
            location.href='main.php';
          }else if(retorno.token == 'invalido'){
            $('#div_mensagem').html('Token Incorreto');
            $('#div_mensagem').css({'color':'red','text-align':'center'});
          }else if (retorno.login == 'incorreto'){
            $('#div_mensagem').html('Login Incorreto');
            $('#div_mensagem').css({'color':'red','text-align':'center'});
          }
        }
      });
    }
  });
</script>