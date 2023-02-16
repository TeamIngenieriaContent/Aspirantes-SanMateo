<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courseables', function (Blueprint $table){
            $table->unsignedBigInteger('courseable_id')->after('id');
            $table->string('courseable_type')->after('courseable_id');
            $table->foreignId('course_id')->after('courseable_type')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
};
