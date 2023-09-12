<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Links Externos -->
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="/css/style.css">
    <title>Criar Aluno</title>
</head>
<body class=" yellow lighten-4">
    <header>
        <nav>
            <div class="nav-wrapper indigo darken-4">
            <a href="#" class="brand-logo center">Renan´s Fruit</a>
            <ul id="nav-mobile" class=" right hide-on-med-and-down">
                <li><a href="<?= $this->Url->build(['controller' => 'Frutas', 'action' => 'index']) ?>">Frutas</a></li>
                <li><a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'index']) ?>">Usuarios</a></li>
                <li><a href="<?= $this->Url->build(['controller' => 'Sales', 'action' => 'index']) ?>">Vender</a></li>
                <li><a href="#">Olá, Renan</a></li>
                <li><a href="#">Sair</a></li>
            </ul>
            </div>
        </nav>
    </header>
        <div class="container">
            <div class="row">
                
                <p><?= $this->Flash->render() ?></p>
                
                <main>
                    <?= $this->fetch('content') ?>
                </main>
            </div>
        </div>
        
     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
     <script src="\js\script.js"></script>
</body>
</html>
