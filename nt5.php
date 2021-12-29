
<!DOCTYPE html>

<head></head>

<body>

<form method = post>         <!--sending data to the server/how to send data in between prog.-->


Salasana : <input type = password name = "salasana">     <!--input boxes-->



<input type = submit name = "Kirjaudu">    <!--nappula-->

<?php

if(isset($_POST["Kirjaudu"])) {  

   
    $password = $_POST["salasana"];           /*nappula aktivoi*/

if  ($password == "kissakala") { 

    echo "Salasana ok!";
    session_start();                            
    $_SESSION["password"]=$password;        /*interaction with the server. tunnistautuminen, sit kun pois loggaus-poisto tapahtuu*/

    echo "<br> <a href='nt4d.php'>Poista joukkue</a> <br>";
    echo "<a href='nt4e.php'>Päivitä sarjataulukko</a> <br>";
    echo "<a href='nt4b.php'>Hae joukkue</a> <br>";
    echo "<a href='nt4c.php'>Lisää joukkue</a> <br>";
    echo "<a href='nt4a.php'>Sarjataulukko</a> <br>";
    
} 


    else  { 

        echo "Väärä salasana,yritä uudelleen";
    } 
} 



?>

</form>
</body>

</html>