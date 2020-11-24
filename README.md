### Демо
логин/пароль 

webmaster/webmaster

http://cl64252.tmweb.ru/backend/web/

### Демо API
Secret: secretsecretsecret
http://cl64252.tmweb.ru/api/web/v1/

#### Примеры запросов (curl)

1 GET /categories 
```
curl --location --request GET 'http://cl64252.tmweb.ru/api/web/v1/categories' \
--header 'Secret: secretsecretsecret'
```
2 GET /levels 
```
curl --location --request GET 'http://cl64252.tmweb.ru/api/web/v1/levels' \
--header 'Secret: secretsecretsecret'
```
3 GET /themes 
```
curl --location --request GET 'http://cl64252.tmweb.ru/api/web/v1/themes?category=1&level=3' \
--header 'Secret: secretsecretsecret'
``` 

4 GET /themes/{id} 
```
curl --location --request GET 'http://cl64252.tmweb.ru/api/web/v1/themes/2' \
--header 'Secret: secretsecretsecret'
```

5 GET /words/{id} 
```
curl --location --request GET 'http://cl64252.tmweb.ru/api/web/v1/words/5' \
--header 'Secret: secretsecretsecret'
```

### Установка
1. [Установить composer](https://getcomposer.org)
2. [Установить docker](https://docs.docker.com/install/)
3. [Установить docker-compose](https://docs.docker.com/compose/install/)
4. Запустить
    ```bash
    composer run-script docker:build
    ```
5. Адрес [http://eng-app.localhost/](http://eng-app.localhost/)
