<section style="min-height: calc(150vh - 0px);" class="light-bg">
<script src="<?php echo base_url(); ?>public/js/jquery-3.5.1.js"></script>
<script src="<?php echo base_url(); ?>public/js/jquery.dataTables.min.js"></script>
<link href="<?php echo base_url(); ?>public/css/jquery.dataTables.min.css" rel="stylesheet">
<!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
<!-- <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet"></link> -->
<!-- CSS only -->


<script>
  $(document).ready(function() {
    $('#example').DataTable({
      "pagingType": "full_numbers"
    });
  });
</script>
<style type="text/css">

.modal-body {
    position: relative;
    flex: 1 1 auto;
    padding: 1rem
}


</style>

<h2 style=" text-align: center">Anúncios</h2>
<br><br>

<div class="col-lg-offset-2 col-lg-8 ">
  <?php
  if(isset($tipo) && $tipo != '') {

    ?>
<div class="alert alert-info">
  A lista foi ordenada: <strong><?php echo $tipo; ?></strong> em <strong><?php echo $tempo; ?></strong>
</div>
  <?php } ?>
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
          <td><a href="<?php echo base_url(); ?>Home/anuncio/<?php echo $anuncio['ID_ANUNCIOS'] ?>" ><?php echo $anuncio['NOME_ANUNCIO']  ?> </a></td>
          <td><?php echo $anuncio['DESCRICAO_ANUNCIO']  ?></td>
          <td> R$ <?php echo  $anuncio['PRECO']  ?></td>
        </tr>
      <?php endforeach ?>
    </tbody>
    <button style="background-color: #fed136;"type="button" class="btn" data-toggle="modal" data-target="#tipo">Ordena</button>
    <br><br>
  </table>
</div>










<!-- Modal Escolher Bubble ou Quick -->
<form id="formAPI" action = "<?=base_url() ?>Home/ordena/"  method = "post">

<div class="modal fade" id="tipo" tabindex="-1" role="dialog" aria-labelledby="tipo" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="padding: 1">
      <div class="modal-header">
        <p class="modal-title" id="exampleModalLabel">Escolha Bubble ou Quick</p>
        <button type="button" style="margin-top:-30px" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <button style="background-color: #00FFFF;width:200px;margin-left:50px;" type="button" class="btn" id="tipo"  data-toggle="modal" value="0" data-target="#parametro0">Bubble</button>
      <button style="background-color: red;margin-left:50px;width:200px" type="button" id="tipo" class="btn" data-toggle="modal" value="1" data-target="#parametro1">Quick</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal Escolher Ordem Alfabética ou Preço -->
<div class="modal fade" id="parametro0" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title" id="exampleModalLabel">Escolha em Ordem Alfabética ou Preço </p>
        <button type="button" style="margin-top:-30px" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <button style="background-color: #00FFFF;width:200px;margin-left:50px;" type="submit" class="btn" data-toggle="modal" id="parametro" onclick="ipChange(0,0);"  value="0" >Ordem Alfabética</button>
      <button style="background-color: red;margin-left:50px;width:200px" type="submit" class="btn" data-toggle="modal" id="parametro" onclick="ipChange(0,1);"  value="1" >Preço</button>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Escolher Ordem Alfabética ou Preço -->
<div class="modal fade" id="parametro1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title" id="exampleModalLabel">Escolha em Ordem Alfabética ou Preço </p>
        <button type="button" style="margin-top:-30px" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <button style="background-color: #00FFFF;width:200px;margin-left:50px;" type="submit" class="btn" data-toggle="modal" id="parametro" onclick="ipChange(1,0);"  value="0" >Ordem Alfabética</button>
      <button style="background-color: red;margin-left:50px;width:200px" type="submit" class="btn" data-toggle="modal" id="parametro" onclick="ipChange(1,1);"  value="1" >Preço</button>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
      </form>
</section>




<script>
    function ipChange(tipo, parametro){
    let urlApi = '<?=base_url() ?>Home/ordena/';
    let elementoForm = document.querySelector('#formAPI');
    elementoForm.action = urlApi + tipo + '/' + parametro;
    }
</script>

