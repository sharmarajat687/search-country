<?php
$conn = mysqli_connect('localhost','root','','test');
if(!$conn){
	die("database not stablish ".mysqli_connect_error);
}

$s = $_GET['usearch'];
$query = mysqli_query($conn,"select * from country_name where name like '%$s%'  ");

if($row = mysqli_num_rows($query)<=0){
?>
	<ul class="list-group">
	<li class="list-group-item"><?php echo"No Country Found"; ?> </li>
	</ul>
<?php
}
else{
while($row = mysqli_fetch_array($query)){
?>
	<ul class="list-group">
		<li class="list-group-item"><?php echo $row['name']; ?></li>
	</ul>
<?php	
}
}

?>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<head>
<body>
</body>
</html>