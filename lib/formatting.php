<?php
	// nl2p
	// This function will convert newlines to HTML paragraphs
	// without paying attention to HTML tags. Feed it a raw string and it will
	// simply return that string sectioned into HTML paragraphs
	
	function nl2p($str) {
	    $arr=explode("\n",$str);
	    $out='';
	
	    for($i=0;$i<count($arr);$i++) {
	        if(strlen(trim($arr[$i]))>0)
	            $out.='<p>'.trim($arr[$i]).'</p>';
	    }
	    return $out;
	}
	

	function format_content($content) {
	    $contentArr = explode("\n", $content);
	    $output = "";
		$code_flag = false;
		
	    foreach ($contentArr as $entity) {
		    
	    	$entity = trim($entity);
	    	$numChars = strlen($entity);
	  
			
	    	if($entity == '<code>' && $code_flag == false) :
	    		$entity = '<pre><code class="language-php">';
	    		$code_flag = true;
	    	else :
	    		if($code_flag == true) :
	    			if($entity == '</code>') :
	    				$code_flag = false;
	    				$entity = '</code></pre>';
	    			else :
	    				$entity = $entity."\n";
	    			endif;
	    		else : 
			    	if(substr($entity, 0, 1) != "<" && substr($entity, $numChars-1) != ">" && $numChars > 0) :
			    		$entity = '<p>'.$entity.'</p>';
					endif;
				endif;
			endif;
			
	    	
	    	$output .= $entity;
	    }
	    return $output;
	}


?>