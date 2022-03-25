	<!-- Bootstrap core JavaScript
			================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		<script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
		<!-- <script src="<?php echo base_url(); ?>public/js/owl.carousel.min.js"></script> -->
		<!-- <script src="<?php echo base_url(); ?>public/js/cbpAnimatedHeader.js"></script> -->
		<!-- <script src="<?php echo base_url(); ?>public/js/theme-scripts.js"></script> -->
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="<?php echo base_url(); ?>public/js/ie10-viewport-bug-workaround.js"></script>
		<script src="<?php echo base_url(); ?>public/js/icone.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery.maskedinput.js"></script>
<script>
    $('.fone').mask("(99) 99999-9999");
    $('.cpf').mask("999.999.999-99");
    $('.cep').mask("99999-999");
    $('.data').mask("99/99/9999");
</script>


		<?php if (isset($scripts)){
			foreach ($scripts as $script_name){
				$src = base_url() . "public/js/" . $script_name; ?>
				<script src ="<?=$src?>" rel="stylesheet"> </script>
			<?php }
		} ?>

	</body>
</html>