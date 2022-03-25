<!DOCTYPE html>
<section style="min-height: calc(100vh - 83px);" class="light-bg">


    <head>
        <meta charset="utf-8">
        <title>Criar Novo Anúncio</title>
    </head>
    <div class="col-lg-offset-2 col-lg-8 ">

        <body>
            <main>
                <br>
                <div class="row">


                    <div class="col-md-8">
                        <h2> <?php echo $lista['NOME_ANUNCIO']; ?> </p>
                    </div>
                    <div class="col-md-4">
                        <h2>R$<?php echo $lista['PRECO']; ?></p>
                    </div>

                    <div class="col-md-12">
                        <h3><?php echo $lista['DESCRICAO_ANUNCIO']; ?></h3>
                    </div>

                    <div class="col-md-4">
                        <label for="telefone">Telefone</label>
                        <p><?php echo $lista['TELEFONE']; ?></p>
                    </div>

                    <div class="col-md-4">
                        <label for="cep">CEP</label>
                        <p><?php echo $lista['CEP']; ?></p>
                    </div>

                    <div class="col-md-4">
                        <label for="porte">Porte do Cachorro</label>
                        <p><?php echo $lista['PORTE']; ?></p>
                    </div>

                    <div class="col-md-4">
                        <label for="data">Data</label>
                        <p><?php echo date('d/m/Y', strtotime($lista['DATA'])); ?> </p>
                    </div>

                    <div class="col-md-4">
                        <label for="hora">Horário</label>
                        <p><?php echo $lista['HORA']; ?></p>
                    </div>



                </div>


            </main>
        </body>
    </div>
</section>