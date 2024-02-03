<!DOCTYPE html>
<html>
   <head>
      <title>GamingByCata</title>
      <h1 id="Title"><a href="http://localhost/Proiect/index.php"><img src="Website images/Kitsune-logo.jpg" style="height: 85px;" alt="logo"/></a>Kitsune Gaming</h1>       
      <meta name="keywards" content="gaming, jocuri, cosplay, costume, figurine" />
      <meta name="author" content="Constantin Ioan Catalin" />
      <link rel="stylesheet" href="Referinte/Gaming.css">
      <script type="text/javascript" src="Scripts/script.js" defer></script>
   </head>
   <body class="homepage">
      <h1>
         <span class="page1">Website-ul unde poti gasi orice are legatura cu jocuri, figurine, cosplay si nu numai!</span>
      </h1>
      <br>
      <br>
      <table>
         <tr id="tableabs1">
            <th id="tableabs1">
               <a href="index.php">Home</a>
            </th>
            <br>
            <th id="tableabs1">
               <a href="Jocuri_si_Figurine/Jocuri_si_Figurine.php">Jocuri si Figurine</a>
            </th>
            <br>
            <th id="tableabs1">
               <a href="Cosplay/Costume-DIY/Cosplay.php">Costume Cosplay</a>
            </th>
         </tr>
      </table>
      <hr>
      <!--<img src="Website images/Homepage-spider.jpg" alt="Pagina este in constructie" title="Exemplu de title" height="800" border="1" />-->
      <p id="homep"> Bine ati venit pe site-ul <strong>Kitsune Gaming</strong>, website-ul creat de catre gameri pentru gameri! Fiind un jucator nou pe piata, stocul pentru jocuri si figurine este limitat, dar mai jos puteti lasa un mesaj cu produsele pe care vreti sa le aducem si lipsesc momentan sau daca doriti orice informatie. <br> Pentru moment sectiunea de cosplay contine doar poze de la evenimente si stiri despre urmatoarele evenimente din tara! </p>
      <p id="homep1"> In numele echipei din spatele acestui site va multumim pentru incredere si faptul ca ne sustineti! </p>
<?php 
      include 'connect_database.php';
         $sql = "INSERT INTO mesaje (nume, email, telefon, mesaj) VALUES ('".$_POST["nume"]."','".$_POST["email"]."','".$_POST['telefon']."','".$_POST["produs"]."')";

      if ($conn->query($sql) === TRUE) {
            echo header("refresh: 3, index.php");} 
      else {
            echo "Error: " . $sql . "<br>" . $conn->error;}
      $conn->close();
?>
      <hr>
      <a href="https://www.facebook.com/" target="_blank">
         <img src="Website images/Facebook-50x50.jpg" />
      </a>
      <a href="https://www.instagram.com/" target="_blank">
         <img src="Website images/Instagram-50x50.jpg" />
      </a>
      <a href="https://web.whatsapp.com/" target="_blank">
         <img src="Website images/WhatsApp-50x50.jpg" />
      </a>
      <a href="https://twitter.com/" target="_blank">
         <img src="Website images/Twitter-50x50.jpg" />
      </a>
      <a href="mailto:contact@GamingByCata.com?subject=Information requests / Website issues" style="background-color: #f2e6ff;color: deeppink;"> Contact (email only) </a>
   </body>
</html>