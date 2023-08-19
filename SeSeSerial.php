<?php
error_reporting(0);

class User
{
    public $username;
    public $password;
    public $isAdmin = false;
    public $class;

    public function __construct()
    {
        $this->class = 'home';
    }

    public function __destruct()
    {
        echo $this->class;
    }

    public function __toString()
    {
        return __CLASS__;
    }
}

class Debug
{
    public $var1;
    public $var2;

    public function __wakeup()
    {
        $this->var1 = 'Hnu';
        $this->var2 = 'Sec';
    }

    public function checkFunc()
    {
        ($this->var1)();
    }

    public function __toString()
    {
        return $this->var2->checkFunc();
    }
}

class CheckPassword
{
    public $var1;

    public function checkUserPassword()
    {
        // Use your own password file instead.
        include "Se23dfddfes35s.php";
        echo $FLAG;
    }

    public function __invoke()
    {
        $this->checkUserPassword();
    }

    public function __toString()
    {
        return __CLASS__;
    }
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == 'admin' && $password == '-d2@3e*df0e_fk3') {
        echo '<script>alert("猜对了，可是这又有什么用呢？")</script>';
        echo '<meta http-equiv="refresh" content="0;url=index.html">';
    } else {
        echo '<script>alert("密码错误，继续猜!")</script>';
        echo '<meta http-equiv="refresh" content="0;url=index.html">';
    }
}

if (isset($_POST['B4CK_D00R']) && $_GET['K3Y_A'] == '-d2@3e*df0e_fk3') {
    $a = $_POST['B4CK_D00R'];
    unserialize($a);
}