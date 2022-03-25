<!DOCTYPE html>
<section style="min-height: calc(100vh - 83px);" class="light-bg">


    <head>
        <meta charset = "utf-8">
        <title>Criar Novo Anúncio</title>
    </head>
    <div class="col-lg-offset-2 col-lg-8 ">
    <body>
        <main>
            <h2>NOVO ANÚNCIO</h2>
            <form action = "<?=base_url() ?>Home/anunciar_adm"  method = "post">
                <label for="nome">Nome do anuncio</label>
                <input class="form-control" type = "text" id = "nome" name = "nome"><br><br>

                <label for="data">Data</label>
                <input class="form-control" type = "date" id = "data" name = "data">
                <label for="hora">Horário</label>
                <input class="form-control" type = "time" id = "hora" name = "hora"><br><br>

                <label for="cep">CEP</label>
                <input class="form-control" type = "text" id = "cep" name = "cep"><br><br>

                <label for="telefone">Telefone</label>
                <input class="form-control" type = "tel" id = "telefone" name = "telefone"><br><br>

                <label for="porte">Porte do Cachorro</label>
                <select name="porte" id="porte">
                    <option value="Pequeno">Grande</option>
                    <option value="Médio">Médio</option>
                    <option value="Grande">Pequeno</option>
                </select><br><br>

                <label for="preco">Preço</label>
                <input class="form-control" type="number" id = "preco" name = "preco" min="0.0" step="0.0" /><br><br>

                <textarea class="form-control" rows="4" cols="50" name ="descricao" placeholder = "Descrição"></textarea><br><br>

                <button type = "submit" name = "enviar">ENVIAR</button>
            </form>
        </main>
    </body>
    </div>
</section>