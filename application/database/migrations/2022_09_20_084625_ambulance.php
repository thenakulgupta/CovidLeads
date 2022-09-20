<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ambulance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Ambulance', function (Blueprint $table) {
            $table->id();
            $table->text('organisation_name')->nullable();
            $table->text('phone')->nullable();
            $table->text('state')->nullable();
            $table->text('current_status')->nullable();
            $table->text('important_info')->nullable();
            $table->integer('isVerified')->default(1);
            $table->timestamp('verifiedAt')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Ambulance');
    }
}