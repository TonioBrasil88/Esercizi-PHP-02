<?php 

/* Esercizio 1
    Ripetere l’esercizio del controllo password visto a lezione;
    Implementare un metodo che faccia reinserire la password qualora anche una delle regole non fosse rispettate e che, invece, lo interrompa in caso di password accettata;
    Visualizzare in console quale regola non e’ stata rispettata
    */

    
    //Creo stringa e ne definisco la lunghezza

    $password = readLine("Inserisci una la tua password");

    function checkLenght($strig) 
    {
        if (strlen($string) >= 8){  //strlen esegue il controllo della lunghezza della stringa 

            return true;
        }

        return false;
    }  


    function checkUpper($string)
    {
        for ($i = 0; $i < strlen($string); $i++) {
            if (ctype_upper($string[$i])) {                 //controlla se tutti i caratteri nella stringa fornita, sono caratteri maiuscoli.
                return true;
            }
        }
        return false;
    }
    

    function checkNumber($string)
    {
        for ($i = 0; $i < strlen($string); $i++) {
            if (is_numeric($string[$i])) {                  //Trova se una variabile è un numero o una stringa numerica
                return true;
            }
        }
        return false;
    }
    
    function checkSpecial($string){
        $spercialChars = ["%", "£", "%", "/", "#", "@", "[", "]", "&", "!", "?", "=", ":"];
    
        foreach($spercialChars as $char){
            for($i = 0; $i < strlen($string); $i++){
    
                if($string[$i] == $char){
                    return true;
                }
            }
        }
        return false;
    }
    
    

   while ($password == true) {
        if(!checkLenght($password)){
            echo "Password troppo corta, inserire alemeno 8 caratteri \n";
            $password = readline("Inserisci una password: ");
        }elseif(!checkNumber($password)){
            echo "Password errata, inserire alemeno un numero \n";
            $password = readline("Inserisci una password: ");
        }elseif(!checkUpper($password)){
            echo "Password errata, inserire alemeno un carattere maiuscolo \n";
            $password = readline("Inserisci una password: ");
        }elseif(!checkSpecial($password)){
            echo "Password errata, inserire alemeno un carattere speciale \n % £ % / # @ [ ] & ! ? = : \n";
            $password = readline("Inserisci una password: ");
        }else{
            echo "Password valida";
            $password = false;
        }
    }



//metodo alternativo, manca il 

//$uppercase = preg_match('@[A-Z]@', $password);
//$lowercase = preg_match('@[a-z]@', $password);
//$number    = preg_match('@[0-9]@', $password);
//$specialChars = preg_match('@[^\w]@', $password);

//      if(!$uppercase  !$lowercase  !$number  !$specialChars  strlen($password) < 8) {

//      echo 'La Password deve essere almeno di 8 caratteri, contenere almeno 1 carattere maiuscolo, 1 numero e uno speciale';
//          }else{

//     echo 'Password corretta';
// }


?> 