<?php
session_start();
if(!isset($_SESSION["user"]) && !isset($_SESSION["adm"])){
    header("Location: ../index.php");
    exit;
}
if(isset($_SESSION["user"])){
    header("Location: ../home.php");
    exit;
}
require_once '../components/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT booking.* FROM booking WHERE booking.id = {$id}";
    
    $result = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($result);
    $date = $data['book_date_time'];
    // $date = date("c",strtotime($date));
    $date = date('y-m-d\TH:i:sP', $date);
    // var_dump($date);
    
    $numberOfPeople = $data['people_number'];
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Booking</title>
        <?php require_once '../components/boot.php'?>
    </head>
    <body>
        <fieldset>
            
            <form class="container" action="./actions/a_edit_booking.php"  method="post" enctype="multipart/form-data">
            <legend class='h2'>Edit Booking</legend>
                <table class="table">
                    <tr>
                        <th>Date & Time</th>
                        <td><input class="form-control" type="datetime-local"  name="book_date_time" value="<?php echo $date ?>"  /></td>
                    </tr>
                    <tr>
                        <th>Number of People</th>
                        <td><input class="form-control" type= "number" name="people_number" step="any"   value ="<?php echo $numberOfPeople ?>" /></td>
                    </tr>
                    <tr>
                        <input type= "hidden" name= "id" value= "<?php echo $data['id'] ?>" />
                        <td><input class="btn btn-success" type="submit" value="Save Changes"></td>
                        <td><a href= "bookings.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                    </tr> 
                </table>
            </form>
        </fieldset>
    </body>
</html>