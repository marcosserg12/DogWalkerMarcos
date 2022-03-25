<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="js/1.5.2.js"></script>

<section style="min-height: calc(100vh - 83px);" class="light-bg">
    <div class="container">

        <div class="row">
            <div class="col-lg-offset-3 col-lg-6 text-center">
                <h2>Sua Conta</h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-offset-5 col-lg-2 text-center">
            <div class="form-group">
                <a class="btn btn-link" href="restrito/logoff"><i class="fa fa-sign-out"></i></a>
            </div>
        </div>
    </div>

    <div class="container">

        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_cadastro" role="tab" data-toggle="tab"><i class="far fa-user-circle"></i> Meu Cadastro</a></li>
            <li><a href="#tab_anuncios" role="tab" data-toggle="tab"><i class="fas fa-mail-bulk"></i> Meus Anuncios</a></li>
            <li><a href="#tab_anunciar" role="tab" data-toggle="tab"><i class="fas fa-scroll"></i> Anunciar</a></li>
        </ul>

        <div class="tab-content">
            <div id="tab_cadastro" class="tab-pane active">
                <br><br>
                <div class="row">


                    <div class="col-md-8">
                        <h5>Login</h5>
                        <h2> <?php echo $perfil['USER_LOGIN']; ?> </h2>
                    </div>
                    <h5>Apelido</h5>
                    <div class="col-md-4">
                        <h2><?php echo $perfil['APELIDO']; ?></h2>
                    </div>
                    <h5>CEP</h5>
                    <div class="col-md-12">
                        <h2 id="cep"><?php echo $perfil['CEP']; ?></h2>
                    </div>
                    <h5>CPF</h5>
                    <div class="col-md-12">
                        <h2><?php echo $perfil['CPF']; ?></h2>
                    </div>


                </div>

            </div>

            <div id="tab_anuncios" class="tab-pane">
                <table id="example1" class="display table table-hover table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Anúncio</th>
                            <th>Descrição</th>
                            <th>Preço</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($anuncios as $anuncio) : ?>

                            <tr>
                                <td><a href="<?php echo base_url(); ?>Home/anuncio/<?php echo $anuncio['ID_ANUNCIOS'] ?>"><?php echo $anuncio['NOME_ANUNCIO']  ?> </a></td>
                                <td><?php echo $anuncio['DESCRICAO_ANUNCIO']  ?></td>
                                <td> R$ <?php echo  $anuncio['PRECO']  ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>

            </div>


            <div id="tab_anunciar" class="tab-pane">

                <div class="col-lg-offset-2 col-lg-8 ">

                    <body>
                        <main>
                            <!-- <h2>NOVO ANÚNCIO</h2> -->
                            <br>
                            <form action="<?= base_url() ?>Home/anunciar" method="post">
                                <label for="nome">Nome do anuncio</label>
                                <input required="required" class="form-control" type="text" id="nome" name="nome">

                                <label for="data">Data</label>
                                <input required="required" class="form-control" type="date" id="data" name="data">
                                <label for="hora">Horário</label>
                                <input required="required" class="form-control" type="time" id="hora" name="hora">

                                <label for="cep">CEP</label>
                                <input required="required" class="form-control cep" placeholder="99999-999" maxlength="8" type="text" id="cep" name="cep">
                                <label for="telefone">Telefone</label>
                                <input required="required" class="form-control fone" maxlength="11" type="tel" placeholder="(61)99999-9999" id="telefone" name="telefone">
                                <label for="porte">Porte do Cachorro</label>
                                <select required="required" class="form-control" name="porte" id="porte">
                                    <option value="Grande">Pequeno</option>
                                    <option value="Médio">Médio</option>
                                    <option value="Pequeno">Grande</option>
                                </select>

                                <label for="preco">Preço</label>
                                <input required="required" class="form-control" type="number" id="preco" name="preco" min="0.0" step="0.0" /><br>

                                <textarea required="required" class="form-control" rows="4" cols="50" name="descricao" placeholder="Descrição"></textarea><br>

                                <button class="form-control" type="submit" name="enviar">ENVIAR</button>
                            </form>
                        </main>
                    </body>
                </div>



            </div>
        </div>

    </div>
    <div class="container">



</section>