<?php

/**
 * Auth Class
 */
class Auth extends DB
{
    
    public function __construct($host, $user, $pswd, $name)
    {
        // Log that the class was initiated
        print_r("<script>console.log('[Auth.php] Class Auth was loaded');</script>");
    }
    
    // Create user
    public function create($email, $password)
    {
        DB::query("SELECT * FROM hb_simpleLogin");
    }
    
    // Create new session
    public function login($email, $password)
    {
        DB::query("SELECT * FROM hb_simpleLogin");
    }
    
    // Destroy user session
    public function logout()
    {
        DB::query("SELECT * FROM hb_simpleLogin");
    }
    
    // Edit user info
    public function update($email)
    {
        DB::query("SELECT * FROM hb_simpleLogin");
    }
    
    // Check if user is logged in
    public function isLoggedIn()
    {
        
        if (isset($_SESSION['hb_simple_login_user'])) {
            return true;
        } else {
            return false;
        }
        
    }
    
    public function getUserId()
    {
        if ($this->isLoggedIn()) {
            return $_SESSION['hb_simple_login_user'];
        }
    }
    
}