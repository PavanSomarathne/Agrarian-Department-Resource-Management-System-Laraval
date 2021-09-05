<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('nic')->nullable();
            $table->string('phone')->nullable();
            $table->string('dob')->nullable();
            $table->string('address')->nullable();
            $table->string('acres')->nullable();
            $table->string('division')->nullable();
            $table->string('grama_division')->nullable();
            $table->string('land_type')->nullable();
            $table->string('farmer_type')->nullable();
            $table->string('type')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('profile_image')->default('/storage/profile_images/profile.png');
            $table->string('is_active')->default(1);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
