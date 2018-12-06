<?php
if(isset($_POST['submit'])){
	$file = $_FILES['file'];

	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('jpg', 'jpeg', 'png', 'pdf', 'doc', 'docx');

	if(in_array($fileActualExt, $allowed)){
		if($fileError === 0){
			if($fileSize < 1000000) {
				$fileNameNew = uniqid('', true).".".$fileActualExt;
				$fileDestination = 'uploads/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				header("Location: casting_call_resume_submit.php?uploadsuccess");
			} else {
				echo "Your file is too big! Please go back and try again.";
			}
		} else {
			echo "There was an error uploading your file. Please go back and try again.";
		}
	} else {
		echo "Sorry, you cannot upload that type of file. Please go back and try again.";
	}
}
?>
