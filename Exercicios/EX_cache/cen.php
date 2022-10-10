<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	oi cenourinha

	<?php
	<?php

		$query  = "SELECT id, name, inserted, size FROM products
                  WHERE size = '$size'
                  ORDER BY $order LIMIT $limit, $offset;";
		$result = odbc_exec($conn, $query);

	?>
</body>
</html>