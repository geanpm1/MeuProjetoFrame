<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

<!--Datatables-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/jszip-2.5.0/dt-1.10.18/af-2.3.0/b-1.5.2/b-flash-1.5.2/b-html5-1.5.2/b-print-1.5.2/r-2.2.2/datatables.min.js"></script>

<!--Growl-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-growl/1.0.0/jquery.bootstrap-growl.js"></script>

<div align="center">  <a href='https://app.umbler.com/u/7kl655zk'>
        <img src='https://static.umbler.com/brand/umbler-badges/umbler-badge-hostedby-dark-bg.png' 
             width='80%' alt='Hosted by Umbler'>
    </a> </div>
<div class="container">
    <div class="row">
        <!responsivo para smartphone, tablet e pc-->
        <div class="col-xs-1 col-sm-1 col-lg-3"></div>
        <div class="col-xs-10 col-sm-10 col-lg-6">    
            <?php
            if ($this->session->userdata('estou_logado')) {
                ?>

                <a class="btn btn-primary"  href="<?php echo base_url() . 'login/sair'; ?>">Sair</a>
            <?php } ?>

        </div>
        <div class="col-xs-1 col-sm-1 col-lg-3"></div>
    </div>
</div>    

<!MSG Sistema-->

<?php if ($this->session->flashdata('sucesso')) { ?>
    <script>
        $.bootstrapGrowl("Cadastro realizado com sucesso!", {
            ele: 'body', // which element to append to
            type: 'success', // (null, 'info', 'danger', 'success')
            offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
            align: 'right', // ('left', 'right', or 'center')
            width: 250, // (integer, or 'auto')
            delay: 4000, // Time while the message will be displayed. It's not equivalent to the *demo* timeOut!
            allow_dismiss: true, // If true then will display a cross to close the popup.
            stackup_spacing: 10 // spacing between consecutively stacked growls.
        });
    </script>
<?php } elseif ($this->session->flashdata('falha')) { ?>
    <script>
        $.bootstrapGrowl("Erro ap reallizar cadastro!", {
            ele: 'body', // which element to append to
            type: 'danger', // (null, 'info', 'danger', 'success')
            offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
            align: 'right', // ('left', 'right', or 'center')
            width: 250, // (integer, or 'auto')
            delay: 4000, // Time while the message will be displayed. It's not equivalent to the *demo* timeOut!
            allow_dismiss: true, // If true then will display a cross to close the popup.
            stackup_spacing: 10 // spacing between consecutively stacked growls.
        });
    </script>
<?php } ?>

</body>
</html>


