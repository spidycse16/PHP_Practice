<?php
class FIle{
    private $filesize;
    public function __construct($filesize){
        $this->filesize=$filesize;
    }

    public static function calculte($files)
    {
        $ans=0;
        foreach($files as $file)
        {
            $ans=$ans+strlen($file);
        }
        echo $ans;
    }

}

$files=["file1","acsdfsfss","helloworld"];
File::calculte($files);
?>