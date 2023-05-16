<?PHP
        $server = 'localhost';
        $username = 'root';
        $password = 'Prabal@32415';
        $database = 'courierdb';
        $dbcon = new mysqli($server, $username, $password, $database, 3307) or die("not
        connected");
        echo "connected"
        ?>