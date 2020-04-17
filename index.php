<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<h1>China Cafe</h1>
<hr>
<h2>Look for the last 4 digits of your phone number</h2>
<h2>&nbsp&nbsp to check your order status.</h2>
<h2>Once your order is ready, </h2>
<h2>&nbsp&nbsp you may come inside.</h2>
<br>
<h3>Order Statuses</h3>
<h3>Last 4 digits of Phone Number --- Order Status</h3>

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

            echo "</li>";
        }
    ?>
</ul>
</html>