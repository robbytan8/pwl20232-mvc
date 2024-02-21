# Web PHP Project with Data Access Object (DAO) and Model-View-Controller (MVC)

## Using AdminLTE template with Datatables

Step-by-step how to use this project
1. Download or clone this project. You can put the project in htdocs folder, or anywhere you want.
2. Open database schema file (db-schema-pwl-20232.mwb) in database folder using MySQL Workbench. Follow given instructions in MySQL Workbench.  
_Note: If you open the file using MySQL Workbench v8 and MySQL server installed in your PC/ laptop is v5, remove **VISIBLE** keyword from SQL script in the last step._
3. Open terminal in this project and run composer install

        composer install
4. Change username and password in PDOUtil.php (file located in dao folder) with your MySQL username and password.

        $conn = new PDO("mysql:host=localhost;dbname=pwl20232", "username", "password");
5. Run the php project. If you put the project in htdocs folder of your XAMPP installation, please make sure you have start Apache module in your XAMPP Control Panel. Another way to run this project is using terminal using this command (Make sure the port is available).

        php -S localhost:8080

