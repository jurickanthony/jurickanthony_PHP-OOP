<?php
class Email
{
    public $var1;
    public $var2;

    public function makeForm()
    {
        echo '<form action="number3.php" method="post">
             E-mail: <input type="text" name="email" required><br>
             <input type="submit">
             </form>';
    }

    public function __construct()
    {
        $this->var2 = isset($_POST['email']) ? $_POST['email'] : null;
    }

    public function action()
    {

        if (filter_var($this->var2, FILTER_VALIDATE_EMAIL)) {
            echo ("$this->var2 is a valid email address");
        } else {
            echo ("$$this->var2 is not a valid email address");
        }
    }
}

$cl = new Email();
$cl->makeForm();
$cl->action();
