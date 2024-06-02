<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected $connection = 'mysql';
 
    public function up(): void
    {
        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->string('cate_name');
            $table->string('slug')->unique();
            $table->boolean('visible');
            $table->integer('size');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->enum('type',["categoory","subcategory"]);
            $table->text('discription');
            $table->string('thumb');

            $table->rememberToken();
            $table->timestamps();
            $table->foreign('parent_id')
            ->references('id')
            ->on('category')
             ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('category');
    }
   
};
