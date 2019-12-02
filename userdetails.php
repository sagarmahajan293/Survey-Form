<!DOCTYPE html>
<html>

<style>
table, th, td {
  border: 1px solid black;
  text-align: center;

}
</style>

<head>
	<title>User Details</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Anton&display=swap" rel="stylesheet">




</head>
<body>
<section id="section_2">
		<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #543864;">

			<a class="navbar-brand" href="#">Login details</a>
			
			
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#har" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			
		</nav>
	</section>

<?php
		$con=mysqli_connect('localhost','root','','survey_form');
		$sql = "SELECT * FROM `login` WHERE 1";
		$result = $con->query($sql);
				
		if ($result->num_rows > 0) {
		    while($row = $result->fetch_assoc()) {
?>


<table class="table">
  <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">password</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td><?php echo $row['username'] ?></td>
      <td><?php echo $row['password'] ?></td>
      
    </tr>
  </tbody>
</table>

<?php 

}
}
?>


</body>
</html>