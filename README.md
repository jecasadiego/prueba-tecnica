
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
│   │   └── auth
│   │       └── register.blade.php
├── routes
│   └── web.php
└── .env.example
```

## Instrucciones para Ejecutar el Proyecto

1. **Requisitos Previos**
   - PHP 8.2
   - Composer: Descarga aquí-> https://getcomposer.org/
   - XAMPP: Descarga aquí -> https://www.apachefriends.org/es/index.html (Asegurate de usar la versión de PHP correcta dentro de XAMPP)

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

5. **Configurar la Base de Datos**

   - Abre XAMPP y enciende el servidor MySQL y Apache.
   - Crea una base de datos nueva desde phpMyAdmin (por ejemplo, `laravel_db`).

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

Este proyecto utiliza Bootstrap para el diseño y AJAX para el manejo de formularios asincrónicos. Además, se personalizó la validación de formularios para que los mensajes de error aparezcan en español.
