<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	 <title>Students</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<script type="text/javascript">
	</script>
</head>
<body>
	<?	
		//ini_set('display_errors',1);
		//error_reporting(E_ALL|E_STRICT);
		require_once("../request.php");
		$request = new RBRequest();
		echo $request->getAllBooksForUser($_GET['user']);
	?>
</body>
</html>