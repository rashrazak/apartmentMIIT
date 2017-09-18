<<!DOCTYPE html>
<html>
<head>
	<title>Upload Form</title>
</head>
<body>
<?php echo $error; ?>
<?php echo form_open_multipart('upload/do_upload');?>

<input tye="submit" value="upload"/>

</form>
</body>
</html>