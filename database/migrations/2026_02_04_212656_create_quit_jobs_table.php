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
        Schema::create('quit_jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null'); // user who wants to quit
            $table->string('title');
            $table->text('description'); //why employee needs help quitting
            $table->text('job_description'); //what the responsibility of the job is
            $table->text('salary');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quit_jobs');
    }
};
