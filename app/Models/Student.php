<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = "students";
    protected $fillable = [
        "name",
        "age",
        "image",
        "address",
        "telephone"
    ];


    public function getImage(): string
    {
        if($this->image){
            return asset("upload/".$this->image);
        }
        return asset("upload/default.png");
    }
}
