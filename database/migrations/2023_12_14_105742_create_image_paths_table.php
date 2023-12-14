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
        Schema::create('image_paths', function (Blueprint $table) {
                                $table->increments('id');
                                $table->integer('company_id');
                                $table->string('image_path1');
                                $table->string('image_path2');
                                $table->string('image_path3');
                                $table->string('image_path4');
                                $table->string('image_path5');
                                $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('image_paths');
    }
};
