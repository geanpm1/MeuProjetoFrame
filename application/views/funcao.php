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
            <h2>Função</h2> 
            <?php echo form_open('funcao/inserir'); ?>
            <div class="form-group">
                <label for="nome">Função</label>
                <input class="form-control" type="text" id="idfuncao" name="funcao" type="text" required/>
            </div>    

         
          
           
            <input class="btn btn-success" type="submit" value="Salvar"/>
            <input class="btn btn-danger" type="reset" value="Limpar"/>
            <input class="btn btn-dark" id="btn-lista" value="Mostrar lista"/>

            <?php form_close(); ?>

            <div id="div-lista" class="hide">
        <!--        <table class="table table-striped table-dark"  >-->
                <!--Datatables-->
                <table id="funcao" class="table table-striped table-bordered" style="width:100%">

                    <caption>Funcao</caption>
                    <thead class="thead-dark">
                        <tr>
                           <th scope="col">Função</th>
                        </tr>

                    </thead>
                    <tbody>


                        <?php if ($funcao == FALSE): ?>
                            <tr>
                                <td>Nenhuma Função Encontrada!</td></tr>
                        <?php else: ?>
                            <?php foreach ($funcao as $row): ?>
                                <tr>
                                    <td><?php echo $row->nomefuncao; ?></td>
                                    <td>
                                      
                                        <a class="btn btn-success" href="<?php echo base_url() . 'funcao/editar/' . $row->idfuncao; ?>">Editar</a>
                                        | 
                                        <a class="btn btn-danger" href="<?php echo base_url() . 'funcao/excluir/' . $row->idfuncao; ?>">Excluir</a>
                                      
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

            $("#btn-lista").click(function () {
                $("#div-lista").toggleClass("hide");
            });
            $(document).ready(function () {
                $('#funcao').DataTable({
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