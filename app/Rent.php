<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    //設定Model到對應的資料表
    protected $table = 'rents';

    protected $fillable = [
        'site_id',
        'user_class',
        'user_name',
        'user_phone',
        'req_date',
        'req_starttime',
        'req_endtime',
        'req_rentreason',
    ];
}
