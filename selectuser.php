<!DOCTYPE html>
<html lang="en">
<head>
  <title>BIB ตุ๊ดตู่</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>


<body>
	<table class="table table-hover">
	<thead>
	   <tr>
	     <th>firstname</th>
		  <th>lastname</th>
		   <th>gender</th>
		    <th>age</th>
			 <th>disease</th>
			  <th>size</th>
			   <th>email</th>
		 
		 </tr>
		 </thead>
		 <tbody>
<?php
 include ("conn/mysqlconn.php");

$sql = "SELECT * FROM userforrun";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
	while($row = mysqli_fetch_assoc($result))
	{
?>
<tr>
	<td><?php echo $row["firstname"];?></td>
	<td><?php echo $row["lastname"];?></td>
	
	<td><?php echo $row["gender"];?></td>
	<td><?php echo $row["age"];?></td>
	<td><?php echo $row["disease"];?></td>
	<td><?php echo $row["size"];?></td>
	<td><?php echo $row["email"];?></td>
	</tr>
  <?php  
	}
} else {
	echo"0 result";

}
mysqli_close($conn);
?>
</body>
</html>