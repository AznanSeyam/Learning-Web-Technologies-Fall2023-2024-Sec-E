<center>
<form method="post" action="../controller/checkregistration.php">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<fieldset>
					<legend><h3>REGISTRATION !</h3></legend>
					Id<br/><input type="text" name="Id"><br/>
					Pass<br/><input type="pass" name="pass"><br/>
					Confirm Pass<br/><input type="pass"><br/>
					Name<br/><input type="text" name="name"><br/>
					User Type = <hr/>
					<input type="radio" name="usertype" value="User" />User
					<input type="radio" name="usertype" value="Admin" />Admin
					<hr/>
					<input type="submit" value="Sign Up">
					<a href="login.php">SignIn</a>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>
<?php
if(isset($_POST['Id']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['usertype'])){
    if($_POST['pass'] !== $_POST['confirmPassword']) {
        echo "<p style='color: red;'>Pass dont match !</p>";
    }
}
?>