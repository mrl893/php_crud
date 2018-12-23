<?php

	@$conn = mysqli_connect('localhost','root','','contacts');

	if (!$conn) {
		die("Failed to connect");
	}
