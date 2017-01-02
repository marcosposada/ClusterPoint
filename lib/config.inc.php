<?php
    //API Key - see http://admin.mailigen.com/settings/api
    $apikey = '0f123ee6c30e68dec06f899833cf95d8';
    
    // A List Id to run examples against. use lists() to view all
    $listId = '3d270251';
    
    // A Campaign Id to run examples against. use campaigns() to view all
    $campaignId = 'YOUR MAILIGEN CAMPAIGN ID - see campaigns() method';
    
    // A Campaign Id to run examples against. use campaigns() to view all
    $smsCampaignId = 'YOUR MAILIGEN SMS CAMPAIGN ID - see smsCampaigns() method';
	
    //some email addresses used in the examples:
    $my_email = 'INVALID@example.org';
    $boss_man_email = 'INVALID2@example.com';
	
	$my_phone = '00000000';
	$smsSenderID = 'Test';
	$smsMergeField = 'SMS';
	
    //just used in xml-rpc examples
    $apiUrl = 'http://api.mailigen.com/1.5/';
?>