<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAchievementSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('achievement_settings', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('section_title')->nullable();
            $table->string('section_list_title')->nullable();
            $table->string('ach_col_1_icon')->nullable();
            $table->string('ach_col_1_count')->nullable();
            $table->string('ach_col_1_title')->nullable();
            $table->longText('ach_col_1_desc')->nullable();
            $table->string('ach_col_2_icon')->nullable();
            $table->string('ach_col_2_count')->nullable();
            $table->string('ach_col_2_title')->nullable();
            $table->longText('ach_col_2_desc')->nullable();
            $table->string('ach_col_3_icon')->nullable();
            $table->string('ach_col_3_count')->nullable();
            $table->string('ach_col_3_title')->nullable();
            $table->longText('ach_col_3_desc')->nullable();
            $table->string('ach_col_4_icon')->nullable();
            $table->string('ach_col_4_count')->nullable();
            $table->string('ach_col_4_title')->nullable();
            $table->longText('ach_col_4_desc')->nullable();

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
        Schema::dropIfExists('achievement_settings');
    }
}
