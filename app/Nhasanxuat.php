<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Nhasanxuat extends Model
{
    const     CREATED_AT    = 'nsx_taomoi';
    const     UPDATED_AT    = 'nsx_capnhat';

    protected $table        = 'nhasanxuat';
    protected $fillable     = ['nsx_ten', 'nsx_diachi','nsx_dienthoai','nsx_taomoi', 'nsx_capnhat'];
    protected $guarded      = ['nsx_ma'];

    protected $primaryKey   = 'nsx_ma';

    protected $dates        = ['nsx_taomoi', 'nsx_capnhat'];
    protected $dateFormat   = 'Y-m-d H:i:s';

    public function sanPhams()
    {
        return $this->hasMany('App\Sanpham', 'nsx_ma', 'nsx_ma');
    }
}
