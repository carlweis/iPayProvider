<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscribersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscribers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email', 100)->unique();
            $table->string('mailchimp_id', 100)->unique();
            $table->string('euid', 100)->unique();
            $table->string('email_type', 10);
            $table->string('ip', 40);
            $table->timestamp('timestamp_opt');
            $table->integer('member_rating')->unsigned();
            $table->integer('web_id')->unsigned();
            $table->integer('leid')->unsigned();
            $table->string('list_id', 50);
            $table->string('list_name');
            $table->string('fname', 100);
            $table->string('lname', 100);
            $table->integer('zip')->unsigned();
            $table->string('status', 50);
            $table->timestamp('timestamp');
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
        Schema::drop('subscribers');
    }
}
