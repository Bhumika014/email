<?php
include 'header.php';
include 'config.php'; 
?>

<html>
<html>
<head>
<link href="bootstrap.min.css" rel="stylesheet">
<link href="ckeditor/contents.css" rel="stylesheet">
<script src="ckeditor/ckeditor.js"></script>

</head>
<body>
<table class="table">
  <tr>
  <th>emial</th>
  <th>subject</th>
  <th>massege</th>
  </tr>
 
  
<?php
       $result = mysqli_query($conn, "SELECT * From email where status = '1'");
	     if (mysqli_num_rows($result) == 0) {
		   echo "
		   <h4 class='alert alert-info'> No Record Found.</h4>
	   "; } else { while ($row = mysqli_fetch_array($result)) { ?>
	   <tr>
	   <td> <?php echo $row['email']; ?> </td>
	   <td> <?php echo $row['subject'];?></td>
	   <td> <?php echo $row['massege']; ?> 
	   <?php echo "<a href=\"delemail.php?id=$row[mailid]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>"; ?>
	   </td>
	   </tr>
	   
					
					
					
					<?php
					}
					}
					?>
					</table>
					
	</body>