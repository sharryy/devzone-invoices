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
            $table->text('remarks')->nullable();
            $table->string('current_status');
            $table->date('starting_date');
            $table->date('ending_date')->nullable();
            $table->text('status_reason')->nullable();
            $table->char('is_referred', 2)->nullable();
            $table->string('referral_name')->nullable();
            $table->string('referral_contact')->nullable();
            $table->string('referral_details')->nullable();
            $table->string('referral_address')->nullable();
            $table->enum('commission_type', ['one-time', 'recurring'])->nullable();
            $table->decimal('rec_otc_percentage')->nullable();
            $table->decimal('rec_mrc_percentage')->nullable();
            $table->string('rec_mrc_duration')->nullable();
            $table->char('is_every_month')->nullable();
            $table->decimal('one_time_commission_percentage')->nullable();
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
