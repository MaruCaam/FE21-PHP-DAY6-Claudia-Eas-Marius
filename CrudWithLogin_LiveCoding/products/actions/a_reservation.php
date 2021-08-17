<?php
session_start();
if(!isset($_SESSION["user"]) && !isset($_SESSION["adm"])){
    header("Location: ../../index.php");
    exit;
}

require_once '../../components/db_connect.php';

if ($_POST) {   
    $fk_user = $_SESSION["user"];
    $date = $_POST['book_date_time'];
    $numberOfPeople = $_POST["people_number"];
    $uploadError = '';
    
    //this function exists in the service file upload.

    
        $sql = "INSERT INTO booking (fk_user_id, book_date_time, people_number) VALUES ($fk_user, '$date',$numberOfPeople )";
    
       
    
    

    if (mysqli_query($connect, $sql) === true) {
        $class = "success";
        $message = "Your reservation was successfull!<br>
            <table class='table w-50'><tr>
            <td> $name </td>
            </tr></table><hr>";
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $connect->error;
    }
    mysqli_close($connect);
} else {
    header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <?php require_once '../../components/boot.php'?>
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Make Reservation</h1>
            </div>
            <div class="alert alert-<?=$class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>