<?php
    function ListAllOrderStatus($dbh)
    {
        try {
            $query = "SELECT last4digits, orderStatus FROM customer ORDER BY orderStatus";
            $stmt = $dbh->prepare($query);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_OBJ);
            $stmt = null;
            return $data;
        }
        catch(PDOException $e)
        {
            die ('PDO error in ListAllOrderStatus()": ' . $e->getMessage() );
        }
    }
    function AddNewOrder($dbh, $phone)
    {
        try {
            $query = "INSERT into customer(last4digits, orderStatus) VALUES ($phone, 'still cooking')";
            $stmt = $dbh->prepare($query);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_OBJ);
            $stmt = null;
            return $data;
        }
        catch(PDOException $e)
        {
            die ('PDO error in AddNewOrder()": ' . $e->getMessage() );
        }
    }
    function UpdateCurrentOrder($dbh, $phone)
    {
        try {
            $query = "UPDATE customer set orderStatus = 'ready' where last4digits = $phone";
            $stmt = $dbh->prepare($query);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_OBJ);
            $stmt = null;
            return $data;
        }
        catch(PDOException $e)
        {
            die ('PDO error in UpdateCurrentOrder()": ' . $e->getMessage() );
        }
    }
    function DeleteOldOrder($dbh, $phone)
    {
        try {
            $query = "DELETE FROM customer where last4digits = $phone";
            $stmt = $dbh->prepare($query);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_OBJ);
            $stmt = null;
            return $data;
        }
        catch(PDOException $e)
        {
            die ('PDO error in DeleteOldOrder()": ' . $e->getMessage() );
        }
    }
?>