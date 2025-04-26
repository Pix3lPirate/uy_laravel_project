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
        Schema::create('expence_catagories', function (Blueprint $table) {
            $table->bigInteger('expcate_id');
            $table->string('expcate_name',50)->unique();
            $table->string('expcate_remarks',200)->nullable();
            $table->string('expcate_creator')->nullable();
            $table->string('expcate_editor')->nullable();
            $table->string('expcate_slug',30)->nullable();
            $table->integer('expcate_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expence_catagories');
    }
};
