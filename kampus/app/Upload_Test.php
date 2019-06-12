<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload_Test extends Model
{
    //
    protected $table = "upload_test";
 
    protected $fillable = ['file','keterangan'];
}
