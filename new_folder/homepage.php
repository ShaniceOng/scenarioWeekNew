<?php session_start(); ?>
<?php 
include 'HomepageController';
$controller = new HomepageController(); ?>  

<!DOCTYPE html>
<html>
<head>
	<title>Signup Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<p>Here is a list of all posts:</p>

	<table>
		<tr>
			<th>Username</th>
			<th>Content</th>
		</tr>

		<?php foreach($snippets as $snippet) { ?>
		<tr>
		  <td><?php echo $snippet->username; ?></td>
		  <td><?php echo $snippet->content; ?></td>
	    </tr>
		<?php } ?>
	</table>
</body>