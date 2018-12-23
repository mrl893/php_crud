<?php

	include('conn.php');

	$id = $_GET['q'];

	$query = "SELECT id, name, email, phone FROM `contacts` WHERE id = '$id'";

	$run_query = mysqli_query($conn, $query);

	$contact = mysqli_fetch_object($run_query);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>

	<h1>Edit</h1>
	<hr>

	<!-- Create Contacts Form -->

	<fieldset>
		<legend>Contacts</legend>

		<form method="POST" action="update.php?q=<?= $contact->id; ?>">
			<table>
				<tr>
					<td>Name:</td>
					<td><input type="text" name="name" value="<?= $contact->name; ?>" required></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="email" value="<?= $contact->email; ?>" name="email" required></td>
				</tr>
				<tr>
					<td>Phone:</td>
					<td><input type="text" name="phone" value="<?= $contact->phone; ?>" required></td>
				</tr>
				<tr>
					<td colspan="2">
						<hr>
						<button type="submit" name="submit"> Update Contact </button>
					</td>
				</tr>
			</table>
		</form>

	</fieldset>



</body>
</html>