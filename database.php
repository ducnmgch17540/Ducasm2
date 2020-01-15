<?php	
    $db = parse_url(getenv("DATABASE_URL"));
    $pdo = new PDO("pgsql:" . sprintf(
        "host=ec2-174-129-29-52.compute-1.amazonaws.com;port=%s;user=uezqbwprhjylep;password=710fdd6a7800595e8a5655c1b10556123db6ae89b9ec20c4f56b1d2042fed955;dbname=d6769srljenbet",
        $db["host"],
        $db["port"],
        $db["user"],
        $db["pass"],
    ltrim($db["path"], "/")
    ));  
?>