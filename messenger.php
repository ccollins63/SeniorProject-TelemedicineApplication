<?php
session_start();
$_SESSION['last_line'] = "";
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<script>
var source, chattext, lastData, chatBtn, connectBtn, disconnectBtn, text;
var hr = new XMLHttpRequest();
function connect(){
    if(window.EventSource){
        source = new EventSource("messengerServer.php");
        source.addEventListener("message", function(event){
            if(event.data != lastData && event.data != ""){
                chattext.innerHTML += event.data+"<hr>";
            }
            lastData = event.data;
        });
        chatBtn.disabled = false;
        connectBtn.disabled = true;
        disconnectBtn.disabled = false;
    } else {
        alert("event source does not work in this browser");
    }
}
function disconnect(){
    source.close();
    disconnectBtn.disabled = true;
    connectBtn.disabled = false;
    chatBtn.disabled = true;
}
function chatPost(){
    chatBtn.disabled = true;
    hr.open("POST", "messengerIntake.php", true);
    hr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            chatBtn.disabled = false;
            text.value = "";
        }
    }
    hr.send("text="+text.value);
}
var promptValue = prompt('Enter your name:', '');
if(promptValue != null){
	hr.open("POST", "messengerIntake.php", true);
	hr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    if(hr.responseText == "success"){
				chattext = document.getElementById("chattext");
				chatBtn = document.getElementById("chat_btn");
				connectBtn = document.getElementById("conx_btn");
				disconnectBtn = document.getElementById("disconx_btn");
				text = document.getElementById("text");
				connectBtn.disabled = false;
				alert("Welcome to the chat "+promptValue+", press connect when ready.");
			}
	    }
    }
	hr.send("uname="+promptValue);
}
</script>
<style>
div#chatbox{
    width: 300px;
    height: 330px;
    padding: 20px;
    background: #000000;
    border-radius: 5px;
}
div#chatbox > #chattext{
    height: 200px;
    padding: 10px;
    background: #FFF;
    margin: 10px 0px;
    overflow-y: auto;
}
div#chatbox > #text{
	width: 100%;
}
</style>
</head>
<body>
<div id="chatbox">
  <b>Chat Window</b>
  <div id="chattext"></div>
  <textarea id="text"></textarea>
  <input type="button" id="chat_btn" onclick="chatPost()" value="Submit Text" disabled> &nbsp; &nbsp;
  <input type="button" id="conx_btn" onclick="connect()" value="Connect" disabled>
  <input type="button" id="disconx_btn" onclick="disconnect()" value="Disconnect" disabled>
</div>
</body>
</html>