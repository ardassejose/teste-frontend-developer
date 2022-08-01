<<<<<<< HEAD
<?php
include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  
    <!-- CSS -->
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

    * {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
    }

    html,
    body {
      width: 100%;
      height: 100vh;
      scroll-behavior: smooth;
    }

    body {
      background-color: #9aadbd;
    }

    .navegacao {
      width: 77%;
      color: #FFF;
    }

    .navegacao span a {
      font-weight: 500;
    }

    .navegacao span a {
      text-decoration: none;
      padding: 1rem;
      text-decoration: none;
      font-weight: 600;
      background-color: #FFF;
      border-radius: 0.5rem;
      color: #0F7173;
      text-align: center;
    }

    .headline {
      width: 80%;
      background-color: #9aadbd;
    }

    .headline h1,
    p {
      margin: 0;
      background: none;
      color: #FFF;
      text-align: left;
    }

    .headline p {
      font-size: 1rem;
      text-align: left;
    }

    .headline h1 {
      font-size: 4.5rem;
      font-weight: 700;
    }

    form {
      width: 100%;
    }

    .formulario {
      width: 100%;
      background-color: #FFF;
      color: #0F7173;
      border-radius: 0.5rem;
    }

    .formulario h3 {
      text-align: center;
      font-size: 1.3rem;
      font-weight: 700;
      padding-top: 1rem;
    }

    .formulario input,
    textarea {
      width: 90%;
      margin-bottom: 1rem;
      padding: 0.5rem;
      font-weight: 700;
      border: 1.5px solid #0F7173;
      border-radius: 0.2rem;
      width: 100%;
    }

    .quemSomos {
      width: 85%;
      background-color: #FFF;
    }

    .quemSomos h2 {
      color: #0F7173;
      font-size: 2rem;
      font-weight: 600;
    }

    .quemSomos p {
      color: #0F7173;
      font-size: 1rem;
      font-weight: 300;
      text-align: justify;
      letter-spacing: 1px;
    }

    .beneficios {
      background-color: #eff0f5;
      text-align: center;
    }

    .beneficios h3 {
      color: #0F7173;
      font-weight: 700;
    }

    .beneficios p {
      color: #0F7173;
      text-align: justify;
    }

    .CTA {
      border: none;
      font-weight: 500;
      font-size: 1.5rem;
      background-color: #5b6e81;
      border-radius: 0.5rem;
      color: #fff;
      padding: 1rem;
    }

    .QA {
      background-color: #fff;
    }

    .QA p {
      color: #0F7173;
      padding-top: 0.3rem;
    }

    .QA h3 {
      color: #0F7173;
      text-align: center;
      font-weight: 700;
    }

    .QA .box {
      border: 2px solid #0F7173;
      border-radius: 5px;
      padding-top: 0.5rem;
      padding-bottom: 1rem;
      margin-bottom: 1rem;
    }

    .QA hr {
      margin: 0;
      padding: 0;
    }

    .QA .box h4 {
      margin: 0;
      padding: 0;
      font-size: 1.2rem;
      color: #0F7173;
      font-weight: 500;
      text-align: center;
    }

    .QAbloco h5 {
      color: #0F7173;
    }

    .ultCTA-color {
      background-color: #5b6e81;
    }

    .ultCTA {
      background-color: #5b6e81;
      color: #FFF;
      text-align: center;
      width: 85%;
    }

    .ultCTA button {
      width: 80%;
      background-color: #484D6D;
      color: #fff;
      padding: 0.5rem;
      font-weight: 700;
      font-size: 1rem;
      border-radius: 0.25rem;
      border: none;
    }

    .ultCTA button a {
      text-decoration: none;
      color: #fff;
    }

    .ultCTA h2 {
      font-size: 3rem;
      font-weight: 900;
    }

    .ultCTA h2,
    p {
      text-align: center;
    }

    .ultCTA .box p {
      padding: 1rem;
      color: #484D6D;
    }

    .box {
      border-radius: 0.25rem;
      background-color: #fff;
    }

    .rodape {
      text-align: center;
      background: #44596a;
      color: #FFF;
    }

    .rodape a {
      text-decoration: none;
      color: #FAFFD8;
    }

    /* --- RESPONSIVIDADE --- */

    @media (min-width:316px) and (max-width:766px) {
      .headline h1 {
        font-size: 2.5rem;
        text-align: center;
      }

      .navegacao {
        text-align: center;
      }

      .navegacao a {
        display: none;
      }

      .formulario {
        width: 100%;
      }
    }

    @media (min-width: 512.1px) and (max-width: 1023.99px) {

      html,
      body {
        width: 100%;
        height: 100vh;
      }

      .navegacao {
        text-align: center;
      }


      .navegacao {
        text-align: center;
      }

      .headline h1 {
        margin-top: 10px;
        font-size: 3.5rem;
        text-align: center;
      }

      .quemSomos img {
        height: 200px;
      }

      .quemSomos h2 {
        font-size: 1.5rem;
      }

      .quemSomos p {
        font-size: 1.1rem;
      }

      .quemSomos .texto {
        width: 100%;
      }

      .ultCTA h2 {
        font-size: 2rem;
      }

      .ultCTA .box {
        margin-top: 1rem;
      }

      .rodape .textoAux1 {
        font-size: 0.9rem;
      }

      .rodape .textoAux2 {
        font-size: 0.8rem;
      }
    }
  </style>

  <title>Landing Page</title>
