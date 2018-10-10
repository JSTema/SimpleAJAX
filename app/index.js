$(document).ready(function() {

		function funSendBefore() {
			$("#information").html("Ожидание..");
		}

		function funSuccess(data) {
			$("#information").html(data);
		}
		

		$("#send").bind("click", function() {
			$.ajax({
				url: 'login.php',
				type: 'POST',
				dataType: 'html',
				data: ({name: $("#name").val()}),
				beforeSend: funSendBefore,
				success: function (data) {
					if (data == "Fail") {
						$("#out").text('Имя занято');
					}else {
						$("#out").html(data);
					}
				}		
			});
		});

		$("#load").bind("click", function() {
			$.ajax({
				url: 'content.php',
				type: 'POST',
				dataType: 'html',
				data: ({param1: 'value1',
					   param2: 'value2',
					   param3: 'value3'
						}),
				beforeSend: funSendBefore,
				success: funSuccess		
			});
		});
 		


});

