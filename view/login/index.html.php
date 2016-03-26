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

        
<div class="large-4 large-centered columns">
    <div class="row login-container">
        <h5>FutCatho</h5>
        <div class="large-12 columns">
        <form action="/login" method="post">
           <div class="row">

             <div class="large-12 columns input-group">
                  <input type="text" placeholder="usuario" name="username" class="input-group-field">
                  <span class="input-group-label">@catho.com</span>
                </div>
           </div>

          <div class="row">
             <div class="large-12 columns">
                 <input type="password" name="password" placeholder="senha" />
             </div>
          </div>
          <div class="row">
            <div class="large-12 large-centered columns">
              <input type="submit" class="button expand" value="Entrar"/>
            </div>
          </div>
          <?php echo $this->flashSession->output(); ?>
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
