<?php
/*
*
* @param 
*
*/

$keyg = "NOT_DEFINED";
$defaultCollection = "NOT_DEFINED";

class FaunaPhp {
    
    // Function to connect to the FaunaDB server
    public function connectFauna($key){
        $GLOBALS['keyg'] = $key;
        return shell_exec(getcwd().'/src/bin/node '.getcwd().'/src/lib/checkConnection.js '.$key);
    }
    
    // Funtion to create a new database on the FaunaDB Server
    public function createDatabase($name){
        return shell_exec(getcwd().'/src/bin/node '.getcwd().'/src/lib/createDatabase.js '.$GLOBALS['keyg']. ' '.$name);
         
    }
    // Funtion to create a new collection on the FaunaDB Server
    public function createCollection($name){
        return shell_exec(getcwd().'/src/bin/node '.getcwd().'/src/lib/createCollection.js '.$GLOBALS['keyg']. ' '.$name);
         
    }

    //Funtion to set a default collection
    
    public function setDefaultCollection($name){
        $GLOBALS['defaultCollection'] = $name;
        return $GLOBALS['defaultCollection'];
    }

    // Funtion to use a default collection
    
    public function useDefaultCollection(){
        return $GLOBALS['defaultCollection'];
    }
}
