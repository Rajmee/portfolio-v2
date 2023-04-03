<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_lists', function (Blueprint $table) {
            $table->id();
            $table->string('business_list_img')->nullable();
            $table->string('business_list_title')->nullable();
            $table->string('business_list_pos')->nullable();
            $table->string('business_list_comp')->nullable();
            $table->string('business_list_button_text')->nullable();
            $table->string('business_list_button_url')->nullable();
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
        Schema::dropIfExists('business_lists');
    }
}
