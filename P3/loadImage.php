
<?php 
	
	print("<ul>");
	$imgFolder = "imgs/";

	$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
	$result = $mysqli->query("SELECT * FROM Images");
	while ($row = $result->fetch_assoc()) {
		$image = $row["File_path"];
		$count = 2;
		$image = str_replace("#",",",$image);
		// len = strlen($image);
		
		$imgPath = $imgFolder.$image;
		$imgPath = "'".$imgPath."'";
		// print($imgPath);
		print("<li>");
		print("<img src= $imgPath alt='' >");
		print("</li>");
	}
	print("</ul>");


 ?>