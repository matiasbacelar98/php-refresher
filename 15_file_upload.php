<?php
    if(isset($_POST['submit'])){
        $allowedExt = ['png','jpg','jpeg','gif'];

        if (!empty($_FILES['upload']['name'])){
            $fileName = $_FILES['upload']['name'];
            $fileSize = $_FILES['upload']['size'];
            $fileTmp = $_FILES['upload']['tmp_name'];
            $targetDir = "uploads/${fileName}";

            // Get file extention
            $fileExt = explode('.', $fileName);
            $fileExt = strtolower(end($fileExt));

            // Validate file ext
            if(in_array($fileExt, $allowedExt)){
                if($fileSize <= 1000000){
                    move_uploaded_file($fileTmp,  $targetDir);
                    $message = '<p style="color:green;">File uploaded!</p>';
                } else {
                    $message = '<p style="color:red;">The file is to large</p>';
                }
            } else {
                $message = '<p style="color:red;">Invalid file type</p>';
            }
        } else {
            $message = '<p style="color:red;">Please choose a file</p>';
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <?php echo $message ?? null ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST' enctype='multipart/form-data'>
        Select image to upload:
        <input type='file' name='upload' />
        <input type='submit' value='submit' name='submit' />
    </form>
</body>
</html>
