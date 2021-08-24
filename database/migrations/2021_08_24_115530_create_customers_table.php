<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('company');
            $table->string('contact');
            $table->string('email');
            $table->string('address');
            $table->string('location');
            $table->char('is_referred', 2)->nullable();
            $table->string('referral_name')->nullable();
            $table->string('referral_contact')->nullable();
            $table->string('referral_details')->nullable();
            $table->string('referral_address')->nullable();
            $table->text('remarks')->nullable();
            $table->string('current_status');
            $table->softDeletes();
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
        Schema::dropIfExists('customers');
    }
}
