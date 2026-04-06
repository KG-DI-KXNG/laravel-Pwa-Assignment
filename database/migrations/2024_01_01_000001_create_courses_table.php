<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Create the courses table.
     * Run: php artisan migrate
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('code', 20)->unique();      
            $table->string('name', 120);               
            $table->integer('credits');        
            $table->string('prerequisites', 200)->nullable();
            $table->longText('description')->nullable();                  
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
