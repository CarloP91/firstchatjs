<!DOCTYPE html>
<html lang="it">
<head>

	<title>CHAT JS</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> <!-- LINK AJAX -->   
<script type="text/javascript" src="js/selectjs.js"></script> <!-- SELECT JS -->
<script type="text/javascript" src="js/insertjs.js"></script> <!-- INSERT JS -->
<script type="text/javascript" src="js/deletejs.js"></script> <!-- DELETE JS -->

</head>

<body>

<h2 class=" text-center">JS CHAT - POWERED BY "Carlo Pennetta"</h2>

<button onclick="bgd()">SCURO</button>

  <div id="divD" class="container" >
 
</div> 


<button class="open-button" onclick="openForm()">Chat</button>
 <!-- <form action="db/insert_db_chat_mitt.php" method="post" class="form-container">
    <h1>Chat</h1>
    <label>USERNAME</label><br>
    <input type="text" name="mittente" ><br><br>
    <label for="texto"><b>Message</b></label>
   <textarea  placeholder="Type message.." name="texto" required></textarea> -->
    <!--<button type="button"  class="btn" onclick="getInputValue();">Send</button>-->
    <!-- <button type="button" id="send" onclick="manda()" class="btn">Send</button> -->
<div class="chat-popup" id="myForm">

    <div class="form-container">

    <h5>Chat</h5>

    <label>USERNAME</label><br>

    <input type="text" id="mittente" class="username_form"><br><br>

    <label for="texto"><b>Message</b></label>
    <textarea  placeholder="Type message.."  id="texto" required></textarea>

   <!-- <input type="submit" name="submit" value="invia" class="btn"> -->
   <button id="invia" onclick="invia()" class="btn">INVIA</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </div>
</div>




</body>


<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

//function getInputValue(){
            // Selecting the input element and get its value 
          //  var inputVal = document.getElementById("send").value;
         //   var divdin =  document.getElementById("divD");
            // Displaying the value
            // alert(inputVal); -- IN CASO VOLESSI FARE USCIRE UN POPUP -- 
            // divdin.innerHTML = divdin.innerHTML + inputVal;
           // document.getElementById("divD").innerHTML = inputVal; -- QUESTO IN CASO VOLESSI FARE USCIRE SOLO UNA COSA SCRITTA ALLA VOLTA --

    //    }

/*function getInputValue(){
            // Selecting the input element and get its value 
            var inputVal = document.getElementById("send").value;
            var divdin =  document.getElementById("divD");
            
            // Displaying the value
            divdin.innerHTML = divdin.innerHTML + "<br>" + '<div class="col" style="border:solid"> <img src="img/avatar.jpg" alt="Avatar";">' + inputVal + '<br>' + '<br>' + Date() + '</div>';
            //tradotto = div.din è uguale a div.din + uno spazio + il valore 
        } */


const messages = document.getElementById('messages');

function appendMessage() {
  const message = document.getElementsByClassName('message')[0];
  const newMessage = message.cloneNode(true);
  messages.appendChild(newMessage);
}

function getMessages() {
  // Prior to getting your messages.
  shouldScroll = messages.scrollTop + messages.clientHeight === messages.scrollHeight;
  /*
   * Get your messages, we'll just simulate it by appending a new one syncronously.
   */
  appendMessage();
  // After getting your messages.
  if (!shouldScroll) {
    scrollToBottom();
  }
}

function scrollToBottom() {
  messages.scrollTop = messages.scrollHeight;
}

scrollToBottom();

setInterval(getMessages, 100);

</script>
</html>