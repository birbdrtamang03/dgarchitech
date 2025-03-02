<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('hero_banners', function (Blueprint $table) {
            $table->id();
            $table->string('image_path');
            $table->string('main_text');
            $table->string('sub_text');
            $table->json('social_media')->nullable(); // Store multiple icons as JSON
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('hero_banners');
    }
};
