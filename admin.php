<?php

$username = $_POST['username']; //here it fetches the username from the post #redundant because login.php has already done it and it should just
								//check for the session logged in.

if(!isset($_SESSION['session']["logged_in"])) { //check to see is user is logged in, if not send them to login.php
  header("Location: login.php");
}

if (isset($_GET['username'])) //missing a ), checks if the username is set in the GET global, this step is redundant cos it could have just gotten it from login.php
{							//besides it could only be from a POST or GET not both
  $username = filterinput($_POST['username']); //cleans it up and assigns POST username variable and assigns it to $username if GET['username'] is set
}

include("http://242.32.23.4/inc/admin.inc.php"); //includes admin.inc.php
if (isset($_GET['page_id'])) { //if page_id is available in $_GET
  include('inc/inc' . $_GET['page_id'] . '.php'); //include a file inc + page_id + .php
  include('inc/inc-base.php'); //include inc-base.php
}

function filterinput($variable)
{
    $variable = str_replace("'", "\'", $variable); //replacing single quote for single quote, redundant
    $variable = str_replace("\"", "\"", $variable); //missing escape back slash, replacing doub le quote for double quote, reedundant
    return $variable; //whole function is redundant.
}
// this function connects to a mysql db, fetches the user content from the users table with the username passed
//fetches an array from the result and then returns the user_content column 
function getUserContent($username)
{
    $con=mysqli_connect("locahost","dbuser","abc123","my_db");
    $result = mysqli_query($con,"SELECT user_content FROM users where username = ". $username);
    $row = mysqli_fetch_array($result);
    return $row['user_content'];
    mysqli_close($con);
}
//the username is spat out
echo "<h1>Welcome, ". $username ."</h1>";
//and the user content is spat out
echo getUserContent($username);



//here is how my code would look like

if(!isset($_SESSION['session']["logged_in"])) { ////this assumes that login.php sets that session variable after successful login before referring the user to this page
  header("Location: login.php");
}

$userName = isset($_GET['username'])? $_GET['username']:'';

//you want to make sure you have everything you need before proceeding, if not you have to have a way to manage such exceptions or Errors
if (empty($userName)) throw new Exception("no username passed", 1);


//assuming the username is passed from login.php in the url
//the username should already be filtered in login.php before processing
//so filterinput() should normally not be in this file
//and should have more cleansing capabilities
//this is how it should look with the 2 capabilities withou being redundant

function NewFilterInput($userName){
	return str_replace("\"", "", str_replace("'", "", $userName));
}

function newGetUserContent($userName)
{
    $con=mysqli_connect("locahost","dbuser","abc123","my_db");
    $result = mysqli_query($con,"SELECT user_content FROM users where username = ". $userName);
    $row = mysqli_fetch_array($result);
    return $row['user_content'];
    mysqli_close($con);
}
echo "<h1>Welcome, ". $userName ."</h1>";
//and the user content is spat out
echo newGetUserContent($userName);

?>
