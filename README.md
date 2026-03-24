<<<<<<< HEAD
# Control de Asistencia

Sistema web responsivo base para control de asistencia, actas y análisis poblacional.

## Stack

- Laravel 13
- Starter kit oficial Livewire
- Tailwind CSS
- MySQL / MariaDB
- Roles iniciales: `admin` y `operador`

## Requisitos reales del entorno

- PHP 8.3 o superior
- Composer 2
- Node.js 20 o superior
- MySQL o MariaDB corriendo

Laravel 13 requiere PHP 8.3. En este equipo existía PHP 8.2 de XAMPP, por eso si vas a trabajar de forma soportada debes actualizar el runtime.

### Instalar PHP 8.3 en Windows

Opción recomendada con `winget`:

```powershell
winget install --id PHP.PHP.8.3 --exact --accept-package-agreements --accept-source-agreements
```

Verifica después:

```powershell
php -v
```

Debe mostrar `PHP 8.3.x`.

Si PowerShell bloquea `npm`, usa `npm.cmd` en lugar de `npm`.

## Configuración local exacta

El proyecto ya incluye `.env` y `.env.example` configurados para este entorno:

```env
APP_NAME="Control de Asistencia"
APP_URL=http://127.0.0.1:8000

APP_TIMEZONE=America/Bogota
APP_LOCALE=es
APP_FALLBACK_LOCALE=es
APP_FAKER_LOCALE=es_CO

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=asistencia_control
DB_USERNAME=root
DB_PASSWORD=
```

## Levantar el proyecto localmente

1. Crear la base de datos:

```powershell
C:\xampp\mysql\bin\mysql.exe -uroot -e "CREATE DATABASE IF NOT EXISTS asistencia_control CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
```

2. Instalar dependencias PHP:

```powershell
composer install
```

3. Instalar dependencias frontend:

```powershell
npm.cmd install
```

4. Generar clave de aplicación:

```powershell
php artisan key:generate
```

5. Ejecutar migraciones y seeders:

```powershell
php artisan migrate --seed
```

6. Compilar assets para desarrollo:

```powershell
npm.cmd run dev
```

7. En otra terminal, levantar Laravel:

```powershell
php artisan serve
```

8. Abrir en navegador:

```text
http://127.0.0.1:8000
```

## Usuarios iniciales

Después de `php artisan migrate --seed` quedan disponibles:

- Admin: `admin@asistencia.local`
- Operador: `operador@asistencia.local`
- Contraseña para ambos: `password`

## Comandos útiles

```powershell
php artisan migrate:fresh --seed
php artisan test
npm.cmd run build
```

## Notas

- Si deseas usar Apache de XAMPP, también necesitas que ese Apache apunte a PHP 8.3. Con PHP 8.2 no es una combinación soportada para Laravel 13.
- Para esta fase el dashboard está preparado como base visual vacía; los módulos de negocio aún no están implementados.
=======
# AsistenciaPacto
>>>>>>> b0e0bf2240c97ba174d7f1f0bbc4534148a98926
