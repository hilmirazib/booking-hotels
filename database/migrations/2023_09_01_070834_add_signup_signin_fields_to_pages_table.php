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
        Schema::table('pages', function (Blueprint $table) {
            $table->text('signup_heading')->after('payment_heading');
            $table->integer('signup_status')->after('signup_heading');
            $table->text('signin_heading')->after('signup_status');
            $table->integer('signin_status')->after('signin_heading');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn(['signup_heading', 'signup_status', 'signin_heading', 'signin_status']);
        });
    }
};
