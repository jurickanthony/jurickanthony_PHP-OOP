<?php
 
 session_start();

 class userData{
 
    public $userData;

    function __construct($userData){

         $this->userData = $userData;

    }

    function addInput(){

        if(!isset($_SESSION['option'])){
            $_SESSION['option'] = [];
        }

        array_push($_SESSION['option'],$this->userData);
        
        echo '<select name="dropdown">';
                
        foreach ($_SESSION['option'] as $value) {
            echo '<option value="'.$value.'">"'.$value.'"</option>' ;
        }
        
        echo '</select>';
              
    }

 }



if(isset($_POST['submit'])){
    $userData = $_POST['userData'];
    $input = new userData($userData);
    $input->addInput();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
        <h4>Enter Anything :</h4>
        <input type="text" name="userData">
        <br>
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>