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
  <link rel="stylesheet" href="assets/css/style.css">

  <title>Landing Page</title>
</head>

<body>
  <!-- Barra de navegação -->
  <div class="container-fluid bg-blue p-2">
    <div class="nav navbar">
      <div class="">
        <img width="200" class="img-fluid nav-brand" src="assets/img/ardsWebLogo.png" alt="">
      </div>
      <div class="">
        <button>
          <p><a href="https://api.whatsapp.com/send?phone=5522996051275&text=Ol%C3%A1%2C%20V%C3%ADctor!%20Vim%20atrav%C3%A9s%20da%20landing%20page%20voc%C3%AA%20criou!">(22) 9 9605 - 1275</a></p>
        </button>
      </div>
    </div>
  </div>
  <!-- Fim Barra de navegação -->

  <!-- Apresentação -->
  <div class="container-fluid">
    <div class="row headline pb-5">
      <div class="col-md-6 pt-5 pb-5 my-auto">
        <!-- Headline -->
        <h1>Mais do que uma página, uma experiência!</h1>
        <br>
        <p>Uma landing page é muito mais do que uma página, é uma forma de atrair mais clientes pro seu negócio e impactá-lo!</p>
        <p>Por isso aqui da Ards.Web o seu negócio vale <span style="color: yellow;">OURO</span> e merece uma página única, direta ou ponto e que converte</p>
        <!-- Fim Headline -->
      </div>
      <div class="col-md-6">
        <!-- Formulário -->
        <div class="container mt-5 mx-auto my-auto">
          <div class="formulario">
            <h3 id="formPrincipal">Faça um orçamento!</h3>
            <form action="coletarDados.php" method="post" class="p-3">
              <input type="text" name="nomePessoa" id="nomePessoa" placeholder="Nome: ">
              <br>
              <input type="email" name="emailPessoa" id="emailPessoa" placeholder="E-mail: ">
              <br>
              <input type="tel" name="telefone" id="telefone" placeholder="DDD + Telefone: ">
              <br>
              <textarea name="descOrcamento" id="desOrcamento" rows="5" placeholder="Como podemos te ajudar?"></textarea>
              <br>
              <input type="submit" class="CTA" value="Enviar!">
            </form>
          </div>
        </div>
        <!-- Fim Forumulário -->
      </div>
    </div>
  </div>
  <!-- Fim apresentação -->
  <!-- Quem Somos? -->
  <div class="container-fluid quemSomos pt-5 pb-5">
    <div class="row">
      <div class="col-md-6 pb-3" align="center">
        <img height="300" src="assets/img/profile-pic.png" alt="Foto Quem Somos">
      </div>
      <div class="col-md-6 pb-3 my-auto container">
        <div class="">
          <h2>Quem somos?</h2>
          <p>Fundados em 2022, nascemos com a missão de transformar a experiência do usuário durante a navegação web</p>
          <p>Com apoio das linguagens mais modernas e utilizadas do mercado, entregamos desde landing pages até E-commerces para o seu negócio como um todo.</p>
          <p>Integramos todos os setores da sua empresa e cuidamos do visual da sua página web!</p>
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
        <div class="col-sm-4 my-auto mx-auto" align="center">
          <img height="80" src="https://cdn-icons.flaticon.com/png/512/3059/premium/3059997.png?token=exp=1659021936~hmac=8db48cc4f29e27f73d68b6236bad6233" alt="Presença Web">
        </div>
        <div class="col-sm-8 my-auto mx-auto">
          <h4>Presença web</h4>
          <p>Você irá aparecer nos principais mecanismos de pesquisa, aumentando a visibilidade de sua marca!</p>
        </div>
      </div>
      <!-- Fim Item 1.1-->

      <!-- Item 1.2 -->
      <div class="col-md-6 p-3">
        <div class="col-sm-4 my-auto mx-auto" align="center">
          <img height="80" src="https://cdn-icons-png.flaticon.com/512/1605/1605350.png" alt="Maior Conversão">
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
      <div class="col-sm-4 mx-auto my-auto" align="center">
        <img height="80" src="https://cdn-icons-png.flaticon.com/512/3081/3081559.png" alt="Aumento de vendas">
      </div>
      <div class="col-sm-8 mx-auto my-auto">
        <h4>Aumento de vendas</h4>
        <p>Sabia que um site com uma aparência profissional e otimizado converte em até 10x mais?</p>
      </div>
    </div>
    <!-- Fim 2.1 -->
    
    <!-- Item 2.2 -->
    <div class="col-md-6 p-3">
      <div class="col-sm-4 mx-auto my-auto" align="center">
        <img height="80" src="https://cdn-icons.flaticon.com/png/512/4844/premium/4844499.png?token=exp=1659021763~hmac=03c8a4652b5e4d94b4ea290086aac89e" alt="Economia de tempo e dinheiro">
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
  <div class="pt-2">
    <a href="#" class="CTA">Faça seu orçamento!</a>
  </div>
  <!-- Fim CTA -->
</div>
</div>
  <!-- Fim benefícios -->
  
  <!-- Perguntas Frequentes -->
  <div class="container-fluid QA pt-5 pb-5">
    <div class="row">
      <h3 class="container-fluid">Perguntas Frequentes</h3>
    </div>
    <!-- Bloco de pergunta -->
    <div class="row pt-5">
      <div class="container box">
        <h4 class="p-2">Quanto tempo minha página fica pronta?</h4>
        <hr>
        <p>Tudo dependerá do tamanho e complexidade do projeto. Mas no geral, uma página simples pode ser feita em até 3 dias, passando por toda uma revisão técnica e testes.</p>
      </div>
      <div class="container box">
        <h4 class="p-2">Não gostei do serviço. Vocês dão garantia?</h4>
        <hr>
        <p>Como todo negócio legal, damos sim garantia por conta de insatisfação do cliente. Damos o prazo de 7 dias corridos para você contestar insatisfação. Após isso, podemos negociar.</p>
      </div>
      <div class="container box">
        <h4 class="p-2">Poderia ficar melhor. Tenho direito a fazer mudanças na página?</h4>
        <hr>
        <p>Você não só pode como deve falar o jeito como você gostaria que sua página fique, afinal, ela é sua! Porém limitamos a 3 mudanças por página contratada.</p>
      </div>
      <div class="container box">
        <h4 class="p-2">Como é feito o orçamento?</h4>
        <hr>
        <p>Levamos em conta o grau de complexidade do serviço, quanto tempo será realizado e o número de páginas a serem feitas. Além disso, cobramos uma pequena manutenção mensal para deixar a página disponível.</p>
      </div>
    </div>
    <!-- Fim Bloco de pergunta -->
  </div>
  <!-- Fim Perguntas Frequentes -->

  <!-- Última chamada para a ação -->
  <div class="container-fluid pt-5 pb-5 ultCTA">
    <div class="row">
      <div class="col-md-6 my-auto">
        <h2>Não perca tempo!</h2>
        <p>Chegou até aqui e ainda não se cadastrou? Fala sério... Bora pedir uma demonstração!</p>
      </div>
      <div class="col-md-6 my-auto">
        <div class="container mt-sm-5">
          <div class="box">
            <p>Ainda hoje nossa equipe irá lhe responder, não perca mais tempo e solicite agora e não perca a chance de faturar mais!</p>
            <button><a href="#formPreenchimento">Preencher formulário</a></button>
            <p>Estamos prontos para lhe atender</p>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
</body>

</html>