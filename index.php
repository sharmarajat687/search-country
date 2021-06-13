<?php

?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
	<form action="" method="POST">
		<div class="form-group">
			<div class="card">
				<div class="card-header text-center text-success" style="font-size: 140%;">
					Search Country By Name
				</div>
			</div>
			<input class="form-control" type="text" name="search" id="search" placeholder="Country Name">
		</div>
		<div id="displays"></div>
	</form>
</div>
<div class="col-md-4"></div>
</div>
</div>
</body>
</html>
<script>
$(document).ready(function(){
	$('#search').keyup(function(){
		var s = $('#search').val();
		$.ajax({
			url:'db.php',
			data:'usearch='+s,
			success:function(data){
				$('#displays').html(data);
			}
		});
	});
});
</script>