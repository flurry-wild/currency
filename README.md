Rest на Yii2. Rest Json api.

Как развернуть проект.
git clone https://github.com/maxim246/currency
composer install
Создать файл config/db.php из файла sample.db.php, прописав настройки бд
php yii migrate
php yii currency/parse

Проверка через curl:
curl -i -H "Accept:application/xml" "http://localhost/currencies"
curl -i -H "Accept:application/xml" "http://localhost/currency/1" - подставляем id, имеющийся в таблице.