<?php
    require_once('../model/event.php');
    require_once('../services/functions.php');

    if(urldecode($_GET['id'])){
    	$event_id = urldecode($_GET['id']);
        if($community_event = $event->get_event($event_id)){
        	redirect('../../public/community-event.php?'.urlencode($community_event));
        }
    }
?>