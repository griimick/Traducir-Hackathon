<?php
 
$allowedExts = array("mp3", "wma");
$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
 
if ((($_FILES["file"]["type"] == "audio/mp3")
|| ($_FILES["file"]["type"] == "audio/wma")
 
&& ($_FILES["file"]["size"] < 20000000)
&& in_array($extension, $allowedExts))
 
  {
  if ($_FILES["file"]["error"] > 0)
    {
    $_SESSION["translatevideo"] = "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "audios/" . $_FILES["file"]["name"]);
      $_SESSION["translatevideo"] = "Audio successfully uploaded";
    }
  }
else
  {
  echo "Invalid file";
  }
?>