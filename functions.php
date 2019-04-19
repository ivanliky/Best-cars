<?php

	function login($email,$conn)
	{
		$result = mysqli_query($conn,"SELECT id FROM users WHERE email='$email'");
		
		if(mysqli_num_rows($result)==1)
		{
			return true;
		}
		else
		{
			return false;
		}
		
	}
	
