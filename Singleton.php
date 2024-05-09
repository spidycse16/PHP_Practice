<?php
class Logger{
    private static $instance;
    public $logs;

    private function __construct(){
        $this->logs=[];
    }

    public static function getInstance(){
        if(self::$instance==null)
        {
            self::$instance=new Logger();
        }
        return self::$instance;
    }

    public function log($message){
        $this->logs[]=$message;
    }

    public function getLogs(){
        foreach($this->logs as $message)
        {
            echo $message;
        }
    }
}

$obj=Logger::getInstance();
$obj->log("Hello");
$obj->log("HI");
$obj->getLogs();
?>