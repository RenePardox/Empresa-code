<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->unsignedDecimal('ci', $precision = 8, $scale = 0);
            $table->string('nombre', 35);
            $table->string('direccion', 35);
            $table->date('fecha_nac');
            $table->string('procedencia', 35);
            $table->timestamps();
            $table->primary('ci');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
