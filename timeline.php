<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Timeline</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:600" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

    <div class="land">
        <center>
            <h1 style="color:white; font-size:4em;">Location History</h1>
        </center>
    </div style="margin:1em;">
    <centre>
        <a href="/index.html">
            <button href="/index.html" style="background-color:#333332; padding: 1em; text-align: center; border: none; font-size:1em; color:#f5f4ed; align-self=center; border-radius: 8px;">
                Go to Home
            </button>
        </a>
    </centre>
    <div class="timeline">
        
        <?php
$servername = "localhost";
$username = "id11285787_meow";
$password = "abcdef";
$dbname = "id11285787_meow";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, lat, lon FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<table cellspacing=10px cellpadding=10px><tr><th>ID</th><th>LATITUDE</th><th>LONGITUDE</th></tr>";  
    while ($row = $result->fetch_assoc()) {        
        echo "<div class=\"container right\" data-aos=\"flip-up\"><div class=\"content\"><h2>Time: ".$row["id"]."</h2><p><a id=\"bleh\" href=\"https://maps.google.com/?q=".$row["lat"].",".$row["lon"]."\" onclick=\"\">Check your Location</a></p></div></div>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
        <script src="main.js"></script>
        <script type="text/javascript" src="first.js"></script>
        <script type="text/javascript">
            function f1() {
                document.getElementById("bleh").href = "https://maps.google.com/?q=<" + $row["lat"] + ">,<" + $row["lon"] + ">";
            }

        </script>
        <script>
            AOS.init();

        </script>
</body>

</html>
