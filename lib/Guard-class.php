<?php
require_once _AUTOLOADER_;
use \Firebase\JWT\JWT;
class Guard extends JWT
{
    private static $Permissions =  [];
    public function Authenticate(stdClass $userData)
    {
        
        $payload = array(
            "iss" => "Modul test",
            "aud" => $userData->uid,
            "exp" => strtotime("+2 hour"),
            "iat" => time(), // Time stamp
            "nbf" => time(), // Time Stamp          
            "exp" => strtotime("+1 hour"),
            "data" => $userData
        );
        //$this->userSession = JWT::encode($payload, _JWTKEY_);
        $_SESSION['global'] = JWT::encode($payload, _JWTKEY_);
        
    }

    public function __construct()
    {
        try
        {
            if(!array_key_exists('global', $_SESSION))
            {
                $_SESSION['global'] = null;
            }
        }
        catch(Exception $e)
        {
            throw new Exception("ERROR [GUARD]: " . $e->getMessage());
        }
    }

    public function Protect(array $permissions)
    {
        try
        {
            if(!isset($_SESSION['global']))
            {
                Router::Redirect('/Login');
                return false;
            }
            self::$Permissions = $permissions;
        }
        catch(Exception $err)
        {
            session_destroy();
            exit;
        }
    }

    public function decoding($Session)
    {
        try
        {
            return JWT::decode($Session, _JWTKEY_, array('HS256'));
        }
        catch(Exception $err)
        {
            unset($_SESSION['global']);
        }
    }

}
