Rest на Yii2. Rest Json api.<br>
<br>
Как развернуть проект.<br>
git clone https://github.com/maxim246/currency<br>
composer install<br>
Создать файл config/db.php из файла sample.db.php, прописав настройки бд<br>
php yii migrate<br>
php yii currency/parse<br>
<br>
Проверка через curl:<br>
curl -i -H "Accept:application/xml" "http://localhost/currencies"<br>
curl -i -H "Accept:application/xml" "http://localhost/currency/1" - подставляем id, имеющийся в таблице.<br>