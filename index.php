<?php
include 'header.php';
include 'config.php'; 
?>


<style>
.email{background:#29b6f6; color:#ffffff; padding : 5px; font-size:200% ; border-radius:10px}
</style>


<div class="container">
<div class="row">
<div class="col-md-12">
<h4 style="background-color: #29b6f6; color: #ffffff ; padding :10px; font-size: 400%" > Persnol detail </h4>
<form method="post" class="form-horizontal">
<div class="form-group">
<label for="text" class="col-md-1 email"  > Email</label>
<div class="col-md-11">
<input type="text" class="form-control" name="email" style= 'height:50px'></input> 
</div>
</div>
<div class="form-group">
<label for="text" class="col-md-1 email"  > Subject </label>
<div class="col-md-11">
<input type="text" class="form-control" name="subject" style= 'height:50px'></input> 
</div>
</div>
<div class="form-group">
<label for="text" class="email"  > massege </label>
<br>
<textarea class="ckeditor" name="massege"> </textarea>
</div>
<div class="form-group">
<label for="text" class="col-sm-4 control-label"></label>
<div class="col-sm-8">
  <button type="submit" class="btn btn-lg btn-info" name="submit">submit</button>
</div>	
				
</form>
</div>
</div>
</div>
 
  <?php include 'footer.php'; ?>
		
		<?php
		 ob_start() ;
		 
		if (isset ($_POST[ 'submit' ] ) !="") {
			
			$email = $_POST['email'];
			$subject = $_POST['subject'];
			$massege = $_POST['massege'];
			 
			 $insert = mysqli_query($conn, "INSERT INTO email(email, subject, massege)VALUES
			 ('$email', '$subject', '$massege')");
		  
		  if ( $insert ) {
						echo( "<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Data Insert Successfully!!')
                    window.location.href='index.php';
                    </SCRIPT>" );
					} else {
						$errormsg = "Something went wrong, Try again";
						echo "<script type='text/javascript'>alert('$errormsg');</script>";
					}
				} 
					die();
				
			
			ob_end_flush();
			?>		
			
	
					
					
