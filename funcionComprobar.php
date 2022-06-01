<?php
class Password {
    const SALT = 'Pr0y3ct0Mario';
    public static function hash($password) {
        return hash('sha512', self::SALT . $password);
    }
    public static function verify($password, $hash){
        return ($hash == self::hash($password));
    }
}

?>