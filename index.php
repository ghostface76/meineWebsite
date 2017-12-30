<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
   initial-scale=1.0,
   maximum-scale=1.0,
   user-scalable=no">
    <title>Meine Lernseite</title>
    <link rel="stylesheet" href="_css/style1.css">
    <script src="_js/script.js" charset="utf-8"></script>

    <!-- TODO: Favicon einfügen -->
</head>

<body>
    <header>
    <?php

// TODO: relativen Pfad einsetzen
// echo getcwd() . "\n";
// include('/html/projekte/lernseite/_include/nav.php');
// echo $_SERVER['DOCUMENT_ROOT'];
$path = __DIR__.'/_include/nav.php';
include $path;
// include($_SERVER['DOCUMENT_ROOT'] . "/_include/nav.php");
// \html\projekte\lernseite\_include\nav.php

?>
    </header>
    <main>

    </main>
    <footer></footer>
</body>

</html>
