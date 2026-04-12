<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('materi_contents', function (Blueprint $table) {
        $table->foreignId('sub_materi_id')->constrained('sub_materis')->cascadeOnDelete();
        $table->longText('isi');
        $table->longText('contoh_code');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('materi_contents', function (Blueprint $table) {
            //
        });
    }
};
