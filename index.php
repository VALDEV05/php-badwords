<?php
    /* Descrizione:
        Creare una variabile con un paragrafo di testo a vostra scelta.
        Stampare a schermo il paragrafo e la sua lunghezza.
        Una parola da censurare viene passata dall'utente tramite parametro GET.
        Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. 
    */
    $name = $_GET["name"];
    $surname = $_GET["surname"];
    $fullName = $name . ' ' . $surname;
    echo 'Questo è il primo progetto di ' .  $fullName . ' utilizzando php';


    #string to censor
    $lorem_str = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus perspiciatis, corrupti iusto odit in incidunt deleniti eius autem, veritatis vel aperiam doloribus animi aliquam, ipsum totam velit inventore neque? Quos!';

    echo '<br>';
    /* the length is calculated by counting the characters the string occupies */
    #calculate the string length to check
    $length_str = strlen($lorem_str);
    #transform the string to be censored in an array
    $array_str = explode(' ', $lorem_str);

    echo '<br>';

    #print the entire string to be censored
    echo 'La stringa dove dobbiame censurare la parola è: ';
    echo '<br>';
    echo $lorem_str;
    echo '<br>';
    echo '<br>';

    #print the length of the string
    echo 'La lunghezza della stringa è: ' . $length_str;
    
    #created a variable with the word to censor
    $censoredKeyword = $_GET["keyword"];

    #print the variable
    echo 'La parola da censurare è: ' . $censoredKeyword;
    echo '<br>';

    #replace in the string the word to be censored with ****
    $censoredString =  str_replace( $censoredKeyword, '****' , $lorem_str );
    #transforms the censored string into an array
    $censoredArray = explode(' ',$censoredString);
    echo '<br>';
    #print the censored string
    echo 'La stringa censurata è: ';
    echo '<br>';
    echo $censoredString;

    echo '<br>';
    echo '<br>';
    
    #print Array before censoring
    echo 'Array prima della censura';

    echo '<br>';

    echo '<pre>';
    var_dump($array_str);
    echo '<pre>';

    echo '<br>';
    echo '<br>';


    #print Array after censoring
    echo 'Array dopo la censura';
    echo '<pre>';
    var_dump($censoredArray);
    echo '<pre>';

    echo '<hr>';
    echo '<br>';
    echo 'Riporto tutto su HTML';
    echo '<br>';
    echo '<br>';

    echo '<hr>';


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censoring_a_word_in_a_string</title>
</head>
<body>
    <h1>Questo è il primo progetto di <?= $fullName; ?> </h1>
    <p>In questa pagina potremo censurare una parola (inserendola tramite la query) da una stringa</p>
    <p>Stringa su cui applicare la censura</p>
    <p><?= $lorem_str; ?></p>
    <p>la parola da censurare è:  <?= $censoredKeyword;?></p>
    <p>Ecco la stringa con la parola <?= $censoredKeyword;?> trasformata in ****</p>
    <p><?= $censoredString;?></p>


</body>
</html>