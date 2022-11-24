<?php
include './functions.php';
$conn = getDb();

if (isset($_POST['submitted'])){
  require_once('secrets.php');

  
  $email=isset($_POST['email'])?$_POST['email']:false;
  $password=isset($_POST['password'])?password_hash($_POST['password'],PASSWORD_DEFAULT):false;

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $username = $_POST['Uname'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  
 try{
	$stat=$conn->prepare("INSERT INTO users(fname, lname, username, email, password)
   VALUES(:fname, :lname, :Uname, :email, :password)");
	$stat->bindParam(':fname', $fname, PDO::PARAM_STR, 20);
  $stat->bindParam(':lname', $lname, PDO::PARAM_STR, 20);
  $stat->bindParam(':Uname', $username, PDO::PARAM_STR, 20);
	$stat->bindParam(':email', $email, PDO::PARAM_STR, 64);
	$stat->bindParam(':password', $password, PDO::PARAM_STR, 64);
  $stat->execute();
 
  echo "Congratulations! You are now registered.";  	
} 
catch (PDOexception $ex){
 echo "Sorry, a database error occurred! <br>";
 echo "Error details: <em>". $ex->getMessage()."</em>";
}

}

?>

<!DOCTYPE html>
<html lang="en">
<?php loadHeader(); ?>
<body>
  <div class="register">
    <h2>Register Now!</h2> <br>
    <form method="post" action="register.php">
      <input type="text" name="fname" placeholder="First Name" required /><br><br>
      <input type="text" name="lname" placeholder="Last Name" required /><br><br>
      <input type="text" name="Uname" placeholder="Username" required /><br><br>
      <input type="text" name="email" placeholder="Email" required /> <br><br>
      <input type="password" name="password" placeholder="Password" required /> <br><br>

      <input type="submit" value="Register" />
      <input type="reset" value="Clear" />
      <input type="hidden" name="submitted" value="true" />
    </form>
    <br>
    <p> Already a user? <a href="login.php" class="btn btn-outline-dark">Log in</a> </p>
  </div>
</body>
<?php loadFooter(); ?>

</html>