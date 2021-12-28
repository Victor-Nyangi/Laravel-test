# Laravel Users REST API with Sanctum

- Steps

- Change the *.env.example* to *.env* and add your database info

- Using SQLite, replace the database details with the information below

<!-- DB_CONNECTION=sqlite
DB_HOST=127.0.0.1
DB_PORT=3306 -->

- Run __composer install__
- Run __php artisan key:generate__
- Run __php artisan migrate --seed__ (it has some seeded data)


- Create a _database.sqlite_ file in the _database_ directory

- Run __php artisan serve__

# Run the webserver on port 8000



## Routes