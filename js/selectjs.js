	 function select_message() {
		
			$.ajax({
				url: "db/select_db_chat_mitt.php",
				crossDomain: true,
				dataType: 'JSON',
				success: function(data, stato) {
					console.log("JSON PASSATO: " + data);
					var str = 'ON CHAT';

					for (var i = 0; i < data.length; i++) {
						console.log(data[i]);
						str = str
						+ '<br><br>' 
						+ '<div class="col"><img id="avatar" src="img/avatar.jpg" alt="Avatar"></div>'  
						+ '<strong>' 
						+ data[i].mittente 
						+ '</strong>' 
						+ '<br>'
						+ '<span class="border border-dark">' 
						+ data[i].testo 
						+ '</span><br><button id="cancella" onclick="delete_m()">DELETE</button>' 
						+ " "
						+ data[i].data 
						+ "-" 
						+ data[i].id  
						+ "" 
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
