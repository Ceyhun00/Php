<?php
if(isset($_POST['OK']))
{
    $data=$_POST;
    $error=array();
    $password=trim($data['password']);
    if (!preg_match('/.{10,}$/', $password)) {
        $error[]="The password must contain at least 10 characters";
    }
    elseif (!preg_match('/.*[A-Z].*[A-Z].*$/', $password) || !preg_match('/.*[a-z].*[a-z].*$/', $password) || !preg_match('/.*[0-9].*[0-9].*$/', $password) || !preg_match('/.*[%$#_*].*[%$#_*].*$/', $password)) {
        $error[]="The password must contain at least 2 Latin uppercase letters, latin lowercase letters, numbers and characters $#_* ";
    }elseif (preg_match('/.*[%$#_*]{4,}.*$/', $password) || preg_match('/.*[0-9]{4,}.*$/', $password) || preg_match('/.*[a-z]{4,}.*$/', $password) || preg_match('/.*[A-Z]{4,}.*$/', $password)) {
        $error[]="The password contains more than 3 characters $#_*, numbers, latin lowercase letters and latin uppercase letters ";
    }

    if(!empty($error)){
        echo '<div>'.array_shift($error).'</div><hr>';

    }else {
        echo '<div>Password verification was successful</div><hr>';
    }


}
?>

<div>
    <div>

        <div>
            <form  action="index.php" method="post">
                <p>Enter password</p>
                <input type="password" name="password"  placeholder="Password">
                <button type="submit"name="OK" style="width: 200px">OK</button>
            </form>
        </div>

    </div>
</div>
