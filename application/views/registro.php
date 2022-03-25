<section style="min-height: calc(100vh - 83px);" class="light-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-offset-3 col-lg-6 text-center">
                <h2>Registro</h2>
                <form action = "<?=base_url() ?>Home/registrar_usuario"  method = "post">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"> </span>
                                    </div>
                                    <input type="text" required="required" placeholder="Usuário" id="username" name="username" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-lock"> </span>
                                    </div>
                                    <input type="password" required="required" placeholder="Senha" id="password" name="password" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-text-background"> </span>
                                    </div>
                                    <input type="apelido" required="required" placeholder="Apelido" id="apelido" name="apelido" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-envelope"> </span>
                                    </div>
                                    <input type="email" required="required" placeholder="E-mail" id="email" name="email" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-home"> </span>
                                    </div>
                                    <input type="cep" maxlength="8" required="required" placeholder="Cep" id="cep" name="cep" class="form-control cep">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-briefcase"> </span>
                                    </div>
                                    <input type="cpf" maxlength="11" required="required" placeholder="CPF" id="cpf" name="cpf" class="form-control cpf">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-block" id="btn_register"> Registrar-se </button>
                </form>
            </div>
        </div>
    </div>
</section>

