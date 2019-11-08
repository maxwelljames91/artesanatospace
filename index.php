    <!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Divulgação de produtos artesanais do Brasil.">
    <meta name="keywords" content="Artesanato, Arte, Cultura, Divulgação, Venda">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Maxwell James, Edvaldo Cavalcanti, Israel Jeronimo">
    <title> Artesanato Space - Valorizando a arte feito à mão do Brasil </title>
    <!-- Compiled and minified CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" href="img/icon.png">
    
</head>


    <header class="cabecalho">

        <div class="navbar">
            <nav>
                <div class="nav-wrapper light brown">
                        
                    <!-- Ícone para abrir no Mobile -->
                    <a href="#" data-target="mobile-navbar" class="sidenav-trigger">
                        <i class="material-icons">menu</i>
                    </a>

<!--------------------------------- MENU SUPERIOR --------------------------------->
    
                    <ul id="navbar-items" class="hide-on-med-and-down">
                        <li><a href="id.html">Home</a></li>
                        <li><a href="sobrenos.html">Sobre Nós</a></li>
                        <li><a href="#">Artesãos</a></li>
                        <li><a class="dropdown-trigger" data-target="dropdown-m" href="#">Categorias</a></li>
                        <li><a class="dropdown-trigger" data-target="dropdown-entre" href="#">Login/Cadastro</a></li>
                    </ul>

                    <!-- Dropdown categorias-->
                    <ul id="dropdown-m" class="dropdown-content">
                      <li><a id="corLink" href="catCasa.html">Barro</a></li>
                      <li><a href="catDecoracao.html">Bordados</a></li>
                      <li><a href="catBijouteria.html">Madeira</a></li>
                      <li><a href="catBolcaCarteira.html">Reciclados ♻</a></li>
                    </ul>

                    <!-- dropdown login/cadastro -->
                    <ul id="dropdown-entre" class="dropdown-content">
                       <li><a href="#">Entrar 🔑</a></li>
                       <li class="divider"></li>
                       <li><a href="criarconta.html">Cadastrar 📝</a></li>
                    </ul>
                 
                </div>
            </nav>
        </div>

<!--------------------------------- CAMPO DE PESQUISA --------------------------------->
  
  <nav>
    <div class="nav-wrapper light brown">
      <form>
        <div class="input-field">
          <input id="search" type="search" placeholder="O que você deseja encontrar?">
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
  </nav>
    
<!--------------------------------- MENU MOBILE --------------------------------->
        <ul id="mobile-navbar" class="sidenav">
            <li><a href="id.html">Home</a></li>
            <li><a href="sobrenos.html">Sobre Nós</a></li>
            <li><a href="#">Artesãos</a></li>
            <li><a href="#">Entrar 🔑</a></li>
            <li><a href="criarconta.html">Cadastrar 📝</a></li>
            <li class="divider" tabindex="-1"></li>
            <li><a class="dropdown-trigger" data-target="dropdown-nav" href="#">
                Categorias <i class="material-icons right">arrow_drop_down</i>
            </a></li>
        </ul>

        <!-- Dropdown mobile -->
  <ul id='dropdown-nav' class='dropdown-content'>
    <li><a href="catCasa.html">Barro</a></li>
    <li><a href="catDecoracao.html">Bordados</a></li>
    <li><a href="catBijouteria.html">Madeira</a></li>
    <li><a href="catBolcaCarteira.html">Reciclados ♻</a></li>
  </ul>
</header>

    <footer class="page-footer light brown">
            <div class="rodape">
              <div class="row">
                <div class="col l6 s12">
                  <h5 class="white-text" class="">Ajuda e Contato</h5>
                 <i class="material-icons">face</i>
                 <i class="material-icons">local_see</i>
                 <i class="material-icons">people</i>
                </div>
                <div class="col l4 offset-l2 s12">
                  <h5 class="white-text"></h5>
                  <ul>
                    <li><a class="grey-text text-lighten-3" href="#!"></a></li>
                    <li><a class="grey-text text-lighten-3" href="#!"></a></li>
                    <li><a class="grey-text text-lighten-3" href="#!"></a></li>
                    <li><a class="grey-text text-lighten-3" href="#!"></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="footer-copyright white">
              <div class="rodape">
              <img src="img/logo.png" align="center">
              <a class="text-light-blue darken-1"><b>Polo Norte 2019 © Copyright todos os direitos</b></a>
              </div>
            </div>
    </footer>