</head>

<body>
  <!-- Barra de navegação -->
  <div class="container navegacao">
    <div class="row">
      <div class="col-md-6 pt-3">
        <img src="assets/img/ardsWebLogo.png" height="60" height="30" alt="">
      </div>
      <div class="col-md-6 my-auto d-flex justify-content-end pt-3">
        <span class="navbar-text">
          <a href="https://api.whatsapp.com/send?phone=5522996051275&text=Ol%C3%A1%2C%20V%C3%ADctor!%20Vim%20atrav%C3%A9s%20da%20landing%20page%20voc%C3%AA%20criou!">(22) 9 9605 - 1275</a>
        </span>
      </div>
    </div>
  </div>
  <!-- Fim Barra de navegação -->

  <!-- headline -->
  <div class="container-fluid headline">
    <div class="row pt-1 pb-5">
      <div class="col-lg-8 pt-2 pb-5 mx-auto my-auto">
        <!-- Headline -->
        <h1>Mais do que uma página, uma experiência!</h1>
        <br>
        <p>Uma landing page é muito mais do que uma página, é uma forma de atrair mais clientes pro seu negócio e impactá-lo!</p>
        <p>Por isso aqui da Ards.Web o seu negócio vale <span style="color: yellow;">OURO</span> e merece uma página única, direta ou ponto e que converte</p>
        <!-- Fim Headline -->
      </div>
      <div class="col-lg-4">
        <!-- Formulário -->
        <div class="container-fluid mt-5">
          <div class="formulario">
            <h3 id="formPrincipal">Faça um orçamento!</h3>
            <form action="coletarDados.php" method="post" class="p-3">
              <input type="text" name="nomePessoa" id="nomePessoa" placeholder="NOME: ">
              <br>
              <input type="email" name="emailPessoa" id="emailPessoa" placeholder="E-MAIL: ">
              <br>
              <input type="tel" name="telefone" id="telefone" placeholder="DDD + TELEFONE: ">
              <br>
              <textarea name="descOrcamento" id="desOrcamento" rows="5" placeholder="COMO PODEMOS TE AJUDAR?"></textarea>
              <br>
              <input type="submit" class="CTA" value="Enviar!">
            </form>
          </div>
        </div>
        <!-- Fim Formulário -->
      </div>
    </div>
  </div>
  <!-- Fim headline -->

  <!-- Quem Somos? -->
  <div class="container-fluid bg-white">
    <div class="container-fluid quemSomos pt-5 pb-5">
      <div class="row">
        <div class="col-md-6 my-auto pb-3" align="center">
          <img height="250" src="assets/img/profile-pic.png" alt="Foto Quem Somos">
        </div>
        <div class="col-md-6 pb-3 my-auto container">
          <div class="w-100">
            <h2>Quem somos?</h2>
            <p>Fundados em 2022, nascemos com a missão de transformar a experiência do usuário durante a navegação web</p>
            <p>Com apoio das linguagens mais modernas e utilizadas do mercado, entregamos desde landing pages até E-commerces para o seu negócio como um todo.</p>
            <p>Integramos todos os setores da sua empresa e cuidamos do visual da sua página web!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Fim Quem Somos? -->

  <!-- Benefícios -->
  <div class="container-fluid beneficios pt-5 pb-5">
    <div class="row pb-2 mx-auto">
      <div class="col-12">
        <h3>Com nossos serviços você terá: </h3>
      </div>
    </div>
    <!-- Listagem benefícios -->
    <div class="row pt-4 pb-4">
      <div class="col-md-6 p-3">
        <!-- Item 1.1 -->
        <div class="col-sm-4 my-auto mx-auto pb-4" align="center">
          <img height="80" src="https://www.flaticon.com/svg/vstatic/svg/3917/3917538.svg?token=exp=1659117129~hmac=03c83537e65fdcb9fee824879da56c2d" alt="Presença Web">
        </div>
        <div class="col-sm-8 my-auto mx-auto">
          <h4>Presença web</h4>
          <p>Você irá aparecer nos principais mecanismos de pesquisa, aumentando a visibilidade de sua marca!</p>
        </div>
      </div>
      <!-- Fim Item 1.1-->

      <!-- Item 1.2 -->
      <div class="col-md-6 p-3">
        <div class="col-sm-4 my-auto mx-auto pb-4" align="center">
          <img height="80" src="https://www.flaticon.com/svg/vstatic/svg/7653/7653174.svg?token=exp=1659117246~hmac=1eb938ed428ba5b48f717b0a169eac08">
        </div>
        <div class="col-sm-8 my-auto mx-auto">
          <h4>Maior conversão</h4>
          <p>Evite evasão do seu site com uma página profissional e otimizada para dispostivos móveis</p>
        </div>
      </div>
      <!-- Fim Item 1.2-->
    </div>

    <div class="row pb-4">
      <!-- Item 2.1 -->
      <div class="col-md-6 p-3">
        <div class="col-sm-4 mx-auto my-auto pb-4" align="center">
          <img height="80" src="https://www.flaticon.com/svg/vstatic/svg/3916/3916604.svg?token=exp=1659117276~hmac=0d581de046ed01cc6891c8bccc5a44f9">
        </div>
        <div class="col-sm-8 mx-auto my-auto">
          <h4>Aumento de vendas</h4>
          <p>Sabia que um site com uma aparência profissional e otimizado converte em até 10x mais?</p>
        </div>
      </div>
      <!-- Fim 2.1 -->

      <!-- Item 2.2 -->
      <div class="col-md-6 p-3">
        <div class="col-sm-4 mx-auto my-auto pb-4" align="center">
          <img height="80" src="https://www.flaticon.com/svg/vstatic/svg/7653/7653246.svg?token=exp=1659117200~hmac=da8247712c0c002ec22325fb1dacc03b" alt="Economia de tempo e dinheiro">
        </div>
        <div class="col-sm-8 mx-auto my-auto">
          <h4>Economia de tempo e dinheiro</h4>
          <p>Você não precisa gastar rios de dinheiro para ter uma página funcional e com design agradável. Aqui prezamos pela qualidade</p>
        </div>
      </div>
      <!-- Fim 2.2 -->
    </div>
    <!-- Fim listagem benefícios -->

    <!-- CTA -->
    <div class="pt-4">
      <a href="#" class="CTA btn btn-lg">Faça seu orçamento!</a>
    </div>
    <!-- Fim CTA -->
  </div>
  </div>
  <!-- Fim benefícios -->



  <!-- Perguntas Frequentes -->
  <div class="container-fluid QA pt-5 pb-5">
    <div class="row">
      <h3 class="container-fluid pb-5">Perguntas Frequentes</h3>
    </div>
    <!-- Bloco de pergunta -->
    <div class="QAbloco">
      <div id="accordion" class="">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Quanto tempo minha página fica pronta?
              </button>
            </h5>
          </div>

          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
              Tudo dependerá do tamanho e complexidade do projeto. Mas no geral, uma página simples pode ser feita em até 3 dias, passando por toda uma revisão técnica e testes.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Não gostei do serviço. Vocês dão garantia?
              </button>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
              Como todo negócio legal, damos sim garantia por conta de insatisfação do cliente. Damos o prazo de 7 dias corridos para você contestar insatisfação. Após isso, podemos negociar.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Poderia ficar melhor. Tenho direito a fazer mudanças na página?
              </button>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
              Você não só pode como deve falar o jeito como você gostaria que sua página fique, afinal, ela é sua! Porém limitamos a 3 mudanças por página contratada.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Como é feito o orçamento?
              </button>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
              Levamos em conta o grau de complexidade do serviço, quanto tempo será realizado e o número de páginas a serem feitas. Além disso, cobramos uma pequena manutenção mensal para deixar a página disponível.
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Fim Bloco de pergunta -->
  </div>
  <!-- Fim Perguntas Frequentes -->

  <!-- Última chamada para a ação -->
  <div class="container-fluid ultCTA-color">
    <div class="container pt-5 pb-5 ultCTA">
      <div class="row">
        <div class="col-md-6 my-auto">
          <h2>Não perca tempo!</h2>
          <p>Chegou até aqui e ainda não se cadastrou? Fala sério... Bora pedir uma demonstração!</p>
        </div>
        <div class="col-md-6 my-auto">
          <div class="container mt-sm-5">
            <div class="box">
              <p>Ainda hoje nossa equipe irá lhe responder, não perca mais tempo e solicite agora e não perca a chance de faturar mais!</p>
              <button><a href="#formPrincipal">Preencher formulário</a></button>
              <p>Estamos prontos para lhe atender</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Fim Última chamada para a ação -->

  <!-- Rodapé -->
  <div class="container-fluid rodape pt-3 pb-3">
    <div class="row">
      <div class="col-12">
        <p class="textoAux1">ards.web © Todos os Direitos Reservados - 2022</p>
        <p class="textoAux2">CNPJ: 99.999.999 - 0009-99 • <span><a href="">TERMOS DE USO</a></span></p>
      </div>
    </div>
  </div>
  <!-- Fim Rodapé -->

  <!-- Latest compiled JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

