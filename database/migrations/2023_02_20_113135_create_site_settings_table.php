<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_settings', function (Blueprint $table) {
            
            $table->id();
            $table->string('site_title')->nullable();
            $table->string('site_favicon')->nullable();
            $table->string('meta_name')->nullable();
            $table->string('meta_desc')->nullable();
            $table->string('meta_key')->nullable();
            $table->string('meta_author')->nullable();

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
        Schema::dropIfExists('site_settings');
    }
}
