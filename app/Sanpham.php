<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Sanpham extends Model
{
    const     CREATED_AT    = 'sp_taoMoi';
    const     UPDATED_AT    = 'sp_capNhat';

    protected $table        = 'cusc_sanpham';
    protected $fillable     = ['sp_ma','sp_ten', 'sp_giaGoc', 'sp_giaBan', 'sp_hinh','sp_mau', 'sp_thongTin', 'sp_danhGia', 'sp_taoMoi', 'sp_capNhat', 'sp_trangThai', 'nsx_ma'];
    protected $guarded      = ['id'];

    protected $primaryKey   = 'id';

    protected $dates        = ['sp_taoMoi', 'sp_capNhat'];
    protected $dateFormat   = 'Y-m-d H:i:s';

    public function nhasanxuat()
    {
        return $this->belongsTo('App\Nhasanxuat', 'nsx_ma', 'nsx_ma');
    }
}
