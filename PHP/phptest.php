<?php

//Variable definition
$name = $email = $comments = $newsletter = "";
$nameErr = $emailErr = $commentErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  if(empty($_POST["name"]))
  {
    $nameErr = "Name is required.";
  }
  else {
    $name = test_input($_POST["name"]);

    if(!preg_match("/^[a-zA-Z ]*$/",$name))
    {
      $nameErr = "Only letters and spaces allowed.";
    }
  }

  if(empty($_POST["email"]))
  {
    $emailErr = "Email address is required.";
  }
  else {
    $email = test_input($_POST["email"]);

    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
      $emailErr = "Invalid email address.";
    }
  }

  if(empty($_POST["comments"]))
  {
    $commentErr = "Feedback is required.";
  }
  else {
    $comments = test_input($_POST["comments"]);
  }

  if(isset($_POST["newsletter"]) && $_POST["newsletter"] == "Yes")
  {
    $newsletter = test_input($_POST["newsletter"]);
  }
  else
  {
    $newsletter = test_input("No");
  }
}

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php
echo "<h2>What you typed in</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $comments;
echo "<br>";
echo $newsletter;
?>

</body>
</hmtl>
