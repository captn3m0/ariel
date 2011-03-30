<!DOCTYPE html>
<html>
	<head>
		<title>Ariel</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta http-equiv="imagetoolbar" content="no" />
		<meta name="distribution" content="all" />
		<meta name="robots" content="all" />	
		<meta name="resource-type" content="document" />
		<meta name="MSSmartTagsPreventParsing" content="true" />

    <script type="text/javascript" src="./public/javascripts/jquery.js"></script>
    <script type="text/javascript" src="./public/javascripts/prettify.js"></script>
    <script type="text/javascript" src="./public/javascripts/jquery.timers.js"></script>
    <script type="text/javascript" src="./public/javascripts/jquery.color.js"></script>
    <script type="text/javascript" src="./public/javascripts/application.js"></script>

    <link rel="stylesheet" href="./public/stylesheets/initial.css" type="text/css" />
    <link rel="stylesheet" href="./public/stylesheets/application.css" type="text/css" />
    <link type="text/css" rel="stylesheet" href="./public/stylesheets/prettify.css"></link>
		
	</head>
  <body>
    <div id="container">
      <div id="header">
        <div id="logo"><a href="./index.html" title="Ariel">Ariel</a></div>
        <ul id="status">
<li>What is my <a href="#">Status</a></li>
<li>What is my <a href="#">HELP</a></li>
        </ul>
      </div>
      <!-- /header -->
      
      <div id="wrapper">
	
		<div id="content">
      <div id="codearea">
        <textarea id="editable_content" contenteditable="true" spellcheck="false">
       </textarea>
      </div>
		</div><!-- /content -->

	</div><!-- /wrapper -->

	<div id="sidebar">
		<ul class="menu"> 
      <li><h4 class="section_title">Users <a id="add_contact" href="#"><img src="./public/images/add_contact_icon.png" alt="Add Contact"/></a></h4>
        <ul id="users_list"> 
			<li id="user-abhay">
				<span class="user_color" style="background-color:#8088FF; color: #8088FF">&nbsp;</span>
				<span class="user_name">User-abhay</span>
			</li>
        </ul>
      </li>

      <li id="chat_section">
      <h4 class="section_title">Chat</h4>
        <ul id="chat_messages"> 
          <li class="datestamp">26 May 2010</li>
          <li class='chat_message unread'>
          <span class='user' style='color:green'>Abhay</span>
          <span class='message'>is happy</span>
          <span class='timestamp'>6.53am</span>
          </li>
        </ul>
        <form>
          <textarea rows="1" id="input_chat_message"></textarea>
        </form>
      </li>
		</ul>
	</div>
<!--
	<div id="extra">
	What is this
	</div><div id="footer">
        MIT Licensed. 2010
      </div>-->
    </div>
  </body>
</html>
