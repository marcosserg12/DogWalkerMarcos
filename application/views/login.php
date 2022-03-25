<script src="<?php echo base_url(); ?>public/js/jquery.min.js"></script>

<section style="min-height: calc(100vh - 83px);" class="light-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-offset-3 col-lg-6 text-center">
                <h2>Login</h2>
                <form id="login_form" method="post">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-user"> </span>
                                    </div>
                                    <input type="text" placeholder="Usuário" id="username" name="username" class="form-control">
                                </div>
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-lock"> </span>
                                    </div>
                                    <input type="password" placeholder="Senha" id="password" name="password" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-block" id="btn_login"> Login </button>
                               <p>Não possui conta?  <a href="<?php echo base_url();?>Home/registrar" > Registrar-se </a> </p>
                            </div>
                            <span class="help-block"></span>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>



</section>