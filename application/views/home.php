
<div class="container">
    <div class="row">
        <!responsivo para smartphone, tablet e pc-->
        <div class="col-xs-1 col-sm-1 col-lg-3"></div>
        <div class="col-xs-10 col-sm-10 col-lg-6">
            <?php
            // put your code here
            echo $acronico;
            echo "<br>";
//        echo $completo;
            echo "<p>";
            ?>
            <h2>Home</h2>
            <p></p>
            <a class="btn btn-primary" href="<?php echo base_url() . 'contato'; ?>">Contato</a>
            <a class="btn btn-primary" href="<?php echo base_url() . 'funcao'; ?>">Função</a>
            <a class="btn btn-primary" href="<?php echo base_url() . 'usuario'; ?>">Usuario</a>
            
            </div>
        <div class="col-xs-1 col-sm-1 col-lg-3"></div>
    </div>
</div>    
