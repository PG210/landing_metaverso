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
        Schema::create('regisusu', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100);
            $table->string('empresa',100);
            $table->string('cargo',100);
            $table->string('correo',200);
            $table->string('telefono',100);
            $table->string('genero',100);
            $table->boolean('confirmed')->default(0);
            $table->string('confirmation_code')->nullable();
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
        Schema::dropIfExists('regisusu');
    }
};
