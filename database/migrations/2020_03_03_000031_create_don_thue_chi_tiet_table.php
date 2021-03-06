<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonThueChiTietTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('donthue_chitiet', function (Blueprint $table) {
			$table->id();
			$table->foreignId('donthue_id')->constrained()->on('donthue');
			$table->foreignId('phuongtiensx_id')->constrained()->on('phuongtiensx');
			$table->date('ngaysudung');
			$table->date('ngaytra');
			$table->float('dongia');
			$table->integer('soluong');
			$table->float('giamgia')->nullable();
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
		});
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('don_thue__chi_tiets');
	}
}