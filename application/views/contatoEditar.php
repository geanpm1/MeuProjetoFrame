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
            <h2>Editar Contato</h2>
            <?php echo form_open('contato/atualizar'); ?>
            <input type="hidden" name="id" id="id" value="<?php echo $contatoEditar[0]->id; ?>">
            <label>Nome</label>
            <input name="nome" type="text" value="<?php echo $contatoEditar[0]->nome; ?>" required/>
            <p></p>
            <label>e-mail</label>
            <input name="email" type="email" value="<?php echo $contatoEditar[0]->email; ?>" required/>
            <p></p>
            <input class="btn btn-success" type="submit" value="Salvar"/>
            <?php form_close(); ?>
            <p></p>
            <a a class="btn btn-danger"href="<?php echo base_url() . 'contato'; ?>">Cancelar</a>
        </div>
        <div class="col-xs-1 col-sm-1 col-lg-3"></div>
    </div>
</div>
