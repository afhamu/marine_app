<?php

include ('connection.php');

session_start();
//makes sure something was entered into both boxes

if (isset($_POST['login'])){
    if(empty($_POST['username']) || empty($_POST['password'])){
        echo '<label>All Field are required</label>';
    }else{

        $sql = "SELECT * FROM users WHERE username = :username and password = :password";
        $statement = $conn->prepare($sql);
        $statement->execute(
            array('username' => $_POST['username'], 'password' => $_POST['password'] )
        );

        $count = $statement->rowCount();
        
        if($count > 0){
            $_SESSION['username'] = $_POST['username'];
            if($_SESSION['username'] == 'MARINE' || $_SESSION['username'] == 'hamisu' || $_SESSION['username'] == 'abbaale')
            {
                header("Location: home.php");
            }else
            {
                header("Location: show_customers.php");
            }
            
        }else{
            echo "Invalid username or password";
        }
    }
}
