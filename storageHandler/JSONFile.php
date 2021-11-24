<?php

class JSONFile {
    /**
     * @var false|resource
     */
    private $file;
    private mixed $json;

    public function __construct(string $fileName, string $filePath) {
        $this->file = file_get_contents($filePath . $fileName);
        if ($this->file) $this->json = json_decode($this->file, true);
        //file does not exist
        if (!$this->file) {
            //create empty file structure
            $fileData = array("data"=>array());
            //save file
            file_put_contents($filePath . $fileName, json_encode($fileData));
        }
    }

    /**
     * @return mixed
     */
    public function getJson(): mixed {
        if (isset($this->json))
            return $this->json;
        return null;
    }
}