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
        Schema::create('sidebar_advertisements', function (Blueprint $table) {
            $table->id();
            $table->string("top_advertisement_photo");
            $table->string("top_advertisement_url")->nullable();
            $table->string("top_advertisement_status");
            $table->string("bottom_advertisement_photo");
            $table->string("bottom_advertisement_url")->nullable();
            $table->string("bottom_advertisement_status");
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
        Schema::dropIfExists('sidebar_advertisements');
    }
};
