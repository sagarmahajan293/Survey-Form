<!DOCTYPE html>
<html>
<style>
body {
  font-family: Arial;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
body {margin:0;}

.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}

.navbar a {

  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: #ddd;
  color: black;
}

.main {
  padding: 16px;
  margin-top: 30px;
  height: 1500px; /* Used in this example to enable scrolling */
}
</style>
<body>

<div class="navbar">
  <a href="#home" style="text-align: center;">SURVEY FORM</a>
 
</div>

<div class="main">

<div class="container">
  <form action="bakery.php" method="POST">
    <label for="fname">Name</label>
    <input type="text" id="fname" name="name" placeholder="Your name..">

    <label for="lname">Profession</label>
    <input type="text" id="lname" name="profession" placeholder="Your profession">

 <label for="lname">Mobile Number</label>
    <input type="text" id="lname" name="mobileno" placeholder="Your Mobile no.">

 <label for="lname">Email Address</label>
    <input type="text" id="lname" name="emailid" placeholder="Your email id">

 <label for="lname">Q.1 Which is your favorite cake and pastry.</label>
    <input type="text" id="lname" name="favcake" placeholder="A.">

  <label for="lname">Q.2 Top three Bakery in Nagpur.</label>
    <input type="text" id="lname" name="topbakery1" placeholder="1">
    <input type="text" id="lname" name="topbakery2" placeholder="2">
    <input type="text" id="lname" name="topbakery3" placeholder="3">

     <label for="lname">Q.3 How loyal or particular you are to  buy cake from them?</label>
    <input type="text" id="lname" name="loyalcomment" placeholder="A.">

<label for="lname">Q.4 Three attributes to buy a cake (rate according to priority)(Taste ,Quality,Price,Appearance)</label>
    <input type="text" id="lname" name="ac1" placeholder="1">
    <input type="text" id="lname" name="ac2" placeholder="2">
    <input type="text" id="lname" name="ac3" placeholder="3">
    <input type="text" id="lname" name="ac4" placeholder="4">

    <label for="lname">Q.5 Which Bakery serves authentic Doughnuts in Nagpur?</label>
    <input type="text" id="lname" name="authenticatebakery" placeholder="A.">

<label for="lname">Q.6 Any 2 wish list from a Bakery</label>
    <input type="text" id="lname" name="wishlist1" placeholder="1">
    <input type="text" id="lname" name="wishlist2" placeholder="2">
   

    <label for="country">Q.7 Would you like to gift cakes to your loved ones in the midnight.</label>
    <select id="country" name="giftcake">
      <option value="yes">Yes</option>
      <option value="No">No</option>
    </select>


<label for="fname">Team</label>
    <input type="text" id="fname" name="team" placeholder="Your Team.">
<br>
    <label for="lname">Date</label>
    <input type="date" id="lname" name="date" placeholder="Enter Date"><br>
<br>
 <label for="lname">Location</label>
    <input type="text" id="lname" name="location" placeholder="Your location">

 <label for="lname">Comments</label>
    <input type="text" id="lname" name="comment" placeholder="Comments">


  
    <input type="submit" value="Submit" name="submit">
  </form>
</div>
</div>
</body>
</html>


<?php
$con=mysqli_connect('localhost','root','','survey_form');

if(isset($_POST['submit'])){



$name = $_POST['name'];
$profession =$_POST['profession'];
$mobileno =$_POST['mobileno'];
$emailid =$_POST['emailid'];
$favcake =$_POST['favcake'];
$topbakery ="A. ".$_POST['topbakery1']." B. ". $_POST['topbakery2'] ." C. ".$_POST['topbakery3'];
$loyalcomment =$_POST['loyalcomment'];
$ac ="A. ".$_POST['ac1']." B ". $_POST['ac2']." C. ".$_POST['ac3']." D. ".$_POST['ac4'];
$authenticatebakery = $_POST['authenticatebakery'];
$wishlist =" A. ".$_POST['wishlist1'] ." B ". $_POST['wishlist2'];
$giftcake =$_POST['giftcake'];
$team =$_POST['team'];
$date1 =$_POST['date'];
$location =$_POST['location'];
$comment =$_POST['comment'];

//$query=;
$sql = "INSERT INTO `survey_data`(`name`, `profession`, `mobileno`, `emailid`, `favcake`, `topbakery`, `loyalcomment`, `ac`, `authenticatebakery`, `wishlist`, `giftcake`, `team`, `date`, `location`, `comment`) VALUES ('$name','$profession','$mobileno','$emailid','$favcake','$topbakery','$loyalcomment','$ac','$authenticatebakery','$wishlist','$giftcake','$team','$date1','$location','$comment')";

//$result = $conn->query($query, $conn);
  $run=mysqli_query($con,$sql);
  include('logout.php');
}
?>
