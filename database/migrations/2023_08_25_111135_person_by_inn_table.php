<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_by_inn_table', function (Blueprint $table) {
            $table->integer('pid')->primary()->index();

            $table->text('name');
            $table->integer('inn');
            $table->integer('ogrn');
            $table->text('manager_post');
            $table->text('manager_name');
            $table->string('email');
            $table->integer('phone');
            $table->text('full address');

        });
        Schema::create('type', function (Blueprint $table) {
            $table->integer('tid')->primary();
            $table->integer('pid')->index();
            $table->integer('type');

            $table->foreign('pid')->references('pid')->on('data_by_inn_table')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('person_by_inn_table');


    }
};
