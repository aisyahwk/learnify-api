<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('materi_contents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sub_materi_id')->constrained()->cascadeOnDelete();
            $table->longText('isi');
            $table->longText('contoh_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materi_contents');
    }
};
