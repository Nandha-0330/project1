<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('facebook_requests', function (Blueprint $table) {
        $table->id();
        $table->string('transaction_id');
        $table->string('package');
        $table->string('username');
        $table->string('url');
        $table->string('user_type');
        $table->string('request_for')->nullable();
        $table->string('status')->nullable();
        $table->string('email');
        $table->timestamps();

    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facebook_requests');
    }
};
