<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('name');
            $table->string('meta_title',500)->nullable();
            $table->string('meta_description',500)->nullable();
            $table->string('meta_keywords',500)->nullable();
            $table->longText('body')->nullable();
            $table->integer('navigation_id')->default(1);
            $table->integer('position')->default(1);
            $table->tinyInteger('visible')->default(0);


            $table->softDeletes();
            $table->timestamps();

            $table->index('position');
            $table->index('slug');
           // $table->index('navigation_id');

            //$table->foreign('parent')->references('id')->on('pages');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
