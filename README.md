
# Proyecto Laravel 10 - Registro de Usuarios con AJAX 

Proyecto Utilizado para la prueba técnica de selección de Desarrollador, dentro de este README podrás encontrar todos los pasos para poder clonar el repositorio y ejecutarlo de forma correcta.

## Estructura del Proyecto

```
/proyecto-laravel
├── app
│   ├── Http
│   │   ├── Controllers
│   │   │   └── RegisterController.php
│   │   ├── Middleware
│   │   └── Requests
│   ├── Models
│   └── Providers
├── bootstrap
├── config
├── database
│   ├── migrations
│   │   └── 2014_10_12_000000_create_users_table.php
│   ├── seeders
│   └── factories
├── public
│   ├── img
│   │   └── Amazon_PNG6.png
│   │   └── amazon_logo.png
│   │   └── signo.png
│   ├── css
│   │   └── register.css
│   │   └── users.js
│   ├── js
│   │   └── register.js
├── resources
│   ├── views
│   │   └── register.blade.php
│   │   └── users.blade.php
├── routes
│   └── web.php
└── .env.example
```

## Instrucciones para Ejecutar el Proyecto

1. **Requisitos Previos**
   - PHP 8.2
   - Composer: Descarga aquí-> https://getcomposer.org/
   - XAMPP: Descarga aquí -> https://www.apachefriends.org/es/index.html (Asegurate de usar la versión de PHP correcta dentro de XAMPP)
   - Laravel Versión 10

2. **Clonar el Repositorio**

   ```bash
   git clone https://github.com/jecasadiego/prueba-tecnica.git
   cd prueba-tecnica
   ```

3. **Instalar Dependencias**

   ```bash
   composer install
   ```

4. **Configuración del Entorno**

   Copia el archivo `.env.example` a `.env` y configura los parámetros necesarios (base de datos, correo, etc.).

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   
   Dentro del archivo `.env` encontrarás distintos parametros, recomendamos que lo tengas así parecido:

    ```env
    APP_NAME=prueba-tecnica
    APP_ENV=local
    APP_KEY=(ESTA LLAVE SE GENERA AL EJECUTAR EL COMANDO php artisan key:generate)
    APP_DEBUG=true
    APP_URL=http://localhost

    LOG_CHANNEL=stack
    LOG_DEPRECATIONS_CHANNEL=null
    LOG_LEVEL=debug

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=prueba-tecnica
    DB_USERNAME=root
    DB_PASSWORD=

    BROADCAST_DRIVER=log
    CACHE_DRIVER=file
    FILESYSTEM_DISK=local
    QUEUE_CONNECTION=sync
    SESSION_DRIVER=file
    SESSION_LIFETIME=120

    MEMCACHED_HOST=127.0.0.1

    REDIS_HOST=127.0.0.1
    REDIS_PASSWORD=null
    REDIS_PORT=6379

    MAIL_MAILER=smtp
    MAIL_HOST=mailpit
    MAIL_PORT=1025
    MAIL_USERNAME=null
    MAIL_PASSWORD=null
    MAIL_ENCRYPTION=null
    MAIL_FROM_ADDRESS="hello@example.com"
    MAIL_FROM_NAME="${APP_NAME}"

    AWS_ACCESS_KEY_ID=
    AWS_SECRET_ACCESS_KEY=
    AWS_DEFAULT_REGION=us-east-1
    AWS_BUCKET=
    AWS_USE_PATH_STYLE_ENDPOINT=false

    PUSHER_APP_ID=
    PUSHER_APP_KEY=
    PUSHER_APP_SECRET=
    PUSHER_HOST=
    PUSHER_PORT=443
    PUSHER_SCHEME=https
    PUSHER_APP_CLUSTER=mt1

    VITE_APP_NAME="${APP_NAME}"
    VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
    VITE_PUSHER_HOST="${PUSHER_HOST}"
    VITE_PUSHER_PORT="${PUSHER_PORT}"
    VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
    VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
    ```
    
5. **Configurar la Base de Datos**

   - Abre XAMPP y enciende el servidor MySQL y Apache.
   - Crea una base de datos nueva desde phpMyAdmin (por ejemplo, `laravel_db`).
  
  NOTA: Al ejecutar php artisan migrate, debería crearte la base de datos que tengas de nombre en el archivo `.env`, en la variable de entorno  `DB_DATABASE`

6. **Migrar las Tablas**

   ```bash
   php artisan migrate
   ```

7. **Iniciar el Servidor**

   ```bash
   php artisan serve
   ```

8. **Acceder a la Aplicación**

   Abre tu navegador web y dirígete a `http://localhost:8000`.

## Descripción de Archivos Importantes

- **RegisterController.php**: Controlador que maneja el registro de usuarios.
- **register.blade.php**: Vista de registro de usuarios.
- **Amazon_PNG6.png**: Logo de Amazon utilizado en la vista de registro.
- **2014_10_12_000000_create_users_table.php**: Migración para crear la tabla de usuarios.

## Nota

Este proyecto utiliza Bootstrap personalizado para el diseño y AJAX para el manejo de formularios asincrónicos. Además, se personalizó la validación de formularios para que los mensajes de error aparezcan en español.

## Nota 2

Como adicional, creé una vista con la ruta `http://localhost:8000/users` para que se verifique si el usuario digitado se creó exitosamente.


