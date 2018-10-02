<!DOCTYPE html>

<div class="container">
    <div class="row">
        <!responsivo para smartphone, tablet e pc-->
        <div class="col-xs-1 col-sm-1 col-lg-3"></div>
        <div class="col-xs-10 col-sm-10 col-lg-6">
            
             
        <div class="page-content">
    <div class="demo-container mdl-grid">
        <div class="mdl-cell mdl-cell--4-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
        <div class="mdl-cell demo-content content mdl-color-text--grey-800 mdl-cell mdl-cell--4-col">
            <div class="mdl-card__title">
                <h2 class="mdl-card__title-text">Login</h2>
            </div>
            <div class="mdl-card__supporting-text">
                <?php echo form_open('login/autenticar'); ?>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" required="required" name="usuario" id="usuario">
                    <label class="mdl-textfield__label" for="usuario">Usuário</label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="password" required="required" name="senha" id="senha">
                    <label class="mdl-textfield__label" for="senha">Senha</label>
                </div>
                </br>
                <input type="submit" name="acao" value="Entrar" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored"/>
                <input type="reset" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored"/>
                <?php form_close(); ?>  
            </div>
        </div>
        <div class="mdl-cell mdl-cell--4-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
    </div>
</div>
<script type="text/javascript">
    $("#btn-lista").click(function () {
        $("#div-lista").toggleClass("hide");
    });
</script>
       
  </div>
        <div class="col-xs-1 col-sm-1 col-lg-3"></div>
    </div>
</div>    
