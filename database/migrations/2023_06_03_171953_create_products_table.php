<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->string('slug')->unique();
            $table->string('deskripsi_singkat')->nullable();
            $table->text('deskripsi');
            $table->decimal('harga_normal', $precision = 15, $scale = 0);
            $table->decimal('harga_diskon', $precision = 15, $scale = 0)->nullable();
            $table->string('SKU');
            $table->enum('status_stok', ['Tersedia', 'Kosong']);
            $table->boolean('fitur')->default(false);
            $table->unsignedInteger('jumlah_stok')->default(10);
            $table->string('image')->nullable();
            $table->text('images')->nullable();
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
