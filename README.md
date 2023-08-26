<p align="center"><a href="https://dadata.ru/" target="_blank"><img src="https://dadata.ru/static/i/dadata-logo.svg" width="400" alt="Laravel Logo"></a></p>


## Об этом проекте

Этот проект сделан как тестовое задание для того, чтобы показать мои навыки работы с PHP, Laravel и сторонними API.
Здесь я сделал базовый функционал, для обмена данными с API. Пользователь вводит ИНН, а ему с помощью JS возваращается
массив, который отформатирован в строку, где содержатся все данные о компании.
## Как распаковать и установить этот проект
<ul>
<li>Запустить командную строку LINUX.</li>
<li>Выполнить следующие команды: </li>

<code>"cd /var/www"</code>

<code>git clone https://github.com/assoed/test_task </code>
<li>Далее нужно перейти в директорию проекта</li>

<code>"cd /var/www/test_task"</code>
<li>Необходимо изменить права доступа для данной директории на <code>777</code></li>
<code>chmod 777 /var/www/test_task</code>

<li>В этой директории необходимо создать файл <code>.env</code></li>

<code>cp .env.example .env</code>

<li>Далее нужно отредактировать файл <code>.env</code></li>
<p>Дальше я напишу и опишу, какие параметры я буду менять:

    APP_NAME: Имя вашего проекта, в основном пользуется для уведомления;
    APP_ENV: Актуальная среда вашего приложения;
    APP_KEY: Специальный ключ для генерации хэш-сумм, создается сразу после установки фреймворка, его не трогаем;
    APP_URL: Сюда вписываем ваш ip-адрес;
    DB_DATABASE: имя вашей «БД»;
    DB_USERNAME: имя пользователя для подключения к «БД»;
    DB_PASSWORD: пароль к «БД» чтобы подключаться к ней.
</p>
<image src="https://serverspace.ru/wp-content/uploads/2023/02/15ngl.png" alt="Текст с описанием картинки">
</ul>
Также для взаимодействия с Dadata API в <code>.env</code> необходимо внести следующие правки:
<ul dir="auto">
<li><code>DADATA_TOKEN</code> - token для раоты с API DaData</li>
<li><code>DADATA_SECRET</code> - secret для работы с API DaData</li>
<li><code>DADATA_TIMEOUT</code> - максимальное время ожидания ответа от API сервисов DaData в секундах. По умолчанию это значение равно 10 секунд.</li>
</ul>

<li>Далее в этой же директории необходимо установить зависимости PHP</li>

<code>composer install</code>

<li>Сгенерировать ключ приложения Laravel</li>
<code>php artisan key migrate</code>

<li>Выполнить миграцию для создания таблиц в базе данных</li>
<code>php artisan key:generate</code>

<li>Запустить локальный сервер разработки, выполнив команду</li>
<code>php artisan serve</code>
