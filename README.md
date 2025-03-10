# TodoList

<p align="center">
<img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
</p>

<p align="center">
<a href="https://github.com/yourusername/Todo-List/actions"><img src="https://img.shields.io/github/workflow/status/yourusername/Todo-List/CI" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Laravel Version"></a>
<a href="https://opensource.org/licenses/MIT"><img src="https://img.shields.io/badge/License-MIT-green.svg" alt="License"></a>
</p>

## Sobre TodoList

TodoList es una aplicación web simple y efectiva para la gestión de tareas diarias, desarrollada con el framework Laravel. La aplicación actualmente permite a los usuarios:

- Crear nuevas tareas
- Marcar tareas como completadas

## Requisitos

- PHP >= 8.1
- Composer
- MySQL >= 5.7 o MariaDB >= 10.3
- Node.js y NPM

## Instalación

1. Clona el repositorio:
```bash
git clone https://github.com/yourusername/Todo-List.git
cd Todo-List
```

2. Instala las dependencias de PHP:
```bash
composer install
```

3. Instala las dependencias de JavaScript:
```bash
npm install && npm run dev
```

4. Configura el entorno:
```bash
cp .env.example .env
php artisan key:generate
```

5. Configura tu base de datos en el archivo `.env`

6. Ejecuta las migraciones:
```bash
php artisan migrate
```

7. (Opcional) Popula la base de datos con datos de prueba:
```bash
php artisan db:seed
```

## Uso

Una vez instalada, puedes acceder a la aplicación a través de tu navegador web. Las funcionalidades disponibles actualmente incluyen:

- **Crear tareas**: Añade nuevas tareas a tu lista
- **Completar tareas**: Marca tus tareas como completadas cuando las finalices

Próximamente se añadirán más funcionalidades como:
- Edición de tareas
- Categorización por prioridad
- Fechas límite y recordatorios
- Organización en diferentes listas

## Estructura del proyecto

```
Todo-List/
├── app/                # Lógica principal de la aplicación
├── bootstrap/          # Archivos de arranque de la aplicación
├── config/             # Configuraciones de la aplicación
├── database/           # Migraciones y seeds
├── public/             # Punto de entrada y assets públicos
├── resources/          # Vistas, assets sin compilar, traducciones
├── routes/             # Definiciones de rutas
├── storage/            # Archivos generados por la aplicación
├── tests/              # Tests automatizados
└── vendor/             # Dependencias de Composer
```

## Tecnologías utilizadas

- **[Laravel](https://laravel.com)**: Framework PHP para el backend
- **[Eloquent ORM](https://laravel.com/docs/eloquent)**: Para la gestión de la base de datos
- **[Blade](https://laravel.com/docs/blade)**: Motor de plantillas
- **[Bootstrap](https://getbootstrap.com)**: Framework CSS para el frontend

## Contribuir

¿Quieres contribuir al proyecto? ¡Fantástico! Sigue estos pasos:

1. Haz fork del repositorio
2. Crea una nueva rama (`git checkout -b feature/amazing-feature`)
3. Haz commit de tus cambios (`git commit -m 'Add some amazing feature'`)
4. Haz push a la rama (`git push origin feature/amazing-feature`)
5. Abre un Pull Request

## Pruebas

Para ejecutar las pruebas automatizadas:

```bash
php artisan test
```

## Despliegue

La aplicación está preparada para ser desplegada en cualquier servidor que cumpla con los requisitos de Laravel. Algunas opciones recomendadas:

- [Laravel Forge](https://forge.laravel.com)
- [Laravel Vapor](https://vapor.laravel.com)
- [Heroku](https://heroku.com)
- [DigitalOcean](https://digitalocean.com)

## Licencia

Este proyecto está licenciado bajo la [Licencia MIT](https://opensource.org/licenses/MIT).

---

<p align="center">Desarrollado con ❤️ usando Laravel</p>
