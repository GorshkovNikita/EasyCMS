<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('author_id');
            $table->string('name')->unique();
            $table->string('slug_name')->unique();
            $table->unsignedInteger('parent_id')->nullable();
            $table->string('type');
            $table->string('status');
            $table->string('route')->unique();
            $table->longText('content')->default('');
            $table->string('description')->default('');
            $table->string('image')->default('');
            $table->boolean('final')->default(false);
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
        Schema::drop('cms_posts');
    }
}
