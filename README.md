<p align="center">
  <a href="asesorialegal.site" target="_blank">
    <img src="https://raw.githubusercontent.com/luxcho1/asesoria-beta/main/public/images/logo_pagina_web.svg" width="400" alt="Logo Asesoría Beta">
  </a>
</p>

# Proyecto - AsesorIA Legal

Este proyecto es un chatbot donde se pueden realizar consultas juridicas y sobre leyes de Chile mediante uso de inteligencia artificial.

## VERSION 1.0 CHATBOT NO IMPLEMENTADO. PARA USAR CHATBOT REVISAR VERSION BETA
https://github.com/luxcho1/asesoria-beta

## Website proyecto

https://asesorialegal.site/

## Autores

- [Luis Muñoz](https://github.com/luxcho1)
- [Tomas Moreno](https://github.com/Tomi880)
- [Gabriel Toledo](https://github.com/Gabro22)

## Instalacion de forma local
#### Programas necesarios:
- [Visual Studio Code](https://code.visualstudio.com/)
- [Laragon](https://laragon.org/download/index.html)
- [phpMyAdmin](https://www.phpmyadmin.net/downloads/)
- [Composer](https://getcomposer.org/download/)
- [Node JS](https://nodejs.org/en)
- [Git](https://git-scm.com/downloads)
- [API keys OpenAI](https://platform.openai.com/api-keys)

#### Orden instalacion programas

1. Instalar Laragon
2. Instalar phpMyAdmin
Descomprimir y la carpeta `phpMyAdmin-5.2.1-all-languages` renombrarla a `phpMyAdmin` y moverla a la siguiente carpeta `C:\laragon\etc\apps`.
3. Instalar composer y adjuntar ruta de php `C:\laragon\bin\php\php-8.1.10-Win32-vs16-x64`

#### Clonacion del proyecto

Hay dos formas de realizarlo, la primera descargar el zip y pegarlo en la siguiente ruta: `C:\laragon\www`.

Y la segunda en esta ruta `C:\laragon\www` abrir el cmd y escribir: 
```bash
  git clone https://github.com/luxcho1/asesor-ia-legal.git
```

## Configurar proyecto y base de datos
En Laragon abrirmos Base de Datos y en la pagina de phpmyadmin le damos a click "nueva" y creamos una base de datos llamada `asesor-ia-legal`.

En la siguiente ubicacion `C:\laragon\www\asesor-ia-legal` ya sea CMD de Windows o en la terminal de Visual Studio Code ejecutar los siguientes comandos:

```bash
  composer install
```

```bash
  cp .env.example .env
```
```bash
  php artisan key:generate
```
```bash
   npm install
```
*Para creacion de Chatbot y uso de OpenAI* 
```bash
  composer require openai-php/client
```
```bash
  composer require guzzlehttp/guzzle
```

El archivo `.env` debe quedar de la siguiente forma:
```bash
APP_NAME="AsesorIA Legal" (Opcional)
APP_ENV=local
APP_KEY= XXXXXXXXXXX
APP_DEBUG=true
APP_URL=http://localhost
OPENAI_API_KEY= XXXXXXXXXXX


DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=asesor-ia-legal
DB_USERNAME=root
DB_PASSWORD=
```

Una vez creada la conexion con la base de datos ejecutamos el siguiente comando: 
```bash
  php artisan migrate:fresh --seed
```
## Ejecutar
Solo la primera vez ejecutar:
```bash
  npm run build
```
Luego para ejecutar el proyecto ejecutar el siguiente comando:

```bash
  php artisan serve
```
## Licencia

[MIT](https://choosealicense.com/licenses/mit/)



## Licencia

Este proyecto es de uso gratuito.


