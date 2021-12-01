<?php
    /* Descrizione:
        Creare una variabile con un paragrafo di testo a vostra scelta.
        Stampare a schermo il paragrafo e la sua lunghezza.
        Una parola da censurare viene passata dall'utente tramite parametro GET.
        Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. 
    */
    $name = "Valerio";
    $lorem_str = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus perspiciatis, corrupti iusto odit in incidunt deleniti eius autem, veritatis vel aperiam doloribus animi aliquam, ipsum totam velit inventore neque? Quos!';
    echo 'Questo è il primo progetto di ' .  $name . ' utilizzando php';

    echo '<br>';
    echo '<br>';


    $length_str = strlen($lorem_str);

    echo '<br>';

    echo 'La stringa dove dobbiame censurare la parola è: ';

    echo '<br>';

    echo $lorem_str;

    echo '<br>';
    echo '<br>';

    echo 'La lunghezza della stringa è: ' . $length_str;

    
?>
