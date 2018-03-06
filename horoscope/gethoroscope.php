<?php
    session_start();
    $horoscopeArray = unserialize($_COOKIE["horoskopify"]);
    $date = substr($_COOKIE["socialnumber"], -4, 4);
    $person = new Person($horoscopeArray["name"], $horoscopeArray["lastname"], substr($horoscopeArray["socialnumber"], -4, 4));

?>

<table>
        <tr>
            <th>Namn:</th>
            <th>Efternamn:</th>
            <th>Horoskop:</th>
        </tr>
        <tr>
            <td><?php echo $person->printName();?></td>
            <td><?php echo $person->printLastname();?></td>
            <td><?php echo $person->printSign();?></td>
        </tr>


    </table>

    