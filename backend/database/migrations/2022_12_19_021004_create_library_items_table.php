<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('library_items', function (Blueprint $table) {
            $table->id();
            $table->string('docTitle');
            $table->string('docImage');
            $table->string('docAuthor');
            $table->longtext('docDescription');
            //$table->string('docType');
            //$table->string('docCategory');
            $table->string('docFile');
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
        Schema::dropIfExists('library_items');
    }
};
