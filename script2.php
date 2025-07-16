<?php
if(str_word_count($_POST["username"])>=2)
{
   echo $_POST["username"];
}
$email = $_POST['email'];

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

  echo("$email is a valid email address");

} else {

  echo("$email is not a valid email address");

}
echo "<br>";
$currentDate = strtotime(date('y-m-d'));
$then = strtotime($_POST["DOB"]);
$min = strtotime('+18 years', $then);
// echo $currentDate;
// echo "<br>";
// echo date("y-m-d",$min);
if ($min < $currentDate)
{
  echo "<p>18+<p>";
}
else
{
  echo "<p>Not 18<p>";
}
// $dob=new DateTime($_POST["DOB"]);
// $today=new DateTime();
// if($dob->diff($today)->y>18)
// {
//     echo "adult";
// }
// else
// {
//     echo "underage";
// }
$password=$_POST["password"];
if (strlen($password) >= 8) {
  if (preg_match("/[0-9]/", $password)) {
    if (preg_match("/[A-Z]/", $password)) {
      if (preg_match("/[a-z]/", $password)){
        echo $_POST["password"];
      } else {
        //
      }
    } else {
      echo "Password must have 1 uppercase letter at least.\n";
    }
  } else {
    echo "Password must have 1 Number at least.\n";
  }
} else {
  echo "Password must have 8 characters at least.\n";
}