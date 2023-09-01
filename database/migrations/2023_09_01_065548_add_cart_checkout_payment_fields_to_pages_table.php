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
            $table->text('cart_heading')->after('blog_status');
            $table->integer('cart_status')->after('cart_heading');
            $table->text('checkout_heading')->after('cart_status');
            $table->integer('checkout_status')->after('checkout_heading');
            $table->text('payment_heading')->after('checkout_status');
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
            $table->dropColumn(['cart_heading', 'cart_status', 'checkout_heading', 'checkout_status', 'payment_heading']);
        });
    }
};
