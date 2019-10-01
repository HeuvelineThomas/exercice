<!doctype html>
<head>
    <title>Exercice 1</title>
</head>

<body>
    <h1>Mon premier formulaire</h1>


    <form action="index.php">
        <label>Identifiant de la catégorie</label>
        <input name="shortname" size="10" type="text"/>
    </form>

    <?php
        if (isset($_GET['shortname'])) {
            $shortname = $_GET['shortname'];
            echo $shortname;
        }

        $host = "localhost";
        $username ="slamquiz";
        $passwd = "wamp64slamquiz";
        $dbname = "slamquiz";

        $idConnexion = new MySQLi($host, $username, $passwd, $dbname);
        
        if ($idConnexion) {
            $result = $idConnexion->query("SELECT * FROM categorie where shortname ='" . $shortname . "';");
        }
        else {
            echo("Impossible d'acceder a la BDD");
        }

    ?>


</body>
</html>