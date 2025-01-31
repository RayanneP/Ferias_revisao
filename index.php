<?php include('valida_sessao.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ferias</title>
</head>
<body>    
    <!-- Tag semântica para cabeçalho -->
    <header class="menu">
        <a href="#">Minhas Férias</a>
        <nav>
            <ul class="lista">
                <li><a href="#sessao-bingo">Bingo</a></li>
                <li><a href="#sessao-praia">Praia</a></li>
                <li><a href="#sessao-boliche">Boliche</a></li>
            </ul>
        </nav>
    </header>
    
    <section class="titulo-centralizado">
        <h1>Minhas Férias</h1>
    </section>    
    <!-- primeira parte -->
    <section class="flex">
        <div>
            <a href="#sessao-bingo"><img src="img/bingo.jpeg" alt="Imagem de amigos jogando bingo">
            <p>Bingo com amigos</p>
            </a>
        </div>
        <div>
            <a href="#sessao-praia"><img src="img/Praia_Grande_Ubatuba.jpg" alt="Imagem de uma viagem à Praia Grande">
            <p>Viagem na Praia Grande</p>
            </a>
        </div>
        <div>
            <a href="#sessao-boliche"><img src="img/boliche.webp" alt="Imagem de amigos jogando boliche">
            <p>Boliche com amigos</p>
            </a>
        </div>
    </section>

    <div class="content">
        <main>
            <section id="sessao-bingo">
                    <h1>Bingo com amigos</h1>
                   <img src="img/🎲.jpg" alt="">
                        <p>Meus amigos e eu fizemos um bingo com prêmios aleatórios e baratos na casa de uma amiga. Foi um dia muito divertido e engraçado. Eu ganhei um panetone de chocolate e um quebra-cabeça de cachorrinho.</p>
            </section>
            <br>
            <section id="sessao-praia">
                    <h1>Viagem Praia Grande</h1>
                    <img src="https://viagemegastronomia.cnnbrasil.com.br/wp-content/uploads/sites/5/2020/07/MorereBahia.jpg" alt="">
                        <p>Fiz uma viagem para a Praia Grande durante o Ano Novo, acompanhada dos meus irmãos, meu pai, minha prima e meu namorado. Jogamos vôlei na praia, comemos camarão e sorvete, e aproveitamos muito a viagem juntos! Levei várias conchinhas para casa e as colei em um quadro com as fotos da viagem.</p>
            </section>
            <section id="sessao-boliche">
                <h1>Boliche com amigos</h1>
                <img src="img/Boliche.jpg" alt="">
                    <p> Um dos dias mais engraçados das minhas férias foi quando saímos para jogar boliche. Eu e alguns amigos combinamos de nos encontrar na pista de boliche do shopping para nos divertir e competir. Foi muito divertido, mas o ponto alto do dia aconteceu quando a Zanirato, empolgada demais ao lançar a bola, escorregou e, de alguma forma, acabou caindo dentro da vala da pista!
                        Nós rimos tanto que tivemos que fazer uma pausa para nos recompor.
                    </p>
                    <p>
                        Apesar do susto (e da vergonha dela), continuamos jogando, e a Zanirato acabou fazendo um strike logo depois, o que salvou o dia para ela! Foi uma experiência inesquecível e cheia de risadas.
                    </p>
            </section>
        </main>
    </div>
    <footer>
        <p>© 2025 Todos direitos reservados, Minhas Férias</p>
    </footer>
</body>
</html>
