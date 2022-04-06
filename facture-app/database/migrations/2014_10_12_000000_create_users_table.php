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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->bigInteger('github_id');
            $table->string('address');
            $table->string('phone');
            $table->string('avatar_url');
            $table->string('iban');
            $table->string('rib');
            $table->string('bic');
            $table->string('account_holder');
            $table->string('domiciliation');
            $table->string('siret');
            $table->string('ape');
            $table->string('mentions');
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
};
