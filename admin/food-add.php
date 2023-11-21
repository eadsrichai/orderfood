<?php
if (isset($_POST['submit']) && $_POST['submit'] == "save") {
    $name_food = $_POST['name_food'];
    $detail_food = $_POST['detail_food'];
    $price_food = $_POST['price_food'];
    $id_type = $_POST['id_type'];

    if ($_FILES['fileToUpload']['error'] !== UPLOAD_ERR_OK) {
        echo "Error uploading file: " . $_FILES['fileToUpload']['error'];
        exit;
    }

    // Get file information
    $fileName = $_FILES['fileToUpload']['name'];
    $fileTmpName = $_FILES['fileToUpload']['tmp_name'];
    $fileSize = $_FILES['fileToUpload']['size'];
    $fileType = $_FILES['fileToUpload']['type'];

    // Check allowed file types
    $allowedFileTypes = ['image/jpeg', 'image/png', 'image/gif', 'application/pdf'];
    if (!in_array($fileType, $allowedFileTypes)) {
        echo "ชนิดไฟล์ไม่ถูกต้อง";
        exit;
    }

    // Generate a unique filename
    $uniqueFileName = uniqid() . '_' . $fileName;

    // Upload the file to the uploads directory
    $uploadDir = 'data/';
    if (!move_uploaded_file($fileTmpName, $uploadDir . $uniqueFileName)) {
        echo "Failed to upload file";
        exit;
    }

    include_once('../system/db.php');

    $sql1 = "INSERT INTO food(name_food,detail_food,price_food,id_type,img_food)
    VALUES('$name_food','$detail_food','$price_food','$id_type','$uniqueFileName')";


    $stmt = $conn->prepare($sql1);
  
    // $stmt->bind_param("sss", $uniqueFileName, $fileType, $fileSize);
    if (!$stmt->execute()) {
        echo "Error inserting data into database: " . $stmt->error;
        exit;
    }

    
    // $sql31 = "INSERT INTO sender_user(id_user,id_user_re,id_doc,date_send,status_read,status_send,status_dep,date_read)
    // VALUES('$id_user','$id_user_re','$id_doc',(now()),'0','0','0',null)";

    // $stmt = $conn->prepare($sql31);
    // if (!$stmt->execute()) {
    //     echo "Error inserting data into database: " . $stmt->error;
    //     exit;
    // }

    // Success message
    echo "File uploaded successfully";
    header( "location: index.php?menu=1" );   
            exit(0);
}{
    echo "NO";
}
?>
