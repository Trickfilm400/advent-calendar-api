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