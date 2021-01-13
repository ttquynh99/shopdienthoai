<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thanhtoan extends Model
{
    const     CREATED_AT    = 'tt_taomoi';
    const     UPDATED_AT    = 'tt_capnhat';

    protected $table        = 'thanhtoan';
    protected $fillable     = ['tt_ten', 'tt_diengiai', 'tt_taomoi', 'tt_capnhat', 'tt_trangthai'];
    protected $guarded      = ['tt_ma'];

    protected $primaryKey   = 'tt_ma';

    protected $dates        = ['tt_taomoi', 'tt_capnhat'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
