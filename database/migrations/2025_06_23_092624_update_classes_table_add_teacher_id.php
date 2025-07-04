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
        Schema::table('classes', function (Blueprint $table) {
            // Menghapus kolom homeroom_teacher
            $table->dropColumn('homeroom_teacher');

            // Menambahkan kolom teacher_id dengan foreign key
            $table->unsignedBigInteger('teacher_id'); 
            $table->foreign('teacher_id') // Menetapkan relasi foreign key
                ->references('id')->on('teachers') // Mengacu ke kolom id pada tabel teachers
                ->onDelete('cascade'); // Menghapus data kelas jika data guru dihapus
        });
    }

    public function down()
    {
        Schema::table('classes', function (Blueprint $table) {
            // Menghapus kolom teacher_id jika rollback
            $table->dropForeign(['teacher_id']);
            $table->dropColumn('teacher_id');

            // Menambahkan kembali kolom homeroom_teacher
            $table->string('homeroom_teacher');
        });
    }

};
