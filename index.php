<!-- Descrizione: Creare una variabile con un paragrafo di testo. 
Visualizzare a schermo il paragrafo con la relative lunghezza 
e sostituire la badword passata in GET con "***" -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>

<body>

    <?php
    $firstParagraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, quidem possimus.";
    $secondParagraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, quidem possimus.";
    ?>

    <h1>Il paragrafo è lungo <?php echo strlen($firstParagraph); ?> caratteri</h1>
    <p><?php echo $firstParagraph ?></p>

    <?php $newSecondParagraph = str_replace($_GET["badword"], "***", $secondParagraph); ?>

    <h1>Il paragrafo è lungo <?php echo strlen($secondParagraph); ?> caratteri</h1>
    <p><?php echo $newSecondParagraph ?></p>
    
</body>

</html>