<?php 
require_once('../../src/Raw2Jpg.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Testing the converter</title>
</head>
<body>
	<h1>Here, we shall test the conversion!</h1>
	<h2>Canon 5D Mark II (.CR2)</h2>
	<?php 
	Raw2Jpg::convert('../data/5DII_TestShot_F8.CR2', 'output/5DII_TestShot_F8.jpg');
	?>
	<p><img src="/test/manual/output/5DII_TestShot_F8.jpg"></p>
	<h2>Canon 1Ds Mark III (.CR2)</h2>
	<?php 
	Raw2Jpg::convert('../data/1DsIII_TestShot_F8.CR2', 'output/1DsIII_TestShot_F8.jpg');
	?>
	<p><img src="/test/manual/output/1DsIII_TestShot_F8.jpg"></p>
</body>
</html>