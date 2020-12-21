<!DOCTYPE html>
<html>
<head>
	<title>Parser</title>
	<style>
	#info {
	  font-family: Arial, Helvetica, sans-serif;
	  border-collapse: collapse;
	  width: 100%;
	}

	#info td, #info th {
	  border: 1px solid #ddd;
	  padding: 8px;
	}

	#info tr:nth-child(even){background-color: #f2f2f2;}

	#info tr:hover {background-color: #ddd;}

	#info th {
	  padding-top: 12px;
	  padding-bottom: 12px;
	  text-align: left;
	  background-color: #4CAF50;
	  color: white;
	}
	</style>
</head>
<body>
	<a href="index.php">Home</a>
  	<a href="upload.php">Upload</a>
  	<a href="parse_fixed.php">Fixed</a><br><br>
	<form method="post" enctype="multipart/form-data">
	    Select file to parse:
	    <input type="text" name="file" id="file">
	    <input type="submit" name="parse" value="Parse">
	</form><br>

	<?php
	if (isset($_POST["parse"])) {
    	$target_dir = "uploads/";

    	$target_file = $target_dir . $_POST["file"];

    	$xml_doc = new DOMDocument();
    	$xml_doc->load($target_file, LIBXML_NOENT | LIBXML_DTDLOAD);
    	$xml_list = simplexml_import_dom($xml_doc);

    	echo "<table id='info'>
    	<tr>
    		<th>Name</th>
    		<th>DOB</th>
    		<th>School</th>
    	</tr>";

    	foreach ($xml_list->children() as $info) {
    		echo "<tr>
    		<td>{$info->name}</td>
    		<td>{$info->birth}</td>
    		<td>{$info->school}</td>
    		</tr>";
    	}
    	echo "</table>";
    }
  	?>
</body>
</html>