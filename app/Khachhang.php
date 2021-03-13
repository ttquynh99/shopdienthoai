<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Khachhang extends Model
{
    public    $timestamps   = false;

    protected $table        = 'khachhang';
    protected $fillable     = ['kh_taikhoan', 'kh_matkhau', 'kh_hoten', 'kh_gioiTinh', 'kh_email', 'kh_ngaySinh', 'kh_diaChi', 'kh_dienThoai'];
    protected $guarded      = ['kh_ma'];

    protected $primaryKey   = 'kh_ma';

    protected $dates        = ['kh_ngaySinh'];
    protected $dateFormat   = 'Y-m-d';
}
