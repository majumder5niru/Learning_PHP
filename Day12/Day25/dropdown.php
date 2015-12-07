<?php

	function dropdown( $name, array $options, $selected=null )
	{
		
		$dropdown = '<select name="'.$name.'" id="'.$name.'">'."\n";

		$selected = $selected;
		
		foreach( $options as $key=>$option )
		{
			
			$select = $selected==$key ? ' selected' : null;

			
			$dropdown .= '<option value="'.$key.'"'.$select.'>'.$option.'</option>'."\n";
		}

		
		$dropdown .= '</select>'."\n";

		
		return $dropdown;
	}
	?>

<form>

	<?php
	$name = 'my_dropdown';
	$options = array( 'premio', 'Corola', 'suffari' );
	$selected = 1;

	echo dropdown( $name, $options, $selected );

	?>
</form>