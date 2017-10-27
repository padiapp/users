<?php
function getauthenticationdata($login){
    $obj = new User($login);
    $res = $obj->get();
    return array(
        'salt'=>$res->salt,
        'password'=>$res->password
    );
}
