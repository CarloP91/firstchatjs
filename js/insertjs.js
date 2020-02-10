function invia()
 {
    var testoMessaggio = document.getElementById('texto').value;
    var nomeMittente = document.getElementById('mittente').value;
    
    if (testoMessaggio != "") {
      $.ajax({
          type: 'POST',
          url: "db/insert_db_chat_mitt.php",
          data: {"mittente": nomeMittente, "texto":(testoMessaggio)},
          success: function(data){
            console.log("Dati inviati");
          },

          error: function(data) {
            console.log("Dati non inviati");
          }
      });
    }
  };
