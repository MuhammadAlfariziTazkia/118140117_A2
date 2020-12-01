<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<?= $this->session->flashdata('message');?>
	<form method="post" action="<?=base_url('login/cekLogin');?>">
		<center>
			<input type="text" name="user_name" placeholder="Username">
			<br><br>
			<input type="password" name="password" placeholder="password">
			<br><br>
			<button type="submit">Submit</button>
		</center>
	</form>
</body>
</html>