<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->id()->from(12345);
            $table->string('slug')->unique();
            $table->string('name');
            $table->boolean('is_approved')->default(false);
        });
    }

    public function down()
    {
        Schema::dropIfExists('skills');
    }
};
