<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstName', 20);
            $table->string('lastName', 20);
            $table->string('phoneNo', 30);
            $table->text('comment');
            $table->string('department', 20);
            $table->string('status', 10)->nullable()->default('pending');
            $table->text('notes')->nullable();
            $table->bigInteger('last_update_by');
            $table->timestamps();
        });
        Schema::table('comments', function (Blueprint $table) {
            //

            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment');
    }
}
