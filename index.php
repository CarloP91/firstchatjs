<!DOCTYPE html>
<html lang="it">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<h2>Popup Chat Window</h2>

<div class="container" >
  <div class="row">
    <div id="divD"></div>
  </div>
  
</div>

<button class="open-button" onclick="openForm()">Chat</button>

<div class="chat-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Chat</h1>

    <label for="msg"><b>Message</b></label>
    <textarea  placeholder="Type message.." name="msg" id="send" required></textarea>

    <button type="button"  class="btn" onclick="getInputValue();">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>




</body>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

function getInputValue(){
            // Selecting the input element and get its value 
          //  var inputVal = document.getElementById("send").value;
         //   var divdin =  document.getElementById("divD");
            // Displaying the value
            // alert(inputVal); -- IN CASO VOLESSI FARE USCIRE UN POPUP -- 
            // divdin.innerHTML = divdin.innerHTML + inputVal;
           // document.getElementById("divD").innerHTML = inputVal; -- QUESTO IN CASO VOLESSI FARE USCIRE SOLO UNA COSA SCRITTA ALLA VOLTA --

        }

function getInputValue(){
            // Selecting the input element and get its value 
            var inputVal = document.getElementById("send").value;
            var divdin =  document.getElementById("divD");
            
            // Displaying the value
            divdin.innerHTML = divdin.innerHTML + "<br>" + '<div class="col" style="border:solid"> <img src="img/avatar.jpg" alt="Avatar";">' + inputVal + '<br>' + '<br>' + Date() + '</div>';
            //tradotto = div.din è uguale a div.din + uno spazio + il valore
        }
</script>
</html>
