<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNavigationPageTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('navigation_page', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('navigation_id')->unsigned();
            $table->foreign('navigation_id')
                ->references('id')
                ->on('navigations')
                ->onDelete('cascade');
            $table->bigInteger('page_id')->unsigned();
            $table->foreign('page_id')
                ->references('id')
                ->on('pages')
                ->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('navigation_page', function (Blueprint $table) {
            $table->dropForeign('navigation_page_navigation_id_foreign');
            $table->dropForeign('navigation_page_page_id_foreign');
            //$table->dropForeign(['navigation_id', 'page_id']);
        });
        Schema::dropIfExists('navigation_page');
    }
}
