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
    <h2>Contato</h2> 
    <?php echo form_open('contato/inserir'); ?>
    <div class="form-group">
        <label for="nome">Nome</label>
        <input class="form-control" type="text" id="nome" name="nome" type="text" required/>
    </div>    

    <div class="form-group">
        <label for="email">e-mail</label>
        <input id="email" class="form-control" name="email" type="email" required/>
    </div>


    <input class="btn btn-success" type="submit" value="Salvar"/>
    <input class="btn btn-danger" type="reset" value="Limpar"/>

    <?php form_close(); ?>
       
    <div>
<!--        <table class="table table-striped table-dark"  >-->
        <!--Datatables-->
        <table id="contatos" class="table table-striped table-bordered" style="width:100%">
            
            <caption>Contatos</caption>
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">e-mail</th>
                    <th scope="col">Função</th>
                </tr>

            </thead>
            <tbody>


                <?php if ($contatos == FALSE): ?>
                    <tr>
                        <td>Nenhum Contato Encontrado!</td></tr>
                <?php else: ?>
                    <?php foreach ($contatos as $row): ?>
                        <tr>
                            <th scope="row"><?php echo $row->nome; ?></th>
                            <td><?php echo $row->email; ?></td>
                            <td>
                                <a class="btn btn-success" href="<?php echo base_url() . 'contato/editar/' . $row->id; ?>">Editar</a>
                                | 
                                <a class="btn btn-danger" href="<?php echo base_url() . 'contato/excluir/' . $row->id; ?>">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <p></p>
    <a class="btn btn-success" href="<?php echo base_url() . 'home'; ?>">Voltar</a>
</div>
   <script type="text/javascript">
$(document).ready(function () {
        $('#contatos').DataTable({
            language: {
                "url": "https://cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
                },
                iDisplayLength: 10,
                dom: 'Bfrtip',
    buttons: [
        'copy',
        'excel',
        'print'
    ]
        });
    });

    </script>