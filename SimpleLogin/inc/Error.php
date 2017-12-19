<?php

/**
 * Error Class
 */
class Error extends DB
{
    
    public $conn;
    
    public function __construct($host, $user, $pswd, $name)
    {
        // Log that the class was initiated
        print_r("<script>console.log('[Error.php] Class Error was loaded');</script>");
    }
    
    public function log($message, $prefix)
    {
        
        print_r("<script>console.log('[". $prefix ."] ". $message ."');</script>");
        
    }
}