
<?php
class LoginValidation
{
    public function makeForm()
    {
        echo '<form action="number4.php" method="post">
             Name: <input type="text" name="username" required><br>
             Address <input type="text" name="address" required><br>
             Age: <input type="number" name="age" required> <br>
             Mobile Number: <input type="text" name="mobileno" required> <br>
             
             <input type="submit">
             </form>';
    }

    public function __construct()
    {
        $this->var1 = isset($_POST['username']) ? $_POST['username'] : null;
        $this->var2 = isset($_POST['address']) ? $_POST['address'] : null;
        $this->var3 = isset($_POST['mobileno']) ? $_POST['mobileno'] : null;
        $this->var4 = isset($_POST['age']) ? $_POST['age'] : null;
    }

    public function action()
    {
        if (!preg_match("/^[a-zA-z]*$/", $this->var1)) {
            $ErrMsg = "Only alphabets and whitespace are allowed.<br>";
            echo $ErrMsg;
        } else {
            echo $this->var1 . " name is valid<br>";
        }


        if(!preg_match('/^(?:\\d+ [a-zA-Z ]+, ){2}[a-zA-Z ]+$/', $this->var2)){
            echo "not valid address<br>";
        }else{
            echo "Address is valid<br>";
        }
        

        if ($this->var4 >= 18) {
            echo "Age is valid<br>";
        } else {
            echo "Age is not valid it should be 18+<br>";
        }

        $length = strlen($this->var3);

        if ($length < 11 || $length > 11    ) {
            $ErrMsg = "Mobile must have 11 digits";
            echo $ErrMsg;
        } else {
            echo "Phone number is valid";
        }
        
    }
}

$cl = new LoginValidation();
$cl->makeForm();
$cl->action();
