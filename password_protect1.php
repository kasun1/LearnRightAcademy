<html>

<?php




$LOGIN_INFORMATION = array(
  'staff1' => 'staff',
);


define('USE_USERNAME', true);

define('LOGOUT_URL', 'http://www.example.com/');


define('TIMEOUT_MINUTES', 1);


define('TIMEOUT_CHECK_ACTIVITY', true);



if(isset($_GET['help'])) {
  die('Include following code into every page you would like to protect, at the very beginning (first line):<br>&lt;?php include("' . str_replace('\\','\\\\',__FILE__) . '"); ?&gt;');
}

$timeout = (TIMEOUT_MINUTES == 1 ? 1 : time() + TIMEOUT_MINUTES * 60);


if(isset($_GET['logout'])) {
  setcookie("verify", '', $timeout, '/'); // clear password;
  header('Location: ' . LOGOUT_URL);
  exit();
}

if(!function_exists('showLoginPasswordProtect')) {


function showLoginPasswordProtect($error_msg) {
?>
<html>
<head>
  <title>Please enter password to access this page</title>
  <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
  <META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<body background="../freehtml5buildings/images/transparent.png">
 <div id="main">
    <header>
	  <div id="banner">
	    <div id="welcome">
	      <h2>LEARNRIGHT ACADEMY </h2>
	    </div><!--close welcome-->			  	
	  </div>


<tr>
		<td colspan="2" height="110">
		
		
</tr>

<td></td>

  <form method="post">
     <h3>LEARNRIGHT ACADEMY Student Information System</h3>
    <h3>Please enter User Name and password to access this page</h3>


	

    <font color="red"><?php echo $error_msg; ?></font><br />
<td><?php if (USE_USERNAME) echo 'Login:<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="access_login" /><br />Password:<br />'; ?></td>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="access_password" /><p></p>    
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="Submit" value="Submit" />
  </form>
  <br />
</body>
</html>

<?php
  // stop at this point
  die();
}
}


if (isset($_POST['access_password'])) {

  $login = isset($_POST['access_login']) ? $_POST['access_login'] : '';
  $pass = $_POST['access_password'];
  if (!USE_USERNAME && !in_array($pass, $LOGIN_INFORMATION)
  || (USE_USERNAME && ( !array_key_exists($login, $LOGIN_INFORMATION) || $LOGIN_INFORMATION[$login] != $pass ) ) 
  ) {
    showLoginPasswordProtect("Incorrect password.");
  }
  else {
    // set cookie if password was validated
    setcookie("verify", md5($login.'%'.$pass), $timeout, '/');
    
    unset($_POST['access_login']);
    unset($_POST['access_password']);
    unset($_POST['Submit']);
  }

}

else {

  // check if password cookie is set
  if (!isset($_COOKIE['verify'])) {
    showLoginPasswordProtect("");
  }

  // check if cookie is good
  $found = false;
  foreach($LOGIN_INFORMATION as $key=>$val) {
    $lp = (USE_USERNAME ? $key : '') .'%'.$val;
    if ($_COOKIE['verify'] == md5($lp)) {
      $found = true;
      // prolong timeout
      if (TIMEOUT_CHECK_ACTIVITY) {
        setcookie("verify", md5($lp), $timeout, '/');
      }
      break;
    }
  }
  if (!$found) {
    showLoginPasswordProtect("");
  }

}


?>









</html>