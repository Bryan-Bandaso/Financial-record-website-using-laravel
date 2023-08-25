<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kas', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->foreignId('buku_id')->constrained('id')->on('bukus')->onDelete('cascade');
            $table->date('tanggal');
            $table->string('transaksi');
            $table->integer('pemasukan')->nullable();
            $table->integer('pengeluaran')->nullable();
=======
            $table->date('tanggal');
            $table->string('transaksi');
            $table->integer('pemasukan');
            $table->integer('pengeluaran');
>>>>>>> d26556bb9c0e02a6aa372ac2b44b92d28baf54db
            $table->timestamp('updated_at');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kas');
    }
}
