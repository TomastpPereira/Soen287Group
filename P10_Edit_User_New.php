<?php
session_start(); //Starting the session
$xml = simplexml_load_file("users/test.xml");
if($_COOKIE['ID']==0 && isset($_GET['ID'])){
  $ID = $_GET['ID'];
  $users = $xml->xpath("/main/userlist/user[ID=".$ID."]");
  $user = $users[0][0];

  $firstname = $user->firstname;
  $lastname = $user->lastname;
  $email = $user->email;
  $password = $user->password;
}
else{
  $ID = $_COOKIE['ID'];
  $firstname = $_COOKIE['firstname'];
  $lastname = $_COOKIE['lastname'];
  $email = $_COOKIE['email'];
  $password = $_COOKIE['password'];
}


if(isset($_POST['save'])){// user pressed save 
  $users = $xml->xpath("/main/userlist/user[ID=".$ID."]");
  $user = $users[0][0];

  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $user->firstname = $_POST['firstname'];
  $user->lastname = $_POST['lastname'];
  $user->email = $_POST['email'];
  $user->password = $_POST['password'];

  $xml->asXML("users/test.xml");//Saving to XML file

  if($_COOKIE['ID']!=0){
  setcookie("ID", $ID, time() + 86400, "/");
  setcookie("firstname", $firstname, time() + 86400, "/");
  setcookie("lastname", $lastname, time() + 86400, "/");
  setcookie("email", $email, time() + 86400, "/");
  setcookie("password", $password, time() + 86400, "/");
  header("Location: ../../index.php");
    }
    else{
  header("Location: P9_Edit_User_List.php");
  }
}

$error= false;

if(isset($_POST['change'])){ // user pressed change password
	$users = $xml->xpath("/main/userlist/user[ID=".$ID."]");
	$user = $users[0][0];
  
	$password = $user->password;
	
    $old = md5($_POST['oldpassword']);
    $new = md5($_POST['newpassword']);
    $c_new = md5($_POST['c_password']);

    if($old == $password){
        if($new == $c_new){
            $user->password = $new;
            $xml->asXML("users/test.xml");
			if($_COOKIE['ID'] == 0){
				header('Location: P9_Edit_User_List.php');
			} else {
            header('Location: logout.php');
			}
        }
		$error = true;
    }
    $error = true;
}
?>

<?php
$errors = array();
if(isset($_POST['add'])){
    $firstname = $_POST['create_firstname'];
    $lastname = $_POST['create_lastname'];
    $email = $_POST['create_email'];
    $password = $_POST['create_password'];

    if ($firstname == ''){
      $errors[] = 'First Name is blank';
    }
    if ($lastname == ''){
      $errors[] = 'Last name is blank';
    }
    if ($email == ''){
      $errors[] = 'Emails are blank';
    }
    if ($password == ''){
        $errors[] = 'Passwords are blank';
    }

    if (count($errors) == 0){
      $xml = simplexml_load_file("users/test.xml");
      $currentAmount = $xml->amount;
      $previousID = $xml->userlist->user[(intval($currentAmount)-1)]->ID;

      $newUser = $xml->userlist->addChild("user");
      $newUser->addChild('email', $email);
      $newUser->addChild('password', md5($password));
      $newUser->addChild('firstname', $firstname);
      $newUser->addChild('lastname', $lastname);
      $newUser->addChild('ID', (intval($previousID)+1));
      $newUser->addChild('isadmin', 'false');
      $xml->amount = (intval($currentAmount)+1);
      $xml->asXML("users/test.xml"); // Save newUser to the userlist
	  header('Location: P9_Edit_User_List.php');
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit User Profile</title>
	<link rel = "stylesheet type" type = "text/css" href= "Edit_User_Profile_Test.css" >
</head>
<body>
	<!-- nav bar -->
    <?php include('admin_Navbar.php'); ?>
<!-- main item -->
	<?php 
	if(isset($_GET['ID'])){
	echo '<h1><strong>Edit Profile</strong></h1>';} else if(!isset($_GET['ID'])){ echo '<h1><strong>Add New User</strong></h1>';} 
	?>
	<div class="edit-profile-box">

	<?php 
	if(isset($_GET['ID'])){
		echo '
		<form action="" method="POST"> <!-- edit info -->	
			<br>
			<h2>Account Information</h2>
			<div class="flexbox-container-main">
				<div class="flexbox-container-name">
					<div class="flexbox fname">
						<label>First name</label>
						<input type="name" value= "'; ?> <?php echo $firstname ?? ""; ?>" <?php echo' placeholder= "John" name="firstname" required>
					</div>
					<div class="flexbox lname">
						<label>Last name</label>
						<input type="name" value= "'; ?> <?php echo $lastname ?? ""; ?>" <?php echo'placeholder= "Doe" name="lastname" required>
					</div>	
					<div class="flexbox email">
						<label>Email</label>
						<input type="email" value= "'; ?> <?php echo $email ?? ""; ?>" <?php echo'placeholder="email" name="email" required>
					</div>
				</div>
				<button type="Save" name="save" class="save-button" value="Save">Save</button>
			</div>	
		</form>'; // password change box
	 
	?>
		<?php 
		echo '
		<h2>Change Password</h2>
		<form action="" method="POST">
			<div class="flexbox-container-name">
				<div class="flexbox fname">
					<label for="password">Old password</label>
					<input type="password" placeholder= "*******" name="oldpassword" required>
				</div>
				<div class="flexbox fname">
					<label for="password">New password</label>
					<input type="password" placeholder= "*******" name="newpassword" required>
				</div>	
				<br>
				<div class="flexbox fname">
					<label for="password">Confirm password</label>
					<input type="password" placeholder= "*******" name="c_password" required>
				</div>	
				<br>'; ?>
				<?php
				if($error){
					echo '<p>Passwords do not match </p>';
				}
				?>
			<?php	
			echo '</div>
			<br>
				<button type="Submit" name="change" class="change-button" value="Change Password">Change Password</button>
		</form>
		</form>';
			}
			?>


		<?php if(!isset($_GET['ID'])){
			echo '
			<h2>New User Information</h2>
			<form action="" method="POST">
				<div class="flexbox-container-name">
					<div class="flexbox fname">
						<label>First name</label>
						<input type="text" placeholder= John name="create_firstname" required>
						<labe>Last name</label>
						<input type="text" placeholder= Doe name="create_lastname" required>
					</div>	
					<br>
					<div class="flexbox fname">
						<label>email</label>
						<input type="email" placeholder= "john@example.com" name="create_email" required>
						<label>Confirm password</label>
						<input type="password" placeholder= "*******" name="create_password" required>
					</div>	
					<br>
				</div>	
					<button type="Submit" name="add" class="change-button" value="Add user">Add user</button>
			</form>';
		}	
		?>
		
	</div>

	<!-- footer -->
	<div class="footer">
		<p style="text-align: center;"> Our Info </p>
		<p style="padding-left: 20px;"> We are dedicated to providing only the best service to our valued customers. </p>
		<p style="padding-left: 20px;"> Address: 123 Filler Street, H2K 4W9 </p>
	</div>
</body>
</html>