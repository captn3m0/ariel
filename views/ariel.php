<?php
$userid=uniqid();
echo nl2br(shell_exec('git status -s -z'));
?>
<html>
<head>
	<title>Ariel</title>
	<script language="javascript" type="text/javascript" src="dmp.js"></script>
	<style>
	#chat{border:#ddeeff 2px solid;}
	
	</style>
</head>
<br>
<textarea id="i1" rows="10" cols="100" >
</textarea><br>
<div id="chat">
<h2>Chat!</h2>
<div id="chatbox"></div>
<input type="text" size="100" id="chatinput">
</div>
<script>
content=document.getElementById('i1');
old_content=content.value;//Set the old content to something
dmp=new diff_match_patch();
//Replace this asap to ajax...
check=function(){
	//Each time you press enter, we send this to the server
	//Prepare the patch:
	diff=dmp.diff_main(old_content,content.value);
	if(diff.length>2)
	{
		console.log("changed");
		dmp.diff_cleanupSemantic(diff);
		patch=dmp.patch_make(old_content, content.value, diff);
		old_content=content.value;
		console.log("Patch Prepared, sending");
		patch_json=JSON.stringify(patch);
		socket.send(patch_json);
	}
	setTimeout(check,1000);
}
var socket;
function sendAlive(){
	socket.send("ALIVE");
	socket.send("ALIVE");
}
function init(){
  var host = "ws://localhost:8080";
  try{
    socket = new WebSocket(host);
    console.log('WebSocket - status '+socket.readyState);
    socket.onopen    = function(msg){ console.log("Welcome - status "+this.readyState);sendAlive();};
    socket.onmessage = function(msg){ 
		console.log("Recieved a patch");
		//Update the text :
		if(msg.data=='ALIVE')
			return;
		patch_recieved=JSON.parse(msg.data);
		content.value=old_content=dmp.patch_apply(JSON.parse(msg.data),content.value)[0];
		};
    socket.onclose   = function(msg){ console.log("Disconnected - status "+this.readyState); };
  }
  catch(ex){ console.log(ex); }
}
init();
setTimeout(check,1000);
</script>
</html>
