<html>
    <?php
        require_once('connect.php');
        require_once('DB_Functions.php');
    
        $dbh = ConnectDB();
        $Phone = $_GET['phone'];
        $return = UpdateCurrentOrder($dbh, $Phone);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    ?>
</html>