<!DOCTYPE html>
<html>
    <head>
        <title>Nossos Serviços</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link  rel="stylesheet" href="./css/header.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/nossos_servicos.css">
    </head>
    <body>
        
        <?php include './header.php';?>

        <section class="intro">
            <div class="content-intro">
                <h3>Conheça nossos serviços para você</h3>
            </div>
        </section>
        <div id="service-tittle-internet" >
            <h1>Planos para desktop</h1>
        </div>
        <div class="container" style="padding-top: 5%; padding-bottom: 5%">
            <div id="basic-plan" class="row">
                <div class="col-md-3">
                    <div class="pricing hover-effect">
                        <div class="pricing-head">
                            <h3>Small Software<span>Programa pequeno</span></h3>
                            <h4><i>A partir de R$</i>600<i>.00</i>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-9" style="margin-top: -1.5%;">
                    <h1 style="color: #01a8e9 ;font-weight: bold">Tenha um software para seu negócio</h1>
                    <h3 style="color: #01a8e9">O que é você pode ter com este serviço?</h3>
                    <p>Um software pode facilitar uma tarefa habitual em seu ambiente de trabalho, podem agilizar a mesma fazendo com que você ou seus
                        funcionários ganhem tempo e se ocupem em outras tarefas produzindo mais ganho a seu negócio.</p>
                    <ul class="pricing-content list-unstyled">
                        <li>
                            <strong>Especificações:</strong>
                            <p> -Java ou C# (Linguagens utilizadas).</p> 
                            <p> -SQLite (banco de dados offline).</p>
                            <p> -Plataforma Windows.</p>
                        </li>
                    </ul>

                    <p style="font-weight: bold">Totalmente personalizado e idealizado por você.</p>

                </div>
            </div>
            <hr style="margin-top: 4%; margin-bottom: 4%">
            <div id="medium-plan" class="row">
                <div class="col-md-3">
                    <div class="pricing hover-effect">
                        <div class="pricing-head">
                            <h3>Local Software <span>programa médio</span></h3>
                            <h4><i>A partir de R$</i>1200<i>.00</i>
                            </h4>
                        </div>  
                    </div>
                </div>
                <div class="col-md-9"  style="margin-top: -1.5%;">
                    <h2 style="color: #01a8e9; font-weight: bold">Tenha um sistema básico online em seu negócio</h2>
                    <h3 style="color: #01a8e9">O que há de diferente ao plano anterior?</h3>
                    <p>Diferente do Small Software que é um sistema offline, este plano oferece um sistema totalmente online internamente
                        no estabelecimento de seu negócio. Podendo facilitar tarefas e processos entre departamentos diferentes.</p>
                    <ul class="pricing-content list-unstyled">
                        <li>
                            <strong>Características:</strong>
                            <p> -Java ou C#.</p> 
                            <p> -MySQL (banco de dados).</p>
                            <p> -Sistema desenvolvido para uma rede local.</p>
                        </li>
                    </ul>
                    <p style="font-weight: bold">Este plano não limita a quantidade de usuários.</p>
                </div>
            </div>
            <hr style="margin-top: 4%; margin-bottom: 4%">
            <div id="medium-plan" class="row">
                <div class="col-md-3">
                    <div class="pricing hover-effect">
                        <div class="pricing-head">
                            <h3>Online Software<span>Programa grande</span></h3>
                            <h4><i>A partir de R$</i>3000<i>.00</i>
                            </h4>
                        </div>  
                    </div>
                </div>
                <div class="col-md-9"  style="margin-top: -1.5%;">
                    <h2 style="color: #01a8e9; font-weight: bold">Tenha um sistema totalmente online para seu negócio</h2>
                    <h3 style="color: #01a8e9">Software totalmente online (local e internet).</h3>
                    <p>Este plano possibilita criar funções e ferramentas a seu software desktop que são acessadas fora do ambiente de trabalho, 
                        como também criar funções e ferramentas que só são acessíveis no ambiente de trabalho.
                    <ul class="pricing-content list-unstyled">
                        <li>
                            <strong>Características:</strong>
                            <p> -Java ou C#.</p> 
                            <p> -SQL Server (banco de dados).</p>
                            <p> -Ambiente online.</p>
                        </li>
                    </ul>
                    <p style="font-weight: bold">Como parte e ou todo o sistema ficará na internet, será necessário um ambiente online para isso.
                        Não arcaremos com o custo deste ambiente.</p>
                </div>
            </div>

            <hr style="margin-top: 4%; margin-bottom: 4%">
            <div id="medium-plan" class="row">
                <div class="col-md-3">
                    <div class="row">
                        <div class="pricing hover-effect">
                            <div class="pricing-head">
                                <h3>Personalizado<span></span></h3>
                            </div>  
                        </div>
                    </div>
                    <div class="row">
                        <button id="btn-enviar-ideia" style=""> ENVIAR IDEIA</button>
                    </div>
                </div>
                <div class="col-md-9"  style="margin-top: -1.5%;">
                    <h2 style="color: #01a8e9; font-weight: bold">Podemos realizar sua ideia</h2>
                    <h5 style="color: #01a8e9">Se sua ideia não encaixa em nenhum dos planos de internet, podemos realiza-la
                        assim. Envio-nos sua ideia e iremos fazer um orçamento completo.</h5>

                </div>
            </div>
        </div>

        <?php include 'footer.php'?>

    </body>
</html>