<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThanhtoanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thanhtoan', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedTinyInteger('tt_ma')->autoIncrement()->comment('Mã phương thức thanh toán');
            $table->string('tt_ten')->comment('Tên phương thức # Tên phương thức thanh toán');
            $table->text('tt_diengiai')->comment('Thông tin # Thông tin về phương thức thanh toán');
            $table->timestamp('tt_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo phương thức thanh toán');
            $table->timestamp('tt_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật phương thức thanh toán gần nhất');
            $table->unsignedTinyInteger('tt_trangthai')->default('2')->comment('Trạng thái # Trạng thái phương thức thanh toán: 1-Đã thanh toán, 2-Chưa thanh toán');
            
            $table->unique(['tt_ten']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thanhtoan');
    }
}
