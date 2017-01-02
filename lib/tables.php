<?php
    function build_table($array, $first_item_th = true){
	    // start table
	    $html = '<table>';
	   
	    if($first_item_th) :
		    // header row
		    $html .= '<tr>';
		    foreach($array[0] as $key=>$value) :
		            $html .= '<th>' . $key . '</th>';
		    endforeach;
		    $html .= '</tr>';
	    endif;
	
	    // data rows
	    foreach( $array as $key=>$value) :
	        $html .= '<tr>';
	        foreach($value as $key2=>$value2) : 
	            $html .= '<td>' . $value2 . '</td>';
	        endforeach; 
	        $html .= '</tr>';
	    endforeach;
	
	    // finish table and return it
	
	    $html .= '</table>';
	    return $html;
	}
?>