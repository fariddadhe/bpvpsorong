<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('kejuruan', function (Blueprint $table) {
            $table->integer('jumlah_lulusan')->default(0);
        });
    }

    public function down()
    {
        Schema::table('kejuruan', function (Blueprint $table) {
            $table->dropColumn('jumlah_lulusan');
        });
    }
};
