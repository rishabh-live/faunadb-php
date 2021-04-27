<?php

class FaunaPhp {
    public function connectDB($key){
        $output = shell_exec(getcwd().'/src/bin/node '.getcwd().'/src/lib/checkConnection.js '.$key);
        return $output;
    }
}
?>