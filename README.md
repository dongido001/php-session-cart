# Simple demonstration for cart system in PHP

  This is a simple project showing how you can implement a cart system with PHP sessions

1. CD into the project root folder.

2. Set up your database.

   Create a database and tables using the file - `database.sql` located in the root folder of the project.

   Then update your MYSQL server details to the `db.php` file located in the root folder of the project:

   ```php
    private $host = "127.0.0.1";
    private $user = "root";
    private $password = "";
    private $database = "abc-hosting";
   ```

   You are to update `$host`, `$user`, `$password`, and  `$database` with their correct values.

2. Install dependencies:

```bash
  composer install
```

3. Once the dependencies are done installing, run the app using php built in server:

```bash
   php -S localhost:3020 -t ./public
```

Now, you can access the web app from http://localhost:3020