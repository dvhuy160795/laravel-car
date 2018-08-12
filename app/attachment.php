<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attachment extends Model
{
    protected $fileName = null;
    protected $fileSize = null;
    protected $fileDir = null;
    protected $fileHashName = null;
    protected $fileExtention = null;
    protected $fileIsShowImg = null;
    protected $fileOnChange = null;
    protected $fileIsMultil = null;
    protected $fileMaxFile = null;
    protected $fileType = null;
    protected $fileFilterCode = null;
    
    public function setName($name) {
        $this->fileName = $name;
    }
    
    public function setFileSize($fileSize) {
        $this->fileSize = $fileSize;
    }
    public function setFileDir($fileDir) {
        $this->fileDir = $fileDir;
    }
    public function setHashName($hashName) {
        $this->hashName = $hashName;
    }
    public function setFileExtention($fileExtention) {
        $this->fileExtention = $fileExtention;
    }
    public function setFileIsShowImg($fileIsShowImg) {
        $this->fileIsShowImg = $fileIsShowImg;
    }
    public function setFileOnChange($fileOnChange) {
        $this->fileOnChange = $fileOnChange;
    }
    public function setFileIsMultil($fileIsMultil) {
        $this->fileIsMultil = $fileIsMultil;
    }
    public function setFileMaxFile($fileMaxFile) {
        $this->fileMaxFile = $fileMaxFile;
    }
    public function setFileType($fileType) {
        $this->fileType = $fileType;
    }
    public function setFileFilterCode($fileFilterCode) {
        $this->fileFilterCode = $fileFilterCode;
    }
    
    public function upload($param) {
        
    }
}
