<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('skills_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->boolean('active')->default(true);
            $table->string('name',50);
            $table->text('desc');
            $table->string('img');
            $table->tinyInteger('question_no');
            $table->tinyInteger('difficulty');
            $table->smallInteger('duration_minutes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exams');
    }
};
