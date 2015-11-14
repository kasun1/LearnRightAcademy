<!DOCTYPE html> 
<html>

<head>
  <title></title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
    <header>
	  <div id="banner">
	    <div id="welcome">
	      <h2>LEARNRIGHT ACADEMY </h2>
	    </div><!--close welcome-->			  	
	  </div><!--close banner-->	
	</header>

	<nav>
	  <div id="menubar">
        <ul id="nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="ourwork.php">Our Course Schedules</a></li>
          <li class="current"><a href="Registration.php">Registration</a></li>
		  <li><a href="StaffLogin.php">Staff Login</a></li>
          <li><a href="projects.php">Projects</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </div><!--close menubar-->	
	</nav>
    
	<div id="site_content">		
	
      <div class="slideshow">
	    <ul class="slideshow">
          <li class="show"><img width="940" height="300" src="images/ghi.jpg" alt="&quot;Best Education Centre&quot;" /></li>
		  <li><img width="940" height="300" src="images/abc.jpg" alt="&quot;Best Education Centre&quot;" /></li>
         <li><img width="940" height="300" src="images/def.jpg" alt="&quot;Best Education Centre&quot;" /></li>
         <li><img width="940" height="300" src="images/ghi.jpg" alt="&quot;Best Education Centre&quot;" /></li>
         <li><img width="940" height="300" src="images/jkl.jpg" alt="&quot;Best Education Centre&quot;" /></li>
         <li><img width="940" height="300" src="images/mno.jpg" alt="&quot;Best Education Centre&quot;" /></li>
        <li><img width="940" height="300" src="images/home_1.jpg" alt="&quot;Best Education Centre&quot;" /></li>
        <li><img width="940" height="300" src="images/home_2.jpg" alt="&quot;Best Education Centre&quot;" /></li>
        <li><img width="940" height="300" src="images/students_in_classroom2.jpg" alt="&quot;Best Education Centre&quot;" /></li>
        </ul> 
	  </div><!--close slideshow-->		

	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>New Website</h2>
            <p>Welcome to our new website. Please have a look around, any feedback is much appreciated.</p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->     		
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>Latest Update</h2>
            <h3>July 2015</h3>
            <p>Copyright &copy; 2015,LearnRight Academy. .</p>         
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
		<div class="sidebar">
          <div class="sidebar_item">
            <h3>Registration will end of this Month. </h3>
            </div><!--close sidebar_item--> 
        </div><!--close sidebar-->  		
        <div class="sidebar">
          <div class="sidebar_item">
            <h2>Contact</h2>
            <p>Phone: +44 (0)1234 567891</p>
            <p>Email: <a href="mailto:info@youremail.co.uk">LearnRight@gmail.com</a></p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
      </div><!--close sidebar_container-->	
	
	  <div id="content">
        <div class="content_item">
          <h2>Registration Form </h2>
		    <table width="620" border="0">
		      <tbody>
		        <tr>
		          <td width="589"><p align="justify">Congratulations on your decision to apply to LearnRight Academy &ndash; Africa. We are here to assist you with each step of the admissions process, and look forward to helping you reach your educational and career goals. Our experienced staff will walk you through our registration process.</p></td>
	            </tr>
	          </tbody>
	      </table>
		    <p>Enter your Details here and we will contact you by individualy. </p>
		    <div class="content_container">
			
	<form name="reg" action="code_exec.php" onSubmit="return validateForm()" method="post">
	  <table width="622" height="338" border="0" align="center" cellpadding="2" cellspacing="0">
        <tr>
          <td colspan="2"><div align="center">
              <?php 
		@$remarks=$_GET['remarks'];
		if ($remarks==null and $remarks=="")
		{
		echo 'Register Here';
		}
		if ($remarks=='success')
		{
		echo 'Registration Success';
		}
		?>
          </div></td>
        </tr>
        <tr>
          <td with="95"><div align="right">First Name:</div></td>
          <td width="171"><input type="text" name="fname" /></td>
        </tr>
        <tr>
          <td><div align="right">Last Name:</div></td>
          <td><input tpe="text" name="lname" /></td>
        </tr>
        <tr>
          <td><div align="right">Gnder:</div></td>
          <d>
             <select name="gendr">
             <option value="male">Male<option>
             <option vlue="female">Female</option>
             <option value="other">Other</option>
             </select></td>
        </tr>
        <tr>
          <td><div align="right">Address:</div></td>
          <td><input type="text" name="address" /></td>
        </tr>
        <tr>
          <td><div alig="right">Contact No.:</div></td>
          <td><input type="text" name="contact" /></td>
        </tr>
        <tr>
          <d><div align="right">Course Name:</div></td>
          <td><select name="course_name">
             <option value="hndit">HND IT</option>
             <option vaue="hndqs">HND QS</option>
             <option value="degree">Degree</option>
             <option value="master">Master</option>
             </select>
		  </td>
        </tr>
        <tr>
          <td><div align="right">Username:</div></td>
          <td><input type="tet" name="username" /></td>
        </tr>
        <tr>
          <td><div align="right">Email:</div></td>
          <td><input type="text" name="email" /></td>
        </tr>
        <tr>
          <td><div align="right></div></td>
          <td><input name="submit" type="submit" value="Submit" /></td>
        </tr>
      </table>
	</form>
<script type="text/javascript">
function validateForm()
{
var a=document.forms["reg"]["fname"].value;
var b=document.forms["reg"]["lname"].value;
var c=document.forms["reg"]["gender"].value;
var d=document.forms["reg"]["address"].value;
var e=document.forms["reg"]["contact"].value;
var f=document.forms["reg"]["course_name"].value;
var g=document.forms["reg"]["username"].value;
var h=document.forms["reg"]["email"].value;
if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f==""))
  {
  alert("All Field must be filled out");
  return false;
  }

  {
  alert("Email must be filled out");
  return false;
  }
}
</script>
			
</div>
		  <!--close content_container--><!--close content_container-->
			<!--close content_container-->
            <!--close content_container-->
        </div>
        <!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content-->  	
  
    <footer>
	  <a href="index.php">Home</a> | <a href="ourwork.php">Our Course Schedules</a> | <a href="Registration.php">Registration</a> | <a href="projects.php">Projects</a> | <a href="contact.php">Contact</a><br/><br/>
	  <a href="$display_images">Images</a> 
  
  </div><!--close main-->

  <!-- javascript at the bottom for fast page loading -->
 <!-- <script type="text/javascript" src="js/jquery.min.js"></script>-->
  <!--<script type="text/javascript" src="js/image_slide.js"></script>	-->
  
</body>
</html>
