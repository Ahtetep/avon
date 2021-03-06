GuestBook
=======================

### Нужные пакеты ###

- symfony composer req profiler --dev           Отладка
- composer require symfony/apache-pack           Отладка
- symfony composer req logger
- symfony composer req debug --dev
- symfony composer require --dev symfony/var-dumper
- symfony composer req maker --dev              Генерация контроллеров
- symfony composer req annotations              Аннотации
- symfony composer req orm                      ORM
- symfony composer req admin                    Админ панель
- symfony composer req twig                     Установка Twig
- symfony composer require twig/intl-extra      Установка фильтра format_datetime
- symfony composer req string                   Symfony компонента String
- composer require vich/uploader-bundle         Загрузка файлов в админ
- symfony composer req security                 Защита админ панели
- symfony composer req http-client              HTTP-client
- symfony composer req mailer                   Почтовик
- symfony composer req symfonycasts/verify-email-bundle    
- symfony composer req form validator           Валидация форм 


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
symfony composer req security &&
symfony composer req http-client &&
symfony composer req mailer &&
symfony composer req symfonycasts/verify-email-bundle &&
symfony composer req form validator &&


### Описание некоторых команд ###

* Создание заготовки проекта
    * ***symfony new --version=5.0-3 --book nameproject***
    * ***symfony new nameproject --version=5.0***
    
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
    
        php bin/console doctrine:database:create &&

    php bin/console make:migration && 
    php bin/console doctrine:migrations:migrate   

    symfony console make:migration && 
    symfony console doctrine:migrations:migrate   

* Ошибка EasyAdmin 
    *  Если не работает - проверить версию. С версией 2.3.4 работает      
    
* Создаем юзера / User *
    symfony console make:user &&
    symfony console make:auth &&
    symfony console make:registration-form

    
* Генерация подписчика
    * ***symfony console make:subscriber TwigEventSubscriber***    
    
* Генерация формы
    * ***symfony console make:form CommentFormType Comment***    
    * ***symfony console make:form RequirementFormType Requirement***    

* Создание сущности Админа
    * symfony console make:user Admin

* Создание хеша пароля
    * symfony console security:encode-password
    * symfony run psql -c "INSERT INTO admin (id, email, roles, password) VALUES (nextval('admin_id_seq'), 'admin', '[\"ROLE_ADMIN\"]', '\$argon2id\$v=19\$m=65536,t=4,p=1\$TEdJQmRZR0UwZTk0MFlZbA\$9+RTIC2ie8dsxtjmuOqY4b43ZO+pm2SnaTlVSMWqMmA')"
    * INSERT INTO user (email, roles, password, is_verified, user_name) VALUES ('admin@admin.com', '[\"ROLE_ADMIN\"]', '\$argon2id\$v=19\$m=65536,t=4,p=1\$dqEBk8kBF8GAYErxfpTiFg\$Szhr+Y6ctu2gzASA8jAUpa5LR5bqcEv67iNilI4AXo8', 0, 'admin')

* Создание формы входа
    * symfony console make:auth
    
* Полноценная форма регистрации
    * symfony console make:registration-form    
    
    




-------------------------------------------------------------------------
*   Создать контроллер
symfony console make:controller MeController

*   Просмотр переменного окружения
symfony var:export

-------------------------------------------------------------------------
        $qb = $this->em->createQueryBuilder();
        $qb->select('_s.id')
            ->from(Slider::class, '_s');
        return $qb->getQuery()->getResult();
        --------------------------------------------------------
        $rsm = new ResultSetMapping();
        $rsm->addEntityResult(Slider::class, 's');
        $rsm->addFieldResult('s', 'id', 'id');
        $query = $this->em->createNativeQuery('SELECT * FROM slider', $rsm);
        $users = $query->getResult();

-------------------------------------------------------------------------