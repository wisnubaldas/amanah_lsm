<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('galery_fotos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('group_media_id');
            $table->string('name');
            $table->string('link_img');
            $table->string('link_tumb');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galery_fotos');
    }
};
