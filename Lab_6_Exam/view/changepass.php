<?php
include '../controller/checksession.php';
?>
<center>
	<form method="post" action="">
		<table border="0" cellspacing="0" cellpadding="5">
			<tr>
				<td>
					<fieldset>
						<legend>CHANGE PASS</legend>
						Current Pass<br />
						<input type="password" /><br />
						New Pass<br />
						<input type="password" /><br />
						Retype Pass <br />
						<input type="password"/>								
						<hr />
						<input type="button" value="Change" />     
						<a href="ushome.php">Home</a>						
					</fieldset>
				</td>
			</tr>
		</table>
	</form>
</center>
<?php