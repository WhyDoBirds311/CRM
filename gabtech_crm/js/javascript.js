$(document).ready(function() {

	function fetch_data()
	{
		$.ajax({
			url:"users_content.php",
			method:"POST",
			success:function(data) {
				$('#admin-viewtab').html(data);
			}
		});
	}


	$("#user-btn").click(function() {
		$("#admin-viewtab").load("includes/users_content.php");
		$("#admin-viewtab").css( {
			'margin-top': '100px',
			'margin-left': '190px',
			'margin-bottom': '80px',
			'width': '80%',
			'overflow-x': 'auto'
		});

		$("table").css( {   // for the echoed html element in users_content.php
			'border': '1px solid #d0d0d0', 
		});
	});
});


