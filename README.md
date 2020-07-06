GuestBook
=======================

### Нужные пакеты ###

- symfony composer req profiler --dev           Отладка
- composer require symfony/apache-pack           Отладка
- symfony composer req logger
- symfony composer req debug --dev
- symfony composer req maker --dev              Генерация контроллеров
- symfony composer req annotations              Аннотации
- symfony composer req orm                      ORM
- symfony composer req admin                    Админ панель
- symfony composer req twig                     Установка Twig
- symfony composer require twig/intl-extra      Установка фильтра format_datetime
- symfony composer req string                   Symfony компонента String
- composer require vich/uploader-bundle         Загрузка файлов в админ


Инициализация проекта:

symfony new avon --version=5.0 &&
cd avon &&

symfony composer req profiler --dev &&
composer require symfony/apache-pack &&
symfony composer req logger &&
symfony composer req debug --dev &&
symfony composer req maker --dev &&
symfony composer req annotations &&
symfony composer req orm &&
symfony composer req admin 2.3.4 &&
symfony composer req twig &&
symfony composer require twig/intl-extra &&
symfony composer req string &&
composer require vich/uploader-bundle &&


### Описание некоторых команд ###

* Создание заготовки проекта
    * ***symfony new --version=5.0-1 --book nameproject***
    
* Запуск веб-сервер в фоновом режиме прямо из директории проекта
    * ***symfony server:start -d***
    При ошибке нужно выйти symfony account:logout и повторить start

* Открыть сайт по ссылке из CLI
    * ***symfony open:local***

* Создать новый проект SymfonyCloud
    * ***symfony project:create --title="Guestbook" --plan=development***

* Выкат изменений на SymfonyCloud ( Разворачиваем приложение )
    * ***symfony deploy***

* Открываем сайт с прода
    * ***symfony open:remote***

* Удалить проект на SymfonyCloud
    * ***project:delete***

* Генерация контроллера
    * ***symfony console make:controller MeController***
    
* Генерация БД>
    * ***docker-compose up -d***
    * ***docker-compose ps***
    
* Подключение к БД
    * ***symfony run psql***    или
    * ***docker exec -it symftest_database_1 psql -U main -W main***   или    
    * ***winpty docker exec -it symftest_database_1 psql -U main -W main***    
    
* Генерация Entity
    * ***symfony console make:entity Conference***  
    
* Создать и выполнить миграцию
    * ***symfony console make:migration***      
    * ***symfony console doctrine:migrations:migrate***   
    
        php bin/console doctrine:database:create

    symfony console make:migration && symfony console doctrine:migrations:migrate   

* Ошибка EasyAdmin 
    *  Если не работает - проверить версию. С версией 2.3.4 работает      
    
* Генерация подписчика
    * ***symfony console make:subscriber TwigEventSubscriber***    
    
* Генерация формы
    * ***symfony console make:form CommentFormType Comment***    
    * ***symfony console make:form RequirementFormType Requirement***    


-------------------------------------------------------------------------
*   Создать контроллер
symfony console make:controller MeController

*   Просмотр переменного окружения
symfony var:export