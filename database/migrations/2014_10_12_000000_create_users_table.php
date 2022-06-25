<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('uniStudentId')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('department');
            $table->string('university_batch');
            $table->year('graduation_year');
            $table->string('designation')->nullable();
            $table->string('company_name')->nullable();
            $table->string('bio')->nullable();
            $table->binary('avatar')->nullable();
            $table->string('mobile')->nullable();
            $table->string('fb_link')->nullable();
            $table->string('tw_link')->nullable();
            $table->string('li_link')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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
        
        Schema::table("users", function ($table) {
            $table->dropSoftDeletes();
        });
    }
}
