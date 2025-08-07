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
        Schema::table('users', function (Blueprint $table) {
            $table->string('dni')->nullable()->after('email');
            $table->string('apellido_paterno')->nullable()->after('name');
            $table->string('apellido_materno')->nullable()->after('apellido_paterno');
            $table->string('institucion')->nullable()->after('dni');
            $table->string('carrera')->nullable()->after('institucion');
            $table->date('fecha_inicio_practicas')->nullable()->after('carrera');
            $table->date('fecha_fin_practicas')->nullable()->after('fecha_inicio_practicas');
            $table->string('modalidad')->default('AD HONOREM')->after('fecha_fin_practicas');
            $table->string('duracion_meses')->nullable()->after('modalidad');
            $table->foreignId('oficina_id')->nullable()->constrained('oficinas')->after('duracion_meses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['oficina_id']);
            $table->dropColumn([
                'apellido_paterno',
                'apellido_materno',
                'institucion',
                'carrera',
                'fecha_inicio_practicas',
                'fecha_fin_practicas',
                'modalidad',
                'duracion_meses',
                'oficina_id'
            ]);
        });
    }
};
