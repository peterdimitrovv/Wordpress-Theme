<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/css/bootstrap-colorpicker.css" />
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/js/bootstrap-colorpicker.min.js"></script>
<div class="wrap">
	<form action="options.php" method="POST">
		<?php settings_fields("group-name")?>
		<label>Menu color: </label>
		<input type="text" name="menu-color" id="menuColor" value="<?=get_option('menu-color')?>">
		<label>Menu font color: </label>
		<input type="text" name="menu-font-color" id="menuFontColor" value="<?=get_option('menu-font-color')?>">
		<?php submit_button()?>
	</form>
</div>