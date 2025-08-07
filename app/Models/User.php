<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'dni',
        'apellido_paterno',
        'apellido_materno',
        'institucion',
        'carrera',
        'fecha_inicio_practicas',
        'fecha_fin_practicas',
        'modalidad',
        'duracion_meses',
        'oficina_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'fecha_inicio_practicas' => 'date',
            'fecha_fin_practicas' => 'date',
        ];
    }

    /**
     * Relación con oficina
     */
    public function oficina()
    {
        return $this->belongsTo(Oficina::class, 'oficina_id');
    }

    /**
     * Accessor para nombre completo
     */
    public function getNombreCompletoAttribute()
    {
        return trim($this->name . ' ' . $this->apellido_paterno . ' ' . $this->apellido_materno);
    }
}
