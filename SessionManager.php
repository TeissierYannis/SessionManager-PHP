<?php

############################################
#                                          #
# Created by TeissierYannis                #
# Github: http://github.com/teissierYannis/#
#                                          #
############################################

namespace TeissierYannis\Utils;

class SessionManager {


    public function __construct(){
    }

    /**
     * Define the user ID
     * @param int $id
     */
    public static function setUserID(int $id){
        $_SESSION['idUtilisateur'] = $id;
        return new static;
    }

    /**
     * Define the user type
     * @param int $type
     */
    public static function setUserType(int $type){
        $_SESSION['typeUtilisateur'] = $type;
        return new static;
    }

    /**
     * Return true if the ID of the User is define
     * @return bool
     */
    public static function isLogged(): bool{
        return isset($_SESSION['idUtilisateur']) ? true : false;
    }

    /**
     * Delete the current session
     */
    public static function removeUser(){
        session_destroy();
        unset($_SESSION);
    }

    /**
     * Return user ID if is define else -1
     * @return int
     */
    public static function getUserID(): int{
        return isset($_SESSION) && isset($_SESSION['idUtilisateur']) ? $_SESSION['idUtilisateur'] : -1;
    }

    /**
     * Return user type if is define else -1
     * @return int
     */
    public static function getUserType(): int{
        return isset($_SESSION) && isset($_SESSION['typeUtilisateur']) ? $_SESSION['typeUtilisateur'] : -1;
    }


}