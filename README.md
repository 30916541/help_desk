# Help Desk — Proyecto de Asignación

Proyecto simple de gestión de tickets desarrollado como parte de una
asignación de la universidad (Organización y Archivos de Programación — Corte 3).

## Descripción

Este proyecto implementa un sistema básico de registro y visualización de
tickets usando PHP y una base de datos MySQL. Permite a un usuario crear tickets
mediante un formulario y ver los tickets registrados en una vista.

## Estructura del repositorio

- `index.php` - Punto de entrada (puede redirigir o incluir vistas)
- `schema.sql` - Script SQL para crear la base de datos y las tablas
- `controller/ControladorTicket.php` - Lógica de control para tickets
- `model/ModeloTicket.php` - Modelo con operaciones sobre la base de datos
- `database/db.php` - Conexión a la base de datos (configurar credenciales)
- `view/form.php` - Formulario para crear tickets
- `view/tickets.php` - Vista para listar tickets
- `view/header.php` - Cabecera compartida
- `style/style.css` - Estilos básicos
- `Planteamiento/Info.txt` - Enunciado y documentación de la asignación

## Requisitos

- PHP 7.4 o superior
- Servidor web local o `php -S localhost:8000`
- MySQL o MariaDB

## Instalación y uso

1. Crear la base de datos y tablas ejecutando `schema.sql` en tu servidor MySQL:

   mysql -u usuario -p nombre_base_de_datos < schema.sql

2. Configurar las credenciales de la base de datos en `database/db.php`.

3. Iniciar el servidor PHP en la raíz del proyecto:

   php -S localhost:8000

4. Abrir en el navegador:

   http://localhost:8000/view/form.php  (para crear tickets)
   http://localhost:8000/view/tickets.php  (para ver los tickets)

## Uso

- Rellenar el formulario en `view/form.php` y enviar para crear un ticket.
- Consultar los tickets existentes en `view/tickets.php`.

