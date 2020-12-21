<!DOCTYPE html>
<html>
<head>
  <title>Upload</title>
</head>
<body>
  <a href="index.php">Home</a>
  <a href="parse.php">Parser</a>
  <a href="parse_fixed.php">Fixed</a><br><br>
  <form method="post" enctype="multipart/form-data">
    Select file to upload:
    <input type="file" name="file" id="file">
    <input type="submit" name="upload" value="Upload">
  </form>

  <?php
  if (isset($_POST["upload"])) {
    $target_dir = "uploads/";

    $file_name = basename($_FILES["file"]["name"]);

    $target_file = $target_dir . $file_name;

    if (!file_exists($target_file)) {
      move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
      echo "<br><p style='color:green'>Success</p>";
    }
  }
  ?>
</body>
</html>