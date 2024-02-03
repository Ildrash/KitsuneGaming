<!DOCTYPE html>
<html>
   <head>
      <title>GamingByCata</title>
      <h1 id="Title"><a href="http://localhost/Proiect/index.php"><img src="../Website images/Kitsune-logo.jpg" style="height: 85px;" alt="logo"/></a>Kitsune Gaming</h1> 
      <link rel="stylesheet" href="../Referinte/Gaming.css">
      <style>
         p {
            color: red;
            font-size: 20px;
         }
      </style>
   </head>
   <body class="JsF">
      <h1>
         <span class="page2">Cele mai ieftine jocuri si figurine din online </span>
      </h1>
      <br>
      <br>
      <table>
         <tr id="tableabs1">
            <th id="tableabs1">
               <a href="../index.php">Home</a>
            </th>
            <br>
            <th id="tableabs1">
               <a href="../Jocuri_si_Figurine/Jocuri_si_Figurine.php">Jocuri si Figurine</a>
            </th>
            <br>
            <th id="tableabs1">
               <a href="../Cosplay/Costume-DIY/Cosplay.php">Costume Cosplay</a>
            </th>
         </tr>
      </table>
      <hr>
      <!--<img src="../Website images/temporarily-out-stock.jpg" alt="Pagina este in constructie" title="Exemplu de title" height="200" border="1" /><p style="font-size: 35px;
    font-family: Monaco, cursive; color: #ffff99;">
    Tipuri de jocuri disponibile pe website (in curand):</p>-->
       <?php include '../connect_database.php'; ?>   
<table  id="tabelinsert">
         <th id="tabelinsert1">Nume Produs</th>
         <th id="tabelinsert1">Descriere</th>
         <th id="tabelinsert1">Cantitate</th>
         <th id="tabelinsert1">Pret</th>
<?php
      $sql = "SELECT NumeProdus, Descriere, Cantitate, PretVanzare as `Pret` FROM `produse`;";
      $result = $conn->query($sql);
            if ($result->num_rows > 0) 
            {
                while($row = $result->fetch_assoc())
                {
                    echo "<tr><td> ". $row ['NumeProdus']. " </td><td> ".$row['Descriere']. " </td><td> ". $row['Cantitate']. "</td><td>".$row['Pret']. " RON</td></tr>";
                }
            } 
            else 
            {
            echo "0 results";
         }   

?>
</table class="tabeljocuri">
      <table>
         <tr id="tableabs">
            <th id="games">Jocuri MMORPG</th>
            <th id="games">Jocuri Actiune</th>
            <th id="games">Jocuri RTS</th>
            <th id="games">Jocuri FPS</th>
            <th id="games1" colspan="2">Figurine</th>
         </tr>
         <tr id="tableabs">
            <td id="tableabs">
               <img src="../Website images/GW2.png" ; style="width: 220px;height: 200px;">
            </td>
            <td id="tableabs">
               <img src="../Website images/CP2077.jpg" ; style="width: 220px;height: 200px;">
            </td>
            <td id="tableabs">
               <img src="../Website images/Anno1800.jpg" ; style="width: 220px;height: 200px;">
            </td>
            <td id="tableabs">
               <img src="../Website images/Borderlands.png" ; style="width: 220px;height: 200px;">
            </td>
            <td id="tableabs">
               <img src="../Website images/Glaceon.jpg" ; style="width: 220px;height: 200px;">
            </td>
            <td id="tableabs">
               <img src="../Website images/Goku.jpg" ; style="width: 220px;height: 200px;">
            </td>
         </tr>
         <tr>
            <td id="tableabs">
               <img src="../Website images/PoE.jpg" ; style="width: 220px;height: 200px;">
            </td>
            <td id="tableabs">
               <img src="../Website images/DS3.jfif" ; style="width: 220px;height: 200px;">
            </td>
            <td id="tableabs">
               <img src="../Website images/AoE4.jpg" ; style="width: 220px;height: 200px;">
            </td>
            <td id="tableabs">
               <img src="../Website images/Metro.png" ; style="width: 220px;height: 200px;">
            </td>
            <td id="tableabs">
               <img src="../Website images/Seshoumaru.webp" ; style="width: 220px;height: 200px;">
            </td>
            <td id="tableabs">
               <img src="../Website images/Ahsoka.webp" ; style="width: 220px;height: 200px;">
            </td>
         </tr>
         <tr>
            <td id="tableabs">
               <img src="../Website images/WoW.jpg" ; style="width: 220px;height: 200px;">
            </td>
            <td id="tableabs">
               <img src="../Website images/DMC5.jpg" ; style="width: 220px;height: 200px;">
            </td>
            <td id="tableabs">
               <img src="../Website images/SC2.jpg" ; style="width: 220px;height: 200px;">
            </td>
            <td id="tableabs">
               <img src="../Website images/Doom.jpg" ; style="width: 220px;height: 200px;">
            </td>
            <td id="tableabs">
               <img src="../Website images/Godspeed.webp" ; style="width: 220px;height: 200px;">
            </td>
            <td id="tableabs">
               <img src="../Website images/Spidey.webp" ; style="width: 220px;height: 200px;">
            </td>
         </tr>
      </table>
      <p>Nota**: Pentru figurine, acestea vor fi "random" din cele expuse pe site, nu se poate comanda o figurina specifica in acest moment! </p>
<form method="post">
   <strong  style="color: indianred; font-size: 25px;">Lista produse disponibile</strong><br/><br>
         <label for="nume">Nume:</label>
         <input type="text" id="nume" name="nume" value="";><br>
               <p id="numegresit" style="color: blanchedalmond; font-size: 20px;"></p>
         <label for="email">Email:</label>
         <input type="email" id="email" name="email" autocomplete="on" value="";><br>
            <p id="emailgresit" style="color: blanchedalmond; font-size: 20px;"></p>
         Selectare produs: <select name="NumeProdus">
               <?php
            include '../connect_database.php';
               $sql = "SELECT DISTINCT NumeProdus FROM `produse`;";
               $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){
               ?>
         <option value="<?php echo $row['NumeProdus'];?>"><?php echo $row['NumeProdus']?></option>
               <?php } 
               $conn->close();
               ?>
         </select>
      <br>
         Selectare cantitate: <select name="Cantitate">
               <?php
            include '../connect_database.php';
               $sql = "SELECT Cantitate FROM produse;";
               $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){
               ?>
         <option value="<?php echo $row['Cantitate'];?>"><?php echo $row['Cantitate']?></option>
               <?php } 
               $conn->close();
               ?>
         </select>
      <br>
         <button onclick="checkform()"> Submit </button>
</form>
      <!--<form><li style="color: #6666ff; padding-left: 20px; font-size: 20px;">Alte tipuri de jocuri: <input type="text" name="numele" value="" /><input type="submit" name="submit_button" value="Trimite mesaj" /></li></form>-->
      </ul>
      <br>
      <Br>
      <a href="https://www.facebook.com/" target="_blank">
         <img src="../Website images/Facebook-50x50.jpg" />
      </a>
      <a href="https://www.instagram.com/" target="_blank">
         <img src="../Website images/Instagram-50x50.jpg" />
      </a>
      <a href="https://web.whatsapp.com/" target="_blank">
         <img src="../Website images/WhatsApp-50x50.jpg" />
      </a>
      <a href="https://twitter.com/" target="_blank">
         <img src="../Website images/Twitter-50x50.jpg" />
      </a>
      <a href="mailto:contact@GamingByCata.com?subject=Information requests / Website issues report" style="background-color: #f2e6ff;color: deeppink;"> Contact (email only) </a>
   </body>
</html>