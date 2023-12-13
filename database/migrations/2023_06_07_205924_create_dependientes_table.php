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
        Schema::create('dependientes', function (Blueprint $table) {
            $table->unsignedDecimal('cid', $precision = 8, $scale = 0);
            $table->string('nombred', 35);
            $table->string('tipod', 1);
            $table->date('fecha_nacd');
            $table->timestamps();
            $table->unsignedDecimal('ci', $precision = 8, $scale = 0);
            $table->foreign('ci')->references('ci')->on('empleados');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dependientes');
    }
};