=======
<?php
include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  
    <!-- CSS -->
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

    * {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
    }

    html,
    body {
      width: 100%;
      height: 100vh;
      scroll-behavior: smooth;
    }

    body {
      background-color: #9aadbd;
    }

    .navegacao {
      width: 77%;
      color: #FFF;
    }

    .navegacao span a {
      font-weight: 500;
    }

    .navegacao span a {
      text-decoration: none;
      padding: 1rem;
      text-decoration: none;
      font-weight: 600;
      background-color: #FFF;
      border-radius: 0.5rem;
      color: #0F7173;
      text-align: center;
    }

    .headline {
      width: 80%;
      background-color: #9aadbd;
    }

    .headline h1,
    p {
      margin: 0;
      background: none;
      color: #FFF;
      text-align: left;
    }

    .headline p {
      font-size: 1rem;
      text-align: left;
    }

    .headline h1 {
      font-size: 4.5rem;
      font-weight: 700;
    }

    form {
      width: 100%;
    }

    .formulario {
      width: 100%;
      background-color: #FFF;
      color: #0F7173;
      border-radius: 0.5rem;
    }

    .formulario h3 {
      text-align: center;
      font-size: 1.3rem;
      font-weight: 700;
      padding-top: 1rem;
    }

    .formulario input,
    textarea {
      width: 90%;
      margin-bottom: 1rem;
      padding: 0.5rem;
      font-weight: 700;
      border: 1.5px solid #0F7173;
      border-radius: 0.2rem;
      width: 100%;
    }

    .quemSomos {
      width: 85%;
      background-color: #FFF;
    }

    .quemSomos h2 {
      color: #0F7173;
      font-size: 2rem;
      font-weight: 600;
    }

    .quemSomos p {
      color: #0F7173;
      font-size: 1rem;
      font-weight: 300;
      text-align: justify;
      letter-spacing: 1px;
    }

    .beneficios {
      background-color: #eff0f5;
      text-align: center;
    }

    .beneficios h3 {
      color: #0F7173;
      font-weight: 700;
    }

    .beneficios p {
      color: #0F7173;
      text-align: justify;
    }

    .CTA {
      border: none;
      font-weight: 500;
      font-size: 1.5rem;
      background-color: #5b6e81;
      border-radius: 0.5rem;
      color: #fff;
      padding: 1rem;
    }

    .QA {
      background-color: #fff;
    }

    .QA p {
      color: #0F7173;
      padding-top: 0.3rem;
    }

    .QA h3 {
      color: #0F7173;
      text-align: center;
      font-weight: 700;
    }

    .QA .box {
      border: 2px solid #0F7173;
      border-radius: 5px;
      padding-top: 0.5rem;
      padding-bottom: 1rem;
      margin-bottom: 1rem;
    }

    .QA hr {
      margin: 0;
      padding: 0;
    }

    .QA .box h4 {
      margin: 0;
      padding: 0;
      font-size: 1.2rem;
      color: #0F7173;
      font-weight: 500;
      text-align: center;
    }

    .QAbloco h5 {
      color: #0F7173;
    }

    .ultCTA-color {
      background-color: #5b6e81;
    }

    .ultCTA {
      background-color: #5b6e81;
      color: #FFF;
      text-align: center;
      width: 85%;
    }

    .ultCTA button {
      width: 80%;
      background-color: #484D6D;
      color: #fff;
      padding: 0.5rem;
      font-weight: 700;
      font-size: 1rem;
      border-radius: 0.25rem;
      border: none;
    }

    .ultCTA button a {
      text-decoration: none;
      color: #fff;
    }

    .ultCTA h2 {
      font-size: 3rem;
      font-weight: 900;
    }

    .ultCTA h2,
    p {
      text-align: center;
    }

    .ultCTA .box p {
      padding: 1rem;
      color: #484D6D;
    }

    .box {
      border-radius: 0.25rem;
      background-color: #fff;
    }

    .rodape {
      text-align: center;
      background: #44596a;
      color: #FFF;
    }

    .rodape a {
      text-decoration: none;
      color: #FAFFD8;
    }

    /* --- RESPONSIVIDADE --- */

    @media (min-width:316px) and (max-width:766px) {
      .headline h1 {
        font-size: 2.5rem;
        text-align: center;
      }

      .navegacao {
        text-align: center;
      }

      .navegacao a {
        display: none;
      }

      .formulario {
        width: 100%;
      }
    }

    @media (min-width: 512.1px) and (max-width: 1023.99px) {

      html,
      body {
        width: 100%;
        height: 100vh;
      }

      .navegacao {
        text-align: center;
      }


      .navegacao {
        text-align: center;
      }

      .headline h1 {
        margin-top: 10px;
        font-size: 3.5rem;
        text-align: center;
      }

      .quemSomos img {
        height: 200px;
      }

      .quemSomos h2 {
        font-size: 1.5rem;
      }

      .quemSomos p {
        font-size: 1.1rem;
      }

      .quemSomos .texto {
        width: 100%;
      }

      .ultCTA h2 {
        font-size: 2rem;
      }

      .ultCTA .box {
        margin-top: 1rem;
      }

      .rodape .textoAux1 {
        font-size: 0.9rem;
      }

      .rodape .textoAux2 {
        font-size: 0.8rem;
      }
    }
  </style>

  <title>Landing Page</title>
