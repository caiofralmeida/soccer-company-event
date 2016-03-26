<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        
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

            <h3>Novo evento</h3>

            <form>
              <div class="row novo-jogador">
                <div class="medium-6 columns">
                  <label>Nome:
                    <input type="text" placeholder="ex: Futebol 2016">
                  </label>
                  <label>Local:
                    <input type="text" placeholder="ex: Av. Batatais, 559 - Tamboré">
                  </label>
                  <label>Data/Horário:
                      <br />
                    <button class="button">Definir</button>
                  </label>
                  <label>Período (hh:mm):
                      <br />
                    <input type="text" placeholder="ex: 1:30" />
                  </label>
                  <label>Ocorrerá todo mês:
                      <br />
                    Sim <input type="radio" name="mensal" value="1" />
                    Não <input type="radio" name="mensal" value="0" checked />
                  </label>
                  <br />
                  <button class="success button">Adicionar</button>
                </div>
              </div>
            </form>
        </div>
    </div>
</div>



        
            <script src="soccer-company-event/bower_components/jquery/dist/jquery.js"></script>
            <script src="soccer-company-event/bower_components/what-input/what-input.js"></script>
            <script src="soccer-company-event/bower_components/foundation-sites/dist/foundation.js"></script>
            <script src="soccer-company-event/js/app.js"></script>
        
    </body>
</html>
