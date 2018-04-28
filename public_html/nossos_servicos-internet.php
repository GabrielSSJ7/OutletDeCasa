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
        <script type="text/javascript" src="./js/teste.js"></script>
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
            <h1>Planos para internet</h1>
        </div>
        <div class="container" style="padding-top: 5%; padding-bottom: 5%">
            <div id="basic-plan" class="row">
                <div class="col-md-3">
                    <div class="pricing hover-effect">
                        <div class="pricing-head">
                            <h3>Basic PLAN<span>
                                    Site institucional </span>
                            </h3>
                            <h4><i>A partir de R$</i>500<i>.00</i>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-9" style="margin-top: -1.5%;">
                    <h1 style="color: #01a8e9 ;font-weight: bold">Divulgue sua empresa com um site institucional</h1>
                    <h3 style="color: #01a8e9">O que é um site institucional?</h3>
                    <p>É uma página virtual, dinâmica ou estática, que tem como principal objetivo divulgar a empresa, bem como os seus produtos e/ou serviços oferecidos.</p>
                    <ul class="pricing-content list-unstyled">
                        <li>
                            <strong>Paginas inclusas:</strong>
                            <p> -Home.</p> 
                            <p> -Produtos ou serviços.</p>
                            <p> -Contato.</p>
                            <p> -Cores do site personalizadas ao cliente.<p>
                        </li>
                    </ul>
                    <p style="font-weight: bold">Páginas adicionais: R$75,00</p>
                </div>
            </div>
            <hr style="margin-top: 4%; margin-bottom: 4%">
            <div id="medium-plan" class="row">
                <div class="col-md-3">
                    <div class="pricing hover-effect">
                        <div class="pricing-head">
                            <h3>Medium PLAN <span>Site dinâmico </span></h3>
                            <h4><i>A partir de R$</i>1000<i>.00</i>
                            </h4>
                        </div>  
                    </div>
                </div>
                <div class="col-md-9"  style="margin-top: -1.5%;">
                    <h2 style="color: #01a8e9; font-weight: bold">Crie um site com algum mecânismo básico de interação com o cliente</h2>
                    <h3 style="color: #01a8e9">O que tem de diferente do BASIC PLAN?</h3>
                    <p>Diferente do site institucional, um site dinâmico possui alguma aplicação com funções distintas. Como por exemplo: uma carteira 
                        de cliente online (usando banco de dados). </p>
                    <ul class="pricing-content list-unstyled">
                        <li>
                            <strong>Características:</strong>
                            <p> -WordPress (Tema personalizado a partir do zero).</p> 
                            <p> -MySQL (banco de dados).</p>
                            <p> -Aplicação simples (acordar entre o cliente e WebPeople).</p>
                        </li>
                    </ul>
                    <p style="font-weight: bold">Dependendo do tamanho da aplicação idealizada, o valor possívelmente será aumentando.</p>
                </div>
            </div>
            <hr style="margin-top: 4%; margin-bottom: 4%">
            <div id="medium-plan" class="row">
                <div class="col-md-3">
                    <div class="pricing hover-effect">
                        <div class="pricing-head">
                            <h3>Ecommerce<span>Loja virtual </span></h3>
                            <h4><i>A partir de R$</i>2500<i>.00</i>
                            </h4>
                        </div>  
                    </div>
                </div>
                <div class="col-md-9"  style="margin-top: -1.5%;">
                    <h2 style="color: #01a8e9; font-weight: bold">Tenha uma loja virtual que se encaixa com seu negócio</h2>
                    <h3 style="color: #01a8e9">Loja baseada totalmente em seu estoque</h3>
                    <ul class="pricing-content list-unstyled">
                        <li>
                            <strong>Características:</strong>
                            <p> -PHP.</p> 
                            <p> -SQL Server (banco de dados).</p>
                            <p> -Gateway de pagamento (PagSeguro).</p>
                        </li>
                    </ul>
                    <p style="font-weight: bold">Sistema totalmente autônomo.</p>
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
                        <button id="btn-enviar-ideia" > ENVIAR IDEIA</button>
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