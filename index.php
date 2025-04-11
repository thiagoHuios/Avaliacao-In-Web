<?php

$apresentadores = [
    ["Nome" => "Dr. Thiago Brito", "Status" => false, "Assunto" => "Mente do Sistema (Backend)", "Descrição" => "A Mente do Sistema é o cérebro que opera por trás das cortinas. Aqui é onde tudo acontece: dados são processados, regras de negócio são aplicadas e conexões com bancos de dados são feitas. Apesar de invisível para o usuário, é essencial para que tudo funcione corretamente."],
    ["Nome" => "Prof. Andre Callogi", "Status" => true, "Assunto" => "Pontes Digitais (APIs)", "Descrição" => "As Pontes Digitais são as ligações entre sistemas. APIs permitem que softwares diferentes troquem informações com harmonia — como apps que integram pagamentos, mapas ou redes sociais. Elas conectam tudo, sem complicação."],
    ["Nome" => "Dr. Paulo Gabriel", "Status" => true, "Assunto" => "Rosto da Experiência (Frontend)", "Descrição" => "O Rosto da Experiência é a camada visual que transforma toda a lógica do sistema em interação. Ele traduz a complexidade em uma jornada simples e encantadora para o usuário, usando tecnologias modernas para criar interfaces atrativas e responsivas."],
    ["Nome" => "Prof. Kauan Mesquita", "Status" => true, "Assunto" => "Sensação & Navegação (UI/UX)", "Descrição" => "Sensação & Navegação é onde beleza e inteligência se encontram. A UI cuida do visual — cores, formas, tipografia. A UX garante que tudo seja fácil, fluido e intuitivo. É o design que pensa com empatia e cria experiências memoráveis."],
    ["Nome" => "Dra. Isabela Nunes", "Status" => false, "Assunto" => "Cofre de Dados (Banco de Dados)", "Descrição" => "O Cofre de Dados é onde ficam guardadas todas as informações essenciais: usuários, conteúdos, históricos e muito mais. É como um arquivo digital inteligente que garante que os dados estejam sempre seguros, acessíveis e organizados para o sistema utilizar quando necessário."],
    ["Nome" => "Prof. Lucas Ventura", "Status" => false, "Assunto" => "Missão: Lançamento (Deploy)", "Descrição" => "Missão: Lançamento é o momento em que o projeto ganha vida e se conecta ao mundo. O deploy leva a aplicação do ambiente de desenvolvimento até os servidores reais, tornando-a acessível ao público com estabilidade, segurança e performance."]
];


$confirm = '';

$dadosEvento = ["Nome" => "Evento Etech 20256", "Dia" => "28/06/2026", "Local" => "Centro de Eventos Milton Nascimento"]

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    <title>Etech 2026</title>
</head>

<body>
    <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ETech 2026</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#home">Inicio</a>
        <li class="nav-item">
          <a class="nav-link" href="#informaçoes">Informações</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#palestrante">Palestrantes</a>
        </li>

      </ul>
      
    </div>
  </div>
</nav>
    </header>

    <section>
        <div id="home" class="navbarpg">
            <h1>Evento ETech 2026</h1>
        </div>
    </section>

    <header class="headerpg">
        <div class="headlinepg">
            <h2>Bem-vindos ao ETech 2026 – Onde o Futuro Ganha Vida</h2>
            <p>O ETech 2026 é o maior evento universitário de tecnologia da região, reunindo estudantes, pesquisadores, professores e profissionais do setor para três dias de aprendizado, trocas de experiências e muita inovação. </p>
            <p>Nesta edição, o ETech 2026 traz um line-up de palestrantes internacionais, experiências imersivas com IA, robótica, realidade aumentada, blockchain e muito mais.</p>
            <p></p>
            <a class="botao" href="https://brasil.bettshow.com/" target="_blank">Saiba Mais</a>
        </div>
        <div class="img-headlinepg">
            <img style="max-width: 100%; border-radius: 20px;" src="imagens/ChatGPT Image 10 de abr. de 2025, 20_22_38.png" alt="">
        </div>
    </header>

    <section id="informaçoes" class="cardpg-container">
        <article class="cardpg">
          <h2>🌐 ETech 2026 – Encontro Nacional de Tecnologia e Inovação</h2>
          <p>📅Data: 12 a 14 de maio de 2026 <br>
            🚩Local: Centro de Convenções de São Paulo – SP</p>
        </article>
      
        <article class="cardpg">
          <h2>🔍 Sobre o Evento</h2>
          <p>O ETech 2026 é um encontro nacional voltado para universitários e profissionais da área de tecnologia. Realizado em São Paulo, o evento promove palestras, exposições de projetos e uma feira de recrutamento, com foco em temas como IA, cibersegurança e inovação digital.</p>
        </article>
      
        </article>
      </section>


    <div id="palestrante" class="container py-4">
            <div class="row g-4">
                <?php foreach ($apresentadores as $apresentador): ?>
                    <?php
                        if ($apresentador["Status"] == true){
                            $confirm = "Já temos a confirmação e a expectativa poderosa sobre o tema." . $apresentador["Descrição"];
                        } else {
                            $confirm = "Ainda não confirmado, mas a expectativa está crescendo!" . $apresentador["Descrição"];
                        }
                    ?>
                    <div class="col-md-4">
                        <div class="card h-100 shadow">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($apresentador["Nome"]); ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo htmlspecialchars($apresentador["Assunto"]); ?></h6>
                                <p class="card-text"><?php echo $confirm; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2026 ETech. Todos os direitos reservados.</p>
            <p>Desenvolvido por [Seu Nome]</p>
        </div>
    </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>