<?php
session_start();
if(!isset($_SESSION['id']))
{
	header('location:login.php');
}
?><?php
	
	if(!empty($_FILES['file']))
	{
		foreach($_FILES['file']['name'] as $key => $name)
		{
			if($_FILES['file']['error'][$key] == 0 && move_uploaded_file($_FILES['file']['tmp_name'][$key],"upload/{$name}"))
			{
				$uploaded[]=$name;
			}
		}
		
		
		if(!empty($_POST['ajax']))
		{
			die(json_encode($uploaded));
		}
		
		
		//print_r($uploaded);
	}

?>
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html version="-//W3C//DTD XHTML 1.1//EN" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:xsi="http://www.w3.org/2001/XMLSchema-in">
  <head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	 <script type="text/javascript" src="upload.js"></script>
	 <style type="text/css">
	    #upload_progress { display:none; }
	 </style>
	 <title>File Upload</title>
  </head>
	<body>
		<div id="uploaded">
			<?php
				if(!empty($uploaded))
				{
					foreach($uploaded as $name){
						echo '<div><a href="upload/',$name,'">',$name,'</a></div>';
					}
				}
			?>
		</div>
		<div id="upload_progress">
		
		</div>
			<div>
				<form action="" method="post" enctype="multipart/form-data">
					<div>
						<input type="file" id="file" name="file[]" multiple="multiple" />
						<input type="submit" id="submit" name="submit" value="upload" />
					</div>
				</form>
		</div>

	</body>
</html>