<?php
$errors = array();
if(isset($_POST['sign_up'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $c_email = $_POST['c_email'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];

    if ($firstname == ''){
      $errors[] = 'First Name is blank';
    }
    if ($lastname == ''){
      $errors[] = 'Last name is blank';
    }
    if ($email == '' || $c_email == ''){
      $errors[] = 'Emails are blank';
    }
    if ($email != $c_email){
      $errors[] = 'Emails do not match';
    }
    if ($password == '' || $c_password == ''){
        $errors[] = 'Passwords are blank';
    }
    if ($password != $c_password){
        $errors[] = 'Passwords do not match';
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
      header('Location: P5_Login.php');
      die;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title> Sign Up Page </title>
  <link rel = "stylesheet type" type = "text/css" href= "P6_SignUp_Flex.css" >
</head>

<body>
<?php include('navbar.php'); ?> <!-- navbar --> 

<?php
  if(count($errors) > 0){
      echo '<ul>';
      foreach($errors as $e){
          echo '<li>' . $e . '</li>';
      }
      echo '</ul>';
  }
?>

<div class="sign-up-box" >
  <div class="top-text-div">
    <h1 class="top-text"> Sign Up </h1>
  </div>
  <div class="top-text-div">
    <h4 class="top-text"> Fill the fields below to sign up. </h4>
  </div>
  <form action="" autocomplete="on" method="POST" onsubmit="empty()"> <!-- link to form page -->
    <h5> Personal Information: </h5>
    <div class="field">
      <div class="info">
        <label> First Name </label>
      </div>
      <div class="box">
        <input type="text" id="first-name" placeholder="First Name" name="firstname" required> <br><br>
      </div>
    </div>
    <div class="field">
      <div class="info">
        <label> Last Name</label>
      </div>
      <div class="box">
        <input type="text" id="last-name" placeholder="Last Name" name="lastname" required> <br><br>
      </div>
    </div>
    <div class="field">
      <div class="info">
        <label> Email Address</label>
      </div>
      <div class="box">
        <input type="email" id="email" placeholder="Email" onkeyup='checkEmail()' name="email" required> <br><br>
      </div>
    </div>
    <div class="field">
      <div class="info">
        <label> Confirm Email</label>
      </div>
      <div class="box">
       <input type="email" id="confirm-email" placeholder="Confirm Email" onkeyup='checkEmail()' name="c_email" required> <br><br>
     </div>
    </div>
    <div class="field">
      <div class="info">
        <label> Create Password </label>
      </div>
      <div class="box">
        <input type="password" id="password" placeholder="Password" onkeyup='checkPassword()' name="password" required> <br><br>
      </div>
    </div>
    <div class="field">
      <div class="info">
        <label> Confirm Password </label>
      </div>
      <div class="box">
        <input type="password" id="confirm-password" placeholder="Confirm Password" onkeyup='checkPassword()' name="c_password" required> <br><br>
      </div>
    </div>
    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><h5> Terms & Conditions</h5></a>
      <input type = checkbox id="checkbox" required> Agree to Terms & Conditions 
      <br>
      <br>
    <button type = "submit" class="sign-up-button" name="sign_up" value="sign_up" >Sign Up</button>
  </form>
</div>


<div class="footer">
  <p style="text-align: center;"> Our Info </p>
  <p style="padding-left: 20px;"> We are dedicated to providing only the best service to our valued customers. </p>
  <p style="padding-left: 20px;"> Address: 123 Filler Street, H2K 4W9 </p>
</div>
<script src="P6_SignUp.js"></script>
</body>
</html>