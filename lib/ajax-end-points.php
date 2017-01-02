<?php
$end_point = $_POST['action'];
# support@clusterpoint.com
# sales@clusterpoint.com
$email_to  = 'support@clusterpoint.com';

require_once('config.inc.php');
require_once('MGAPI.class.php');

switch($end_point) :
	case ($end_point == 'aplication_contact') :
		if(isset($_POST['dn']) && $_POST['dn'] != '') :
			$name  		= $_POST['dn'];
		endif;

		if(isset($_POST['de']) && $_POST['de'] != '') :
			$email 		= $_POST['de'];
		endif;

		if(isset($_POST['dc']) && $_POST['dc'] != '') :
			$company 	= $_POST['dc'];
		endif;

		if(isset($_POST['dp']) && $_POST['dp'] != '') :
			$phone 		= $_POST['dp'];
		endif;

		if(isset($_POST['dm']) && $_POST['dm'] != '') :
			$msg 		= $_POST['dm'];
		endif;
		# subject
		$subject = 'Application Contact Form';

		# message
		$message = '<html><head><title>Application Contact Form</title></head><body><p>Application Contact Form</p><table>';

		if($name) :		$message .= '<tr><td>Name: '.$name.'</td></tr>'; 		endif;
		if($company) :	$message .= '<tr><td>Company: '.$company.'</td></tr>';  endif;
		if($email) :	$message .= '<tr><td>Email: '.$email.'</td></tr>';   	endif;
		if($phone) :	$message .= '<tr><td>Phone: '.$phone.'</td></tr>'; 		endif;
		if($msg) : 		$message .= '<tr><td>Message: </td></tr>';				endif;
		if($msg) : 		$message .= '<tr><td>'.$msg.'</td></tr>';				endif;

		$message .= '</tr></table></body></html>';

		# Content-type header
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'From: Clusterpoint Cloud Support <noreply@clusterpoint.com>' . "\r\n";
		//$headers .= 'Return-Path: noreply@clusterpoint.com' . "\r\n";
		//$headers .= 'X-Mailer: www.clusterpoint.com' . "\r\n" .
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

		# Mail it
		$retval = mail($email_to, $subject, $message, $headers);
		if( $retval == true ) :
			echo 'ok';
		else:
			echo 'Message could not be sent...';
		endif;

		break;
	case ($end_point == 'white_papers'):

		if(isset($_POST['dn']) && $_POST['dn'] != '') :
			$name  		= $_POST['dn'];
		endif;

		if(isset($_POST['de']) && $_POST['de'] != '') :
			$email 		= $_POST['de'];
		endif;

		if(isset($_POST['dc']) && $_POST['dc'] != '') :
			$company 	= $_POST['dc'];
		endif;

		if(isset($_POST['dp']) && $_POST['dp'] != '') :
			$phone 		= $_POST['dp'];
		endif;

		if(isset($_POST['dm']) && $_POST['dm'] != '') :
			$msg 		= $_POST['dm'];
		endif;

		if(isset($_POST['wt']) && $_POST['wt'] != '') :
			$wt 		= $_POST['wt'];
		endif;

		# subject
		$subject = 'Request White paper';

		# message
		$message = '<html><head><title>Request White Paper</title></head><body><p>Request White paper</p><table>';

		if($wt) :		$message .= '<tr><td>White paper: '.$wt.'</td></tr>';   endif;
		if($name) :		$message .= '<tr><td>Name: '.$name.'</td></tr>'; 		endif;
		if($company) :	$message .= '<tr><td>Company: '.$company.'</td></tr>';  endif;
		if($email) :	$message .= '<tr><td>Email: '.$email.'</td></tr>';   	endif;
		if($phone) :	$message .= '<tr><td>Phone: '.$phone.'</td></tr>'; 		endif;
		if($msg) : 		$message .= '<tr><td>Message: </td></tr>';				endif;
		if($msg) : 		$message .= '<tr><td>'.$msg.'</td></tr>';				endif;

		$message .= '</tr></table></body></html>';

		# Content-type header
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'From: Clusterpoint Cloud Support <noreply@clusterpoint.com>' . "\r\n";
		//$headers .= 'Return-Path: noreply@clusterpoint.com' . "\r\n";
		//$headers .= 'X-Mailer: www.clusterpoint.com' . "\r\n" .
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

		# Mail it
		$retval = mail($email_to, $subject, $message, $headers);
		if( $retval == true ) :
			echo 'ok';
		else:
			echo 'Message could not be sent...';
		endif;

		break;
	case ($end_point == 'newsletter'):

		require_once 'php-client-api/cps_simple.php';
		// Connection hubs
		$connectionStrings = array(
			'tcp://cloud-eu-0.clusterpoint.com:9007',
			'tcp://cloud-eu-1.clusterpoint.com:9007',
			'tcp://cloud-eu-2.clusterpoint.com:9007',
			'tcp://cloud-eu-3.clusterpoint.com:9007'
		);

		// Creating a CPS_Connection instance
		$cpsConn = new CPS_Connection(
			new CPS_LoadBalancer($connectionStrings),
			'newsletter-emails',
			'newsletter',
			'h5A-"bY)cq597*B',
			'document',
			'//document/id',
			array('account' => 9)
		);

		// Debug
		//$cpsConn->setDebug(true);
		// Creating a CPS_Simple instance
		$cpsSimple = new CPS_Simple($cpsConn);

		// Insert
		if (isset($_POST['de']) && $_POST['de']) {
			$cpsSimple->updateSingle($_POST['de'], array('email' => $_POST['de']));
			echo 'ok';
		}
		break;
	case ($end_point == 'contact_us') :
		if(isset($_POST['dn']) && $_POST['dn'] != '') :
			$name  		= $_POST['dn'];
		endif;

		if(isset($_POST['de']) && $_POST['de'] != '') :
			$email 		= $_POST['de'];
		endif;

		if(isset($_POST['dc']) && $_POST['dc'] != '') :
			$company 	= $_POST['dc'];
		endif;

		if(isset($_POST['dp']) && $_POST['dp'] != '') :
			$phone 		= $_POST['dp'];
		endif;

		if(isset($_POST['dm']) && $_POST['dm'] != '') :
			$msg 		= $_POST['dm'];
		endif;

		if(isset($_POST['wt']) && $_POST['wt'] != '') :
			$wt 		= $_POST['wt'];
		endif;

		# subject
		$subject = 'Contact Us';

		# message
		$message = '<html><head><title>Contact Us</title></head><body><p>Contact Us - '.$wt.'</p><table>';

		if($name) :		$message .= '<tr><td>Name: '.$name.'</td></tr>'; 		endif;
		if($company) :	$message .= '<tr><td>Company: '.$company.'</td></tr>';  endif;
		if($email) :	$message .= '<tr><td>Email: '.$email.'</td></tr>';   	endif;
		if($phone) :	$message .= '<tr><td>Phone: '.$phone.'</td></tr>'; 		endif;
		if($msg) : 		$message .= '<tr><td>Message: </td></tr>';				endif;
		if($msg) : 		$message .= '<tr><td>'.$msg.'</td></tr>';				endif;

		$message .= '</tr></table></body></html>';

		# Content-type header
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'From: Clusterpoint Cloud Support <noreply@clusterpoint.com>' . "\r\n";
		//$headers .= 'Return-Path: noreply@clusterpoint.com' . "\r\n";
		//$headers .= 'X-Mailer: www.clusterpoint.com' . "\r\n" .
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

		# Mail it
		$retval = mail($email_to, $subject, $message, $headers);
		if( $retval == true ) :
			echo 'ok';
		else:
			echo 'Message could not be sent...';
		endif;
		break;
	case ($end_point == 'download_on_prem') :
		if(isset($_POST['dn']) && $_POST['dn'] != '') :
			$name  		= $_POST['dn'];
		endif;

		if(isset($_POST['de']) && $_POST['de'] != '') :
			$email 		= $_POST['de'];
		endif;

		if(isset($_POST['dc']) && $_POST['dc'] != '') :
			$company 	= $_POST['dc'];
		endif;

		if(isset($_POST['dp']) && $_POST['dp'] != '') :
			$phone 		= $_POST['dp'];
		endif;

		if(isset($_POST['dr']) && $_POST['dr'] != '') :
			$role 		= $_POST['dr'];
		endif;

		# subject
		$subject = 'Download';
		# different e-mail address
		$email_to  = 'sales@clusterpoint.com, hd@clusterpoint.com';

		# message
		$message = '<html><head><title>Download</title></head><body><p>Download</p><table>';

		if($name) :		$message .= '<tr><td>Name: '.$name.'</td></tr>'; 		endif;
		if($company) :	$message .= '<tr><td>Company: '.$company.'</td></tr>';  endif;
		if($email) :	$message .= '<tr><td>Email: '.$email.'</td></tr>';   	endif;
		if($phone) :	$message .= '<tr><td>Phone: '.$phone.'</td></tr>'; 		endif;
		if($role) :		$message .= '<tr><td>Role: '.$role.'</td></tr>'; 		endif;

		$message .= '</tr></table></body></html>';

		# Content-type header
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'From: Clusterpoint Cloud Support <noreply@clusterpoint.com>' . "\r\n";
		//$headers .= 'Return-Path: noreply@clusterpoint.com' . "\r\n";
		//$headers .= 'X-Mailer: www.clusterpoint.com' . "\r\n" .
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

		# Mail it
		$retval = mail($email_to, $subject, $message, $headers);
		if( $retval == true ) :
			echo 'ok';
		else:
			echo 'Message could not be sent...';
		endif;
		break;
endswitch;

exit;


/*		$api = new MGAPI($apikey);
		$email_address = $_POST['de'];
		$merge_vars = array('EMAIL'=>$email_address);
		$email_type = 'html';
		$double_optin = true;
		$update_existing = false;
		$send_welcome = false;

		$retval = $api->listSubscribe( $listId, $email_address, $merge_vars, $email_type, $double_optin, $update_existing, $send_welcome);

		if($api->errorCode) :
			echo "Unable to load listSubscribe()!\n";
			echo "\tCode=".$api->errorCode."\n";
			echo "\tMsg=".$api->errorMessage."\n";
		else :
			//echo "Returned: ".$retval."\n";
			echo 'ok';
		endif;*/
?>