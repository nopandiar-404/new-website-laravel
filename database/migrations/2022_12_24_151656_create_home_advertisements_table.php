<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_advertisements', function (Blueprint $table) {
            $table->id();
            $table->string("top_advertisement_photo")->default("");
            $table->string("top_advertisement_url")->nullable();
            $table->string("top_advertisement_status")->default("show");
            $table->string("middle_advertisement_photo")->default("");
            $table->string("middle_advertisement_url")->nullable();
            $table->string("middle_advertisement_status")->default("");
            $table->string("bottom_advertisement_photo")->default("");
            $table->string("bottom_advertisement_url")->nullable();
            $table->string("bottom_advertisement_status")->default("show");
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
        Schema::dropIfExists('home_advertisements');
    }
};
