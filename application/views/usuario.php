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
            <h2>Usuario</h2> 
            <?php echo form_open('usuario/inserir'); ?>
            <div class="form-group">
                <label for="nomeUsuario">Nome Usuario</label>
                <input class="form-control" type="text" id="nomeUsuario" name="nomeUsuario" placeholder="Insira seu Nome!"  required/>
            </div>    
            <div class="form-group">
                <label for="user">Usuario</label>
                <input class="form-control" type="text" id="user" name="user" placeholder="Usado para fazer login" required/>
            </div>    
            <div class="form-group">
                <label for="senha">Senha</label>
                <input class="form-control" type="password" placeholder="Minimo=8 Maximo=32 caracteres!" id="senha" name="senha"  minlength="8" maxlength="32" required/>
            </div>    
            
            <div class="form-group">
                <label for="perfilAcesso">Perfil</label>
                <select class="form-control" required="required" name="perfilAcesso" id="perfilAcesso">
                    <option value="" >Selecionar Perfil ...</option>
                        <option value="ADM">Administrador</option>
                        <option value="USER">Usuario</option>
                </select>
            </div>
            
         
            <input class="btn btn-success" type="submit" value="Salvar"/>
            <input class="btn btn-danger" type="reset" value="Limpar"/>
            <input class="btn btn-dark" id="btn-lista" value="Mostrar lista"/>

            <?php form_close(); ?>

            <div id="div-lista" class="hide">
        <!--        <table class="table table-striped table-dark"  >-->
                <!--Datatables-->
                <table id="usuari" class="table table-striped table-bordered" style="width:100%">

                    <caption>Usuario</caption>
                    <thead class="thead-dark">
                        <tr>
                           <th scope="col">Nome Usuario</th>
                           <th scope="col">Usuario</th>
                           <th scope="col">Perfil Acesso</th>
                        </tr>

                    </thead>
                    <tbody>


                        <?php if ($usuario == FALSE): ?>
                            <tr>
                                <td>Nenhum Usuario Encontrado!</td></tr>
                        <?php else: ?>
                            <?php foreach ($usuario as $row): ?>
                                <tr>
                                    <td><?php echo $row->nomeUsuario; ?></td>
                                    <td><?php echo $row->user; ?></td>
                                    <td><?php echo $row->perfilAcesso; ?></td>
                                    <td>
                                      
                                        <a class="btn btn-success" href="<?php echo base_url() . 'usuario/editar/' . $row->idusuario; ?>">Editar</a>
                                        | 
                                        <a class="btn btn-danger" href="<?php echo base_url() . 'usuario/excluir/' . $row->idusuario; ?>">Excluir</a>
                                      
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
                $('#usuario').DataTable({
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