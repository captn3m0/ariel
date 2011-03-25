<?php
/**
 * Socket Web Server
 * Runs on websocket class
 */
 
//Version 1 runs without any database

include "websocket.class.php";
// Extended basic WebSocket as ChatBot
class ArielServer extends WebSocket{
  function process($client,$patch){
	//Treat alive messages as special
	if($patch=='ALIVE')
	{
		$this->sendAlive();
		return;
	}
    //Send this patch to all the users :
    foreach($this->users as $user){
		
		if($client!=$user)
		{
			$this->say("Sending Patch To : ".$user->id);
			$this->send($user->socket,$patch);
		}
    }
  }
  function sendAlive(){
	  foreach($this->users as $user)
		$this->send($user->socket,'ALIVE');
  }
}
$master = new ArielServer("localhost",8080);

