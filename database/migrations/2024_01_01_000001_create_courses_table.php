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
            $table->string('code', 20)->unique();          // e.g. COMP1001
            $table->string('name', 120);                   // Course name
            $table->unsignedTinyInteger('credits');        // Credit hours
            $table->string('prerequisites', 200)
                  ->default('None');                       // Pre-req course codes
            $table->text('description');                   // Course description
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
