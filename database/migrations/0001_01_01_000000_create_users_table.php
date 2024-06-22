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
        Schema::create('users', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('tag_name');
            $table->string('slug');
            $table->integer('size');
            $table->string('description');
        });
        Schema::create('comment', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('comment_post_id')->index();
            $table->unsignedInteger('comment_author');
            $table->timestamp('comment_date', precision: 0);
            $table->unsignedInteger('reserved_at')->nullable();
            $table->unsignedInteger('available_at');
            $table->unsignedInteger('created_at');
            $table->string('comment_content', 255);
            $table->boolean(' comment_type');
            $table->unsignedInteger('comment_parent');
            $table->softDeletes('deleted_at', precision: 0);
        });


        Schema::create('history', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger(' user_id')->index();
            $table->unsignedInteger('excecu_date');
            $table->string('from_table');
            $table->string('action');
            $table->string('data');
        });
        Schema::create('siteinfo', function (Blueprint $table) {
            $table->id();
            $table->string(' admin_email');
            $table->string('site_title');
        });
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger(' post_author_id')->index();
            $table->unsignedInteger('post_date');
            $table->unsignedInteger('post_date_modified');
            $table->string('post_title');
            $table->string('post_slug');
            $table->string('post_content');
            $table->enum('post_status', ["PUBLIC",       "DELETED",     "HIDDEN",            "SCHEDULE"]);
            $table->enum('post_comment_status', ["ACTIVE",            "DISABLE"]);
            $table->enum('post_mime_type', ["PDF", "JPEG", "PNG"]);
            $table->enum('post_type', ["ARTICLE",            "PRODUCT",            "MEDIA"]);
            $table->string('post_category_id');
            $table->string('post_excerpt');
            $table->string('post_password');
            $table->integer('comment_count');
            $table->softDeletes('deleted_at', precision: 0);
        });
        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->string('cate_name');
            $table->string('slug')->unique();
            $table->boolean('visible');
            $table->integer('size');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->enum('type', ["categoory", "subcategory"]);
            $table->string('discription');
            $table->string('thumb');
            $table->softDeletes('deleted_at', precision: 0);

            $table->rememberToken();
            $table->timestamps();
            $table->foreign('parent_id')
                ->references('id')
                ->on('category')
                ->onDelete('cascade');
        });
        Schema::create('cache', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->mediumText('value');
            $table->integer('expiration');
        });

        Schema::create('cache_locks', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->string('owner');
            $table->integer('expiration');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('tags');
        Schema::dropIfExists('comments');
        Schema::dropIfExists('history');
        Schema::dropIfExists('siteinfo');
        Schema::dropIfExists('posts');
        Schema::dropIfExists('category');
        Schema::dropIfExists('cache');
        Schema::dropIfExists('cache_locks');
    }
};
