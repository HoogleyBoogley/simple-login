<?php

/**
 * DB Class
 */
class DB
{
    
    /**
     * Initiate Connection
     */
    public function __construct($host, $user, $pswd, $name)
    {
        // Log that the class was initiated
        print_r("<script>console.log('[DB.php] Class DB was loaded');</script>");
        
        // Check to see if table exists
        $val = $this->query('SELECT * from `hb_simpleLogin` LIMIT 1');

        if ($val) {
            // Table exists, no need to do anything! :)
        } else {
            // Table does not exist, create it!
            $sql = "CREATE TABLE IF NOT EXISTS `hb_simpleLogin` (
                    	`id` int(11) NOT NULL auto_increment,
                    	`email` varchar(255),
                    	`password` text,
                    	`token` varchar(255),
                    	`created_at` varchar(255),
                    	`update_at` varchar(255),
                    PRIMARY KEY( `id` )
                    );";
            
            $this->query($sql);
            
            print_r("<script>console.log('[DB.php] Table hb_simpleLogin was created');</script>");
        }
    }
    
    public function conn() {
		return new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	}
	
	public function query($query)
	{
		$db = $this->conn();
		$result = $db->query($query);
		
		if ($result) {
		    return true;
		} else {
		    return false;
		}
	}
	
	

}