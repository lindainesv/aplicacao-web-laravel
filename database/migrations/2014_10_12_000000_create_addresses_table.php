<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->string('zipcode');
            $table->string('street');
            $table->string('neighborhood');
            $table->string('city');
            $table->char('state', 2);
            $table->timestamps();

        });
    }


    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
