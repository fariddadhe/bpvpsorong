<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSlugToKejuruanTable extends Migration
{
    public function up()
    {
        Schema::table('kejuruan', function (Blueprint $table) {
            $table->string('slug')->unique()->nullable(); // Menambahkan kolom slug
        });
    }

    public function down()
    {
        Schema::table('kejuruan', function (Blueprint $table) {
            $table->dropColumn('slug'); // Menghapus kolom slug jika rollback
        });
    }
}
