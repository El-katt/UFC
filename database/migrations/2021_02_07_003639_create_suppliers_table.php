<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('name_supplier');
            $table->string('Addr1_supplier');
            $table->string('Addr2_supplier');
            $table->string('cp_supplier');
            $table->string('city_supplier');
            $table->string('tele_supplier')->unique();
            $table->string('fax_supplier')->unique();
            $table->string('mail_supplier')->unique();
            $table->string('interlocutor');
            $table->string('tele_interlocutor');
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
        Schema::dropIfExists('suppliers');
    }
}
