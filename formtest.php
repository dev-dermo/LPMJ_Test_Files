<?php

echo <<<_END
<html>
	<head>
		<title>Form Test</title>
	</head>
</html>
<body>
	<form method="post" action="formtest.php">
		What is your name?
		<input type="text" name="name">
		<input type="submit">
	</form>
</body>
_END;
?>