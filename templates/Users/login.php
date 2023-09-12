<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <!-- Inclua os arquivos CSS e JavaScript do Materialize -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
  <div class="container">
    <h2>Login</h2>
    <div class="row">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s12">
            <input id="email" type="email" class="validate">
            <label for="email">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="password" type="password" class="validate">
            <label for="password">Senha</label>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'index']) ?>" class="waves-effect waves-light btn">Entrar</a>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- Inicialize os componentes Materialize -->
  <script>
    M.AutoInit();
  </script>
</body>
</html>