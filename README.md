# Website
Ambiente automatizado para el desarrollo de sitios web.
Basándose en la arquitectura MVC y aprovechando las herramientas novedosas
que nos trae Node.js

## Requisitos
- **PHP 7** y Composer
- **Node.js** y NPM

## Instalación
Clonamos, entramos a la carpeta, eliminamos la carpeta .git e instalamos las dependencias.
```
git clone https://github.com/carlos-duran/website
cd website && rm -rf .git
composer install
npm install
```
A continuación haremos una copia de `.env.example` a `.env`.
```
cp .env.example .env
```
Luego abrimos este nuevo archivo `.env` para ingresar la información sensible
como, por ejemplo, el acceso a la base de datos.


## Ejecución
Abrimos dos terminales: una para compilar los assets y la otra para el servidor.

#### Assets
Modo desarrollo: `npm run dev`.

Mientras se modifica: `npm run watch`.

Para producción: `npm run production`.

#### Servidor
Servidor PHP: `npm run serve`

Este comando nos creará un servidor corriendo en `http://localhost:8000`


## Tutorial
Nuestro ambiente de trabajo se encuentra dentro de la carpeta **app**.
Dentro de esta carpeta tenemos:
```
app
|
|-- assets
|   |-- js
|   |-- scss
|
|-- controllers
|
|-- views
```

#### assets
En assets tenemos la carpeta **js** donde se guardarán todos los archivos Javascript,
el archivo principal es **app.js** y en él se debe hacer referencia a todos los archivos
adicionales que tengamos mediante la función `require` ya que usamos Browserify.

También tenemos la carpeta **scss** donde, de la misma manera, tenemos un **app.scss**
en la cual haremos referencia a cualquier archivo scss externo que tengamos

#### controllers
Crearemos un archivo **php** por cada petición que manejemos en nuestro sitio.
Cada archivo tiene en su terminación el tipo de petición que maneja.
Por ejemplo: `contacto.get.php` maneja una petición get en '/contacto'.

Mayor información: [siler](https://github.com/leocavalcante/siler)

#### views
(coming soon)

Mayor información: [twig](http://twig.sensiolabs.org/documentation)


## Agradecimientos
Esta plantilla es posible gracias a:
* [siler](https://github.com/leocavalcante/siler)
* [redbeanphp](https://github.com/gabordemooij/redbean)
* [twig](https://github.com/twigphp/Twig)
* [browserify](http://browserify.org/)
* [node-sass](https://github.com/sass/node-sass)
* [uglifyjs](https://github.com/mishoo/UglifyJS)
* [clean-css-cli](https://github.com/jakubpawlowicz/clean-css-cli)
* [watch](https://github.com/mikeal/watch)
* [jquery](https://github.com/jquery/jquery)
* [uikit](https://github.com/uikit/uikit)
