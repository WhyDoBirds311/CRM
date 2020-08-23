<?php
	session_start();
	require 'dbconnect.php';

	$sql = "SELECT * FROM users;";

	$result = mysqli_query($conn,$sql);
	$index = 0;
	
	echo "<table>
	<tr>
	<th width=10%></th>
	<th>Username</th>
	<th width=25%>Role</th>
	<th width=12%></th>
	<th width=10%></th>
	</tr>";

	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		$index++;
		$role = $row['user_role'];
		echo "<tr>";
		echo "<td>".$index."</td>";
		echo "<td>".$row['username']."</td>";
		switch($role)
		{
			case 1: echo "<td>Admin</td>";
					break;
			case 2: echo "<td>Manager</td>";
					break;
			case 3: echo "<td>User</td>";
					break;
			case 4: echo "<td>External Company</td>";
					break;

			default: echo "Unspecified User";
					break;
		}
		echo "<td><a href=edit_user.php?edit=$row[userID]>Edit Role</a></td>";
		echo "<td><a href='#'>Delete</a></td>";
		echo "</tr>";
	}

	echo "</table>";

	mysqli_close($conn);
?>