<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>

<form action="addOrder.php" method="get" id="nameform">
    <label for="phone">Phone Number</label>
    <input type="text" id="phone" name="phone">
</form>

<button type="submit" form="nameform" value="Submit">Add Customer</button>

<ul class="image-list-small">
    <?php
        require_once('connect.php');
        require_once('DB_Functions.php');
    
        $dbh = ConnectDB();
        $return = ListAllOrderStatus($dbh);
        
        $counter = 0;
        foreach ( $return as $number ) {
            $phonenum = $number->last4digits;
            $status = $number->orderStatus;
            
            $counter++;
            echo "<li>";
            echo "$phonenum ----- $status";
            if ($status == 'still cooking')
            {
                echo "&nbsp<button onclick=\"window.location.href='updateOrder.php?phone=$phonenum';\">Change to Done</button>";
            }
            else
            {
                
            }
            echo "</li>";
            echo "<br>";
        }
    ?>
</ul>

</html>