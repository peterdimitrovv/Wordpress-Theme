<?php 
	$colors = [
		'AliceBlue' => '#F0F8FF',
		'Black' => '#000000',
		'Cyan' => '#00FFFF',
		'Red' => 'red'
	];
?>
<div class="wrap">
	<form method="post" action="options.php">
	<?php settings_fields( 'group-name' ) ?>
	<label>Menu color: <label>
	<select name="menu-color">
	<?php
	foreach($colors as $colorName => $colorHash)
	{
		echo '<option ';
		if($colorHash === get_option('menu-color'))
		{
			echo ' selected="selected" ';
		}
		echo ' value="'.$colorHash.'">'.$colorName.'</option>';
	}
	?>
	
	
	<?php 
	/*
		Old But Gold
		<option value="black">Black</option>
		<option
		<?php
		if(get_option('menu-color') === 'red')
		{
			echo 'selected="selected"';
		}
		?>
		value="red">Red</option>
	*/
	?>
		</select>
	<?php submit_button(); ?>
	</form>
</div>