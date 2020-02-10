	 function select_message() {

	 	var nomeMittente = document.getElementById('mittente').value;

			$.ajax({
				url: "db/select_db_chat_mitt.php",
				crossDomain: true,
				dataType: 'JSON',
				success: function(data, stato) {
					console.log("JSON PASSATO: " + data);
					var str = 'ON CHAT';

					for (var i = 0; i < data.length; i++) {
						console.log(data[i]);

						if (data[i].mittente  === nomeMittente) {
 								str = str
 						+ '<div class="row">'
 						+ '<div class="col"></div>'
 						+ '<div class="col"></div>'
 						+ '<div class="col" id="personal">'
 						+ '<div class="row">'
						+ '<br><br>' 
						+ '<img id="avatar" src="img/avatar.jpg" alt="Avatar">' 
						+ '<p class=" text-center ml-1 mt-auto">'
						+ '<strong>' 
						+ data[i].mittente 
						+ '</strong>' 
						+ '</p>'
						+ '</div>'
						+ '<br>'
						+ '<div class="border border-dark p-1"><span class="p-1">' 
						+ data[i].testo 
						+ '</span></div><br>' 
						+ " "
						+ data[i].data 
						+ " "
						+ "<br>"
						+ '<button id="cancella" onclick="delete_m()">DELETE</button>'
						+ " " 
						+ '</div>'
						+ "</div>" 
								} else {
												str = str
						+ '<br><br>' 
						+ '<div id="message">'
						+ '<div class="message">'
						+ '<div class="col border-dark"><img id="avatar" src="img/avatar.jpg" alt="Avatar"></div>'  
						+ '<strong>' 
						+ data[i].mittente 
						+ '</strong>' 
						+ '<br>'
						+ '<span class="border border-dark p-1">' 
						+ data[i].testo 
						+ '</span><br>' 
						+ " "
						+ data[i].data 
						+ " "
						+ "<br>"
						+ '<button id="cancella" onclick="delete_m()">DELETE</button>'
						+ "</div>" 
						+ "</div>" 
								}

						
					}


					$("#divD").html(str);
				},
				error: function(data, stato) {
					console.log(stato);
					console.log("SONO DENTRO FUNZIONE ERROR");
				}
			});
}

        $(document).ready(function() {
        select_message();
        setInterval(select_message,1000);
});
