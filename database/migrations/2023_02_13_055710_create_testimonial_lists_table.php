<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonialListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonial_lists', function (Blueprint $table) {
            $table->id();
            $table->string('testimonial_list_image')->nullable();
            $table->longText('testimonial_list_comment')->nullable();
            $table->string('testimonial_list_name')->nullable();
            $table->string('testimonial_list_info')->nullable();
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
        Schema::dropIfExists('testimonial_lists');
    }
}
