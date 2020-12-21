<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
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
	<h2 style="text-align: center;">Challenge 10: XXE</h2>

	<table id="info">
	 	<tr>
		    <th>Upload</th>
		    <th>Parser</th>
		    <th>Fixd parser</th>
	  	</tr>
	  	<tr>
	    	<td><a href="upload.php">Upload</a></td>
	    	<td><a href="parse.php">Parse</a></td>
	    	<td><a href="parse_fixed.php">Fixed</a></td>
	  	</tr>
	  </table>
</body>
</html>