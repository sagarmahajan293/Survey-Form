<!DOCTYPE html>
<style>
table, th, td {
  border: 1px solid black;
}
</style>



<html>
<head>
	<title>Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Anton&display=swap" rel="stylesheet">


	<script defer src="https://use.fontawesome.com/releases/v5.0.7/js//all.js"></script>
	<link rel="stylesheet" type="text/css" href="hacker.css">
</head>
<body>

	<section id="section_2">
		<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #543864;">

			<a class="navbar-brand" href="#">Survey Form</a>
			<form action="logout.php" method="post">
				<input type="submit" name="uuname" value="Logout">
			</form>
			
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#har" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			
		</nav>
	</section>
	<br>



	<form action="admin.php" method="post">
		  

			  <div class="container">
			    <label for="uname"><b>Username</b></label>
			    <input type="text" placeholder="Enter Username" name="uname" required>

			    <label for="psw"><b>Password</b></label>
			    <input type="password" placeholder="Enter Password" name="psw" required>
			        
			    <button type="submit" name="cuser" value="Login">Create User</button>
			    
			  </div>
		       
    </form>
    <h1><a href="userdetails.php" style="text-align: center;">View Number of User</a></h1>
	<hr>

    <h1 style="text-align: center;">Survey Data<h2 style="text-align: center;"></h2>

<?php
$con=mysqli_connect('localhost','root','','survey_form');



if(isset($_POST['cuser']))
{
    $username=$_POST['uname'];
    $password=$_POST['psw'];

    $qry="INSERT INTO `login`(`username`, `password`) VALUES ('$username','$password')";
    $run=mysqli_query($con,$qry);

}
?>


<?php
		$con=mysqli_connect('localhost','root','','survey_form');
		$sql = "SELECT * FROM `survey_data` WHERE 1";
		$result = $con->query($sql);
				
		if ($result->num_rows > 0) {
		    while($row = $result->fetch_assoc()) {
?>






<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Profession</th>
      <th scope="col">Mobile No.</th>
      <th scope="col">Email Id</th>
      <th scope="col">Favourite cake and pastry</th>
      <th scope="col">Top three bakeries in Nagpur</th>
      <th scope="col">How loyal or particular you are to buy cake from them?</th>
      <th scope="col">Three attributes to buy a cake</th>
      <th scope="col">Which Bakery serves authentic Doughnuts in Nagpur?</th>
      <th scope="col">Any 2 wish list from a Bakery</th>
      <th scope="col">Would you like to gift cakes?</th>
      <th scope="col">Team</th>
      <th scope="col">Date</th>
      <th scope="col">Location</th>
      <th scope="col">Comments</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['profession'] ?></td>
      <td><?php echo $row['mobileno'] ?></td>
      <td><?php echo $row['emailid'] ?></td>
      <td><?php echo $row['favcake'] ?></td>
      <td><?php echo $row['topbakery'] ?></td>
      <td><?php echo $row['loyalcomment'] ?></td>
      <td><?php echo $row['ac'] ?></td>
      <td><?php echo $row['authenticatebakery'] ?></td>
      <td><?php echo $row['wishlist'] ?></td>
      <td><?php echo $row['giftcake'] ?></td>
      <td><?php echo $row['team'] ?></td>
      <td><?php echo $row['date'] ?></td>
      <td><?php echo $row['location'] ?></td>
      <td>@<?php echo $row['comment'] ?></td>
    </tr>
  </tbody>
</table>

<?php 

}
}
?>
</body>
</html>
