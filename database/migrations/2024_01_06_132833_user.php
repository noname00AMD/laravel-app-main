<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected $connection = 'mysql';
 
    public function up(): void
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('ip',15);
            $table->string('display_name',35);
            $table->string('user_name',35)->unique();
            $table->string('user_email',35)->unique();
            $table->string('user_url',35)->unique();
            $table->string('password',32);
            $table->string('status',20);
            $table->enum('user_comment_status',["enable","disable"]);
            $table->enum('role',["user","mod","admin"]);
            $table->text('bio');
            $table->string('thumb_url');
            $table->string('fcm_token')->nullable();
            
            $table->rememberToken();
            $table->timestamps();
            // $table->foreign('parent_id')
            // ->references('id')
            // ->on('category')
            //  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user');
    }
   
};
