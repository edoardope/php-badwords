<?php
$paragrafo = $_GET['Paragrafo'];
$termineDaCensurare = $_GET['TermineDaCensurare'];
$nuovoParagrafo = str_replace($termineDaCensurare, '***', $paragrafo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result</title>
</head>
<body>
    <p><?php echo $paragrafo; ?></p>
    <span>il nuomero dei caratteri è:<?php echo strlen($paragrafo); ?></span>
    <br>
    <p><?php echo $nuovoParagrafo; ?></p>
    <span>il nuomero dei caratteri è:<?php echo strlen($nuovoParagrafo); ?></span>
</body>
</html>