<!DOCTYPE html> 
<html>
<?php 
include('connection.php');
include('password_protect1.php');

?>
<head>
  <title>Free HTML5 Templates</title>
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
	      <h2>Buildings</h2>
	    </div><!--close welcome-->			  	
	  </div><!--close banner-->	
	</header>

	<nav>
	  <div id="menubar">
        <ul id="nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="ourwork.php">Our Course Schedules </a></li>
         <li><a href="Registration.php">Registration </a></li>
		  <li class="current"><a href="StaffLogin.php">Staff Login</a></li>
          <li><a href="projects.php">Projects</a></li>
          <li><a href="contact.php">Contact Us</a></li>
		  
        </ul>
      </div><!--close menubar-->	
	</nav>
    
	<div id="site_content">		
	
      <div class="slideshow">
	    <ul class="slideshow">
          <li class="show"><img width="940" height="300" src="images/home_1.jpg" alt="&quot;Enter your caption here&quot;" /></li>
          <li><img width="940" height="300" src="images/home_2.jpg" alt="&quot;Enter your caption here&quot;" /></li>
        </ul> 
	  </div><!--close slideshow-->		

	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>&nbsp;</h2>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
          </div>
          <!--close sidebar_item--> 
        </div><!--close sidebar-->     		
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>Latest Update</h2>
            <h3>February 2013</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim.</p>         
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
		<div class="sidebar">
          <div class="sidebar_item">
            <h3>January 2013</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim.</p>         
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->  		
        <div class="sidebar">
          <div class="sidebar_item">
            <h2>Contact</h2>
            <p>Phone: +44 (0)1234 567891</p>
            <p>Email: <a href="mailto:info@youremail.co.uk">info@youremail.co.uk</a></p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->	
	
	  <div id="content">
        <div class="content_item">
		
		<table width="93%" height="95" border="0" align="center" cellpadding="2">
  <tr>
    <td width="10%" nowrap="nowrap" bgcolor="#43A9FF"><span class="h2">First Name</span></td>
    <td width="15%" nowrap="nowrap" bgcolor="#43A9FF"><span class="h2">LAST NAME </span></td>
    <td width="33" nowrap="nowrap" bgcolor="#43A9FF"><span class="h2">Gender</span></td>
    <td width="33" nowrap="nowrap" bgcolor="#43A9FF"><span class="h2">Address </span></td>
    <td width="33" nowrap="nowrap" bgcolor="#43A9FF"><span class="h2">Contact No</span></td>
    <td width="33" nowrap="nowrap" bgcolor="#43A9FF"><span class="h2">Course Name </span></td>
    <td width="33" nowrap="nowrap" bgcolor="#43A9FF"><span class="h2">User Name </span></td>
	<td width="33" nowrap="nowrap" bgcolor="#43A9FF"><span class="h2">Email </span></td>
    <td width="2%" nowrap="nowrap" bgcolor="#43A9FF">&nbsp;</td>
    <td width="2%" nowrap="nowrap" bgcolor="#43A9FF">&nbsp;</td>
<?php 

// sending query
$result = mysql_query("SELECT * FROM member");
if (!$result) 
	{
    die("Query to show fields from table failed");
	}
$numberOfRows = MYSQL_NUMROWS($result);

If ($numberOfRows == 0) 
	{
	echo 'Sorry No Record Found!';
	}
else if ($numberOfRows > 0) 
	{
	$i=0;
	while ($i<$numberOfRows)
		{		
			if(($i%2)==0) 
				{
					$bgcolor ='#000000';
				}
			else
				{
					$bgcolor ='#000000';
				}	
				
				
					
			$fname = MYSQL_RESULT($result,$i,"fname");
			$lname = MYSQL_RESULT($result,$i,"lname");
			$gender = MYSQL_RESULT($result,$i,"gender");
			$address = MYSQL_RESULT($result,$i,"address");
			$contact = MYSQL_RESULT($result,$i,"contact");
			$course_name = MYSQL_RESULT($result,$i,"course_name");
			$username = MYSQL_RESULT($result,$i,"username");
			$email = MYSQL_RESULT($result,$i,"email");
?>
    <tr bgcolor="<?php echo $bgcolor; ?>">
			<td nowrap><?php echo $fname; ?></td>
			<td nowrap><?php echo $lname; ?></td>
			<td nowrap><?php echo $gender; ?></td>
			<td nowrap><?php echo $address; ?></td>
			<td nowrap><?php echo $contact; ?></td>
			<td nowrap><?php echo $course_name; ?></td>
			<td nowrap><?php echo $username; ?></td>
			<td nowrap><?php echo $email; ?></td>	
			
			<td> <a href="edit_student.php?Student_ID=<?php echo $this_Stud_ID; ?>">
			<img src='Images/b_edit.png' alt="edit record"></a></td>			
			
			<td> <a href="delete_student.php?Student_ID=<?php echo $this_Stud_ID; ?>"> 
			<img src='Images/b_drop.png' alt="delete record" onClick="return confirm('<?php echo $this_Stud_ID; ?>');"></a></td>
    </tr>

<?php 	
		$i++;		
		}
	}	
?>
</tr>	
</table>
		
		
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
        </div><!--close content_container--> 
      </div><!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content-->  	
  
    <footer>
	  <a href="index.php">Home</a> | <a href="ourwork.php">Our Course Schedules</a> | <a href="Registration.php">Registration</a> | <a href="projects.php">Projects</a> | <a href="contact.php">Contact</a><br/><br/>
	  <a href="$display_images">Images</a> 
  </footer>
  
  </div><!--close main-->

  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>	
  
</body>
</html>
