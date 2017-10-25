# equipment
This app for student in my office

Edit URL on file apps/config/app.php :

```
$baseUrl = 'http://your_url/';
```

Edit Database Config on file apps/config/database.php :

```
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'rahasia');
define('DB_DATABASE', 'db_equipment');
```

Export Database ```db_equipment``` on folder apps/config/

if you want to create login page, remember! field on table tbl_admin is :

```
username : admin
password : admin
```

i create encrypt for password using md5
