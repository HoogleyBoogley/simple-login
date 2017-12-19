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
    
    // Set errors
    public function setError($message)
    {
        
    }
    
    // Show
    public function showError()
    {
        if (isset($_SESSION['hb_simple_login_error'])) {
            return true;
            print_r($_SESSION['hb_simple_login_error']);
            $_SESSION['hb_simple_login_error'] = null;
        } else {
            return false;
        }
    }
    
    // Create user
    public function create($email, $password)
    {
        $email = DB::conn()->real_escape_string($email);
        $password = DB::conn()->real_escape_string($password);
        $password = password_hash($password, PASSWORD_DEFAULT);
        $time = date("Y-m-d H:i:s");
        
        $q = DB::query("SELECT * FROM hb_simpleLogin WHERE email='". $email ."'");
        $num = DB::conn()->num_rows($q);
        
        if ($num == 0) {
            
            DB::query("INSERT INTO hb_simpleLogin (
                `email`, 
                `password`, 
                `created_at`, 
                `update_at`) VALUES (
                    '". $email ."', 
                    '". $password ."',
                    '". $time ."',
                    '". $time ."'
                )"
            );
            
            return true;
        } else {
            return false;
        }
        
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