</head>

<body>
  <!-- Barra de navegação -->
  <div class="container navegacao">
    <div class="row">
      <div class="col-md-6 pt-3">
        <img src="assets/img/ardsWebLogo.png" height="60" height="30" alt="">
      </div>
      <div class="col-md-6 my-auto d-flex justify-content-end pt-3">
        <span class="navbar-text">
          <a href="https://api.whatsapp.com/send?phone=5522996051275&text=Ol%C3%A1%2C%20V%C3%ADctor!%20Vim%20atrav%C3%A9s%20da%20landing%20page%20voc%C3%AA%20criou!">(22) 9 9605 - 1275</a>
        </span>
      </div>
    </div>
  </div>
  <!-- Fim Barra de navegação -->

  <!-- headline -->
  <div class="container-fluid headline">
    <div class="row pt-1 pb-5">
      <div class="col-lg-8 pt-2 pb-5 mx-auto my-auto">
        <!-- Headline -->
        <h1>Mais do que uma página, uma experiência!</h1>
        <br>
        <p>Uma landing page é muito mais do que uma página, é uma forma de atrair mais clientes pro seu negócio e impactá-lo!</p>
        <p>Por isso aqui da Ards.Web o seu negócio vale <span style="color: yellow;">OURO</span> e merece uma página única, direta ou ponto e que converte</p>
        <!-- Fim Headline -->
      </div>
      <div class="col-lg-4">
        <!-- Formulário -->
        <div class="container-fluid mt-5">
          <div class="formulario">
            <h3 id="formPrincipal">Faça um orçamento!</h3>
            <form action="coletarDados.php" method="post" class="p-3">
              <input type="text" name="nomePessoa" id="nomePessoa" placeholder="NOME: ">
              <br>
              <input type="email" name="emailPessoa" id="emailPessoa" placeholder="E-MAIL: ">
              <br>
              <input type="tel" name="telefone" id="telefone" placeholder="DDD + TELEFONE: ">
              <br>
              <textarea name="descOrcamento" id="desOrcamento" rows="5" placeholder="COMO PODEMOS TE AJUDAR?"></textarea>
              <br>
              <input type="submit" class="CTA" value="Enviar!">
            </form>
          </div>
        </div>
        <!-- Fim Formulário -->
      </div>
    </div>
  </div>
  <!-- Fim headline -->

  <!-- Quem Somos? -->
  <div class="container-fluid bg-white">
    <div class="container-fluid quemSomos pt-5 pb-5">
      <div class="row">
        <div class="col-md-6 my-auto pb-3" align="center">
          <img height="250" src="assets/img/profile-pic.png" alt="Foto Quem Somos">
        </div>
        <div class="col-md-6 pb-3 my-auto container">
          <div class="w-100">
            <h2>Quem somos?</h2>
            <p>Fundados em 2022, nascemos com a missão de transformar a experiência do usuário durante a navegação web</p>
            <p>Com apoio das linguagens mais modernas e utilizadas do mercado, entregamos desde landing pages até E-commerces para o seu negócio como um todo.</p>
            <p>Integramos todos os setores da sua empresa e cuidamos do visual da sua página web!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Fim Quem Somos? -->

  <!-- Benefícios -->
  <div class="container-fluid beneficios pt-5 pb-5">
    <div class="row pb-2 mx-auto">
      <div class="col-12">
        <h3>Com nossos serviços você terá: </h3>
      </div>
    </div>
    <!-- Listagem benefícios -->
    <div class="row pt-4 pb-4">
      <div class="col-md-6 p-3">
        <!-- Item 1.1 -->
        <div class="col-sm-4 my-auto mx-auto pb-4" align="center">
          <img height="80" src="https://www.flaticon.com/svg/vstatic/svg/3917/3917538.svg?token=exp=1659117129~hmac=03c83537e65fdcb9fee824879da56c2d" alt="Presença Web">
        </div>
        <div class="col-sm-8 my-auto mx-auto">
          <h4>Presença web</h4>
          <p>Você irá aparecer nos principais mecanismos de pesquisa, aumentando a visibilidade de sua marca!</p>
        </div>
      </div>
      <!-- Fim Item 1.1-->

      <!-- Item 1.2 -->
      <div class="col-md-6 p-3">
        <div class="col-sm-4 my-auto mx-auto pb-4" align="center">
          <img height="80" src="https://www.flaticon.com/svg/vstatic/svg/7653/7653174.svg?token=exp=1659117246~hmac=1eb938ed428ba5b48f717b0a169eac08">
        </div>
        <div class="col-sm-8 my-auto mx-auto">
          <h4>Maior conversão</h4>
          <p>Evite evasão do seu site com uma página profissional e otimizada para dispostivos móveis</p>
        </div>
      </div>
      <!-- Fim Item 1.2-->
    </div>

    <div class="row pb-4">
      <!-- Item 2.1 -->
      <div class="col-md-6 p-3">
        <div class="col-sm-4 mx-auto my-auto pb-4" align="center">
          <img height="80" src="https://www.flaticon.com/svg/vstatic/svg/3916/3916604.svg?token=exp=1659117276~hmac=0d581de046ed01cc6891c8bccc5a44f9">
        </div>
        <div class="col-sm-8 mx-auto my-auto">
          <h4>Aumento de vendas</h4>
          <p>Sabia que um site com uma aparência profissional e otimizado converte em até 10x mais?</p>
        </div>
      </div>
      <!-- Fim 2.1 -->

      <!-- Item 2.2 -->
      <div class="col-md-6 p-3">
        <div class="col-sm-4 mx-auto my-auto pb-4" align="center">
          <img height="80" src="https://www.flaticon.com/svg/vstatic/svg/7653/7653246.svg?token=exp=1659117200~hmac=da8247712c0c002ec22325fb1dacc03b" alt="Economia de tempo e dinheiro">
        </div>
        <div class="col-sm-8 mx-auto my-auto">
          <h4>Economia de tempo e dinheiro</h4>
          <p>Você não precisa gastar rios de dinheiro para ter uma página funcional e com design agradável. Aqui prezamos pela qualidade</p>
        </div>
      </div>
      <!-- Fim 2.2 -->
    </div>
    <!-- Fim listagem benefícios -->

    <!-- CTA -->
    <div class="pt-4">
      <a href="#" class="CTA btn btn-lg">Faça seu orçamento!</a>
    </div>
    <!-- Fim CTA -->
  </div>
  </div>
  <!-- Fim benefícios -->



  <!-- Perguntas Frequentes -->
  <div class="container-fluid QA pt-5 pb-5">
    <div class="row">
      <h3 class="container-fluid pb-5">Perguntas Frequentes</h3>
    </div>
    <!-- Bloco de pergunta -->
    <div class="QAbloco">
      <div id="accordion" class="">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Quanto tempo minha página fica pronta?
              </button>
            </h5>
          </div>

          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
              Tudo dependerá do tamanho e complexidade do projeto. Mas no geral, uma página simples pode ser feita em até 3 dias, passando por toda uma revisão técnica e testes.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Não gostei do serviço. Vocês dão garantia?
              </button>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
              Como todo negócio legal, damos sim garantia por conta de insatisfação do cliente. Damos o prazo de 7 dias corridos para você contestar insatisfação. Após isso, podemos negociar.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Poderia ficar melhor. Tenho direito a fazer mudanças na página?
              </button>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
              Você não só pode como deve falar o jeito como você gostaria que sua página fique, afinal, ela é sua! Porém limitamos a 3 mudanças por página contratada.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Como é feito o orçamento?
              </button>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
              Levamos em conta o grau de complexidade do serviço, quanto tempo será realizado e o número de páginas a serem feitas. Além disso, cobramos uma pequena manutenção mensal para deixar a página disponível.
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Fim Bloco de pergunta -->
  </div>
  <!-- Fim Perguntas Frequentes -->

  <!-- Última chamada para a ação -->
  <div class="container-fluid ultCTA-color">
    <div class="container pt-5 pb-5 ultCTA">
      <div class="row">
        <div class="col-md-6 my-auto">
          <h2>Não perca tempo!</h2>
          <p>Chegou até aqui e ainda não se cadastrou? Fala sério... Bora pedir uma demonstração!</p>
        </div>
        <div class="col-md-6 my-auto">
          <div class="container mt-sm-5">
            <div class="box">
              <p>Ainda hoje nossa equipe irá lhe responder, não perca mais tempo e solicite agora e não perca a chance de faturar mais!</p>
              <button><a href="#formPrincipal">Preencher formulário</a></button>
              <p>Estamos prontos para lhe atender</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Fim Última chamada para a ação -->

  <!-- Rodapé -->
  <div class="container-fluid rodape pt-3 pb-3">
    <div class="row">
      <div class="col-12">
        <p class="textoAux1">ards.web © Todos os Direitos Reservados - 2022</p>
        <p class="textoAux2">CNPJ: 99.999.999 - 0009-99 • <span><a href="">TERMOS DE USO</a></span></p>
      </div>
    </div>
  </div>
  <!-- Fim Rodapé -->

  <!-- Latest compiled JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

>>>>>>> 04d6be23b7693450db58e05670c0f3446251254b
</html>