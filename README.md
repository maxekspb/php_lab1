# HTTP аутентификация
## Текст задания
### Цель работы
Спроектировать и разработать систему авторизации пользователей на протоколе HTTP
## Ход работы
## 1. [Пользовательский интерфейс] (https://www.figma.com/file/aHfaYNNKsxzvku7QA67IPm/lab1?t=Q0gnYqOvIbW5sp1G-1)
## 2. [Пользовательские сценарии работы] (https://imgur.com/a/QWxXQGT)
## 3. [API сервера и хореография]
## 4. Структура базы данных
| id | login | hash |
|:---|:------|:-----|
- id: INT, AUTO_INCREMENT, PRIMARY KEY;
Уникальный идентификатор пользователя
- login: VARCHAR, 100;
логин пользователя
- hash: VARCHAR, 255;
хэшированный пароль
