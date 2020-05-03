# Projector

Прототип системы управления задачами и проектами на Laravel + Vue.js. Демо-проект создан в рамках программы «[IT Универ](https://it-univer43.ru/)».

## Предварительные требования

В системе должны быть установлены и доступны через терминал следующие программные средства: `git`, `php`, `composer`, `npm`.

Конфигурация php должна соответствовать [требованиям Laravel](https://laravel.com/docs/7.x#server-requirements).

## Установка

Ниже приведен базовый пример установки и запуска проекта в Windows с базой данных SQLite.

В случае использования другой ОС или СУБД (например MySQL) порядок установки может отличаться. Подробности [в документации](https://laravel.com/docs/7.x/installation).

    # клонируем исходный код проекта
    git clone github.com/KashinDanil/itu.git
    cd it-univer-projector

    # устанавливаем зависимости
    composer install
    npm install

    # производим базовую настройку
    copy .env.example .env
    php artisan key:generate

    # создаем базу данных и наполняем её тестовыми данными
    php -r "touch('database/database.sqlite');"
    php artisan migrate --seed

    # запускаем проект на http://localhost:8000/
    php artisan serve

    # если нужно поработать с фронтендом
    npm run watch
