
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
            <h2>Editar Funcao</h2>
            <?php echo form_open('funcao/atualizar'); ?>
            <input type="hidden" name="idfuncao" id="idfuncao" value="<?php echo $funcaoEditar[0]->idfuncao; ?>">
            <label>Função</label>
            <input name="nomefuncao" type="text" value="<?php echo $funcaoEditar[0]->nomefuncao; ?>" required/>
            <p></p>                                        
            
            
            <input class="btn btn-success" type="submit" value="Salvar"/>            

            <?php form_close(); ?>
            <p></p>
            <a a class="btn btn-danger"href="<?php echo base_url() . 'funcao'; ?>">Cancelar</a>
        </div>
        <div class="col-xs-1 col-sm-1 col-lg-3"></div>
    </div>
</div>
