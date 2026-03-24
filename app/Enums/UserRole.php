<?php

namespace App\Enums;

enum UserRole: string
{
    case Admin = 'admin';
    case Operador = 'operador';

    /**
     * Get the human-friendly label for the role.
     */
    public function label(): string
    {
        return match ($this) {
            self::Admin => 'Administrador',
            self::Operador => 'Operador',
        };
    }
}
