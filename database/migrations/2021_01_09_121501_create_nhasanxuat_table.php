<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhasanxuatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhasanxuat', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->smallIncrements('nsx_ma')->comment('Mã nhà sản xuất');
            $table->string('nsx_ten', 100)->comment('Tên nhà sản xuất');
            $table->string('nsx_diachi', 250)->comment('Địa chỉ # Địa chỉ');
            $table->string('nsx_dienthoai', 11)->comment('Điện thoại # Điện thoại');
            $table->timestamp('nsx_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo nhà sản xuất');
            $table->timestamp('nsx_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật nhà sản xuất gần nhất');
            
            $table->unique(['nsx_ten']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhasanxuat');
    }
}
