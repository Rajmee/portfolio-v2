<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAchievementListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('achievement_lists', function (Blueprint $table) {
            $table->id();
            $table->string('org_img')->nullable();
            $table->string('org_title')->nullable();
            $table->string('org_date')->nullable();
            $table->longText('org_desc')->nullable();
            $table->string('org_button_text')->nullable();
            $table->string('org_button_url')->nullable();
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
        Schema::dropIfExists('achievement_lists');
    }
}
