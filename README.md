# ПРАКТИКА ПО DOCKER COMPOSE

## 1. Требования
- Docker Compose v2.12.2;

## 2. Подготовка переменных окружения
Создать файл common_db.env и добвить в него имя БД, пользователя и пароль:
```sh
MYSQL_DATABASE=
MYSQL_USER=
MYSQL_PASSWORD=
```

Создать файл root_db.env и добвить пароль для root:
```sh
MYSQL_ROOT_PASSWORD=ruslan
```
## 4. Запуск проекта
```bash
docker-compose up -d
```