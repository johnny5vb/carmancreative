<?php 
extract(shortcode_atts(array("el_class" => ''), $atts));
	

	$columns = explode("[pricing_column", $content);
	$columnsNum = count($columns);
	$columnsNum = $columnsNum - 1;

	switch ($columnsNum) {
		case '2' :
			$column_class = 'two-cols';
			break;
		case '3' :
			$column_class = 'three-cols';
			break;
		case '4' :
			$column_class = 'four-cols';
			break;	
		case '5' :
			$column_class = 'five-cols';
			break;
	}
	
    echo '<div class="row pricing-table '. $column_class . ' ' . $el_class.'">' . do_shortcode($content) . '</div>';


?>