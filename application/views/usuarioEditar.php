<div class="container">
    <div class="row">
        <!responsivo para smartphone, tablet e pc-->
        <div class="col-xs-1 col-sm-1 col-lg-3"></div>
        <div class="col-xs-10 col-sm-10 col-lg-6">
            <title> <?php echo $completo; ?> </title>

            <?php
            // put your code here
            echo $acronico;
            echo "<br>";
//        echo $completo;
            echo "<p>";
            ?>
            <h2>Editar Usuario</h2>
            <?php echo form_open('usuario/atualizar'); ?>
            <input type="hidden" name="idusuario" id="idusuario" value="<?php echo $usuarioEditar[0]->idusuario; ?>">
            <label>Nome Usuario</label>
            <input name="nomeUsuario" type="text" value="<?php echo $usuarioEditar[0]->nomeUsuario; ?>" required/>
            <p></p>                                        
            <label>Usuario</label>
            <input name="user" type="text" value="<?php echo $usuarioEditar[0]->user; ?>" required/>
            <p></p>
            
            <label>Password</label>
            <input name="senha" type="password" required/>
            <p></p>         
            
            <div class="form-group">
                <label for="perfilAcesso">Perfil</label>
                <select class="form-control" required="required" name="perfilAcesso" id="perfilAcesso">
                    <option value="" >Selecionar Perfil ...</option>
                        <option value="ADM">Administrador</option>
                        <option value="USER">Usuario</option>
                </select>
            </div>
            
            
            <input class="btn btn-success" type="submit" value="Salvar"/>            

            <?php form_close(); ?>
            <p></p>
            <a a class="btn btn-danger"href="<?php echo base_url() . 'usuario'; ?>">Cancelar</a>
        </div>
        <div class="col-xs-1 col-sm-1 col-lg-3"></div>
    </div>
</div>
