<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('papers', function (Blueprint $table) {
            $table->id();
            $table->string('PID')->unique();
            $table->string('CID')->unique();
            $table->string('UrlSlug')->unique();
            $table->string('ResearchPaperName');
            $table->string('url')->nullable();
            $table->string('UploadDocument')->nullable();
            $table->string('type')->default('url');
            $table->string('Author');
            $table->text('Citation');
            $table->text('Attribution');
            $table->longText('Abstract');
            $table->string('ThumbNail');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('papers');
    }
};
