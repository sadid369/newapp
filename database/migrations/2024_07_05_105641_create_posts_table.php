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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->boolean('status');
            $table->timestamps();


            //more datatype 
        //    $table->date('date');
        //    $table->dateTime('date_time');
        //    $table->time('time');

        //     $table->decimal('amount')->nullable()->default(0);
        //     $table->float('float');
        //     $table->double('double');
        //     $table->integer('integer');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
