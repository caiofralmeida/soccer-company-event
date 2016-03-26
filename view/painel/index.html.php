<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $appConfig->name; ?></title>
        
            <link rel="stylesheet" href="soccer-company-event/css/app.css">
        
    </head>
    <body>

        

<div class="top-bar">
    <div class="top-bar-left">
        <ul class="menu">
            <li class="menu-text"><?php echo $appConfig->name; ?></li>
        </ul>
    </div>
    <div class="top-bar-right">
        <ul class="menu">
            <li><a class="button alert" href="/logout">Sair</a></li>
        </ul>
    </div>
</div>


<div class="off-canvas-wrapper">

    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
        <div class="off-canvas position-left reveal-for-large" id="user-painel" data-off-canvas data-position="left">
    <div class="row column">

    <span class="nome-user label">Caio Almeida</span>
    <ul>
        <li><span class="label">desenvolvimento</a></li>
        <li><span class="label">5 jogos</a></li>
    </ul>
    </div>
</div>

        <div class="off-canvas-content" id="conteudo-painel" data-off-canvas-content>

            <div class="row small-up-2 medium-up-3 large-up-4">
                <?php $this->partial('component/card.html', array('name' => 'Novo jogador', 'img' => '/images/icons/male.png', 'link' => '/jogadores')); ?>
                <?php $this->partial('component/card.html', array('name' => 'Novo evento', 'img' => '/images/icons/calendar.png', 'link' => '/eventos')); ?>
            </div>
            <hr>

            <div class="callout">
                <div class="row column">
                    <h3>Próximo evento</h3>
                    <p class="lead">
                        <ul>
                            <li>Data: Terça-feira (25/03/2016)</li>
                            <li>Local: Av. Batatais, 559</li>
                        </ul>
                    </p>
                </div>
            </div>

            <h3>Jogadores</h3>

            <div class="row">
                <table>
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Próximo evento</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Caio Almeida</td>
                            <td>Confirmado</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



        
            <script src="soccer-company-event/bower_components/jquery/dist/jquery.js"></script>
            <script src="soccer-company-event/bower_components/what-input/what-input.js"></script>
            <script src="soccer-company-event/bower_components/foundation-sites/dist/foundation.js"></script>
            <script src="soccer-company-event/node_modules/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
            <script src="soccer-company-event/js/app.js"></script>
        
    </body>
</html>
