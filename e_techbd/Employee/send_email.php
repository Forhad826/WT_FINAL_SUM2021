	
<?php 
include 'email.php';
require_once 'Controllers/EmailController.php';
//$categories = getAllCategories();

?>
<script>
</script>
<!--addproduct starts -->
<div class="center">
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action=""  onsubmit="return validate()" method="post" enctype="multipart/form-data" class="form-horizontal form-material">
		<div class="form-group">
			<table align="center">
          <tr>
            <td>Email Address</td>
            <td>: <input id="email" type="text" name="email" value="<?php echo $email;?>" ><br>
            <span id="err_email"style="color:red;"><?php echo $err_email;?></span></td>
          </tr>


          

          <tr>
    					<td >Email Text</td>
    					<td>: <textarea id="text" name="text"><?php echo $text;?></textarea>
    						<br><span id="err_text" style="color:red;"><?php echo $err_text;?></span>
    					</td>
    			</tr>

          
          

          <tr>
            <td></td>
             <td align="center"><input type="submit" name="send_email" value="Send Email" ></td>
          </tr>


        </table>
	</form>
</div>
