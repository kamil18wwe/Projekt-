<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenCoinRegister</title>
</head>
<body style="background-color: green;">
    <div style="color:rgb(159, 206, 159);text-align: center;font-size: xx-large "> 
        GreenCoin
    </div> 
    <div style="color:black;text-align: center;font-size: medium "> 
        Witamy na stronie Rejestracji Greencoin.Załóż bezpłatnie konto.
    </div>
    <form>
    <table>
        <tr>
            <td>Imie:</td>
            <td><input type="text" name="Imie"></td>
        </tr>
        <tr>
            <td>Nazwisko:</td>
            <td><input type="text" name="Nazwisko"></td>
        </tr>
        <tr>
            <td>Numer:</td>
            <td><input type="int" name="Numer"></td>
        </tr>

        <tr>
            <td>E-mail:</td>
            <td><input type="text" name="E-mail"></td>   
        </tr>
        <tr>
            <td>Nick</td>
            <td><input type="text" name="Nick"></tr>
        <tr>
        <tr>
            <td>Hasło</td>
            <td><input type="text" name="Hasło"></tr>
        <tr>
            <th colspan=2><input type="submit" value="Zarejestruj"></th>
        </tr>
    </table>
    </div>
    </form>
    <?php

      $conn = mysqli_connect("localhost","root","","greencoin");

      if(mysqli_connect_errno()){
          echo "failed to connect to MySQL: " . mysqli_connect_error();
          exit();

      }

      if(!empty($_GET['Imie']) && !empty($_GET['Nazwisko'])){
          $insertsql = "INSERT INTO people VALUES (NULL, '" . $_GET['Imie'] . "', '" . $_GET['Nazwisko'] . "', '" . $_GET['E-mail'] . "' ,'" . $_GET['Numer'] . "','" . $_GET['Hasło'] . "','" . $_GET['Nick'] . "')";
          $result = mysqli_query($conn,$insertsql);

          if($result){
              echo "Osoba dodana do bazy!";
          }
        } else {
            echo "Wypełnij wszystkie pola";
        }
    ?>
</body>
    <a href="GreenCoinRewards.html">Nagrody</a>
    <a href="GreenCoinValue.html">Waluty</a>
    <a href="GreenCoinMainPage.html">Główna strona</a>
    <a href="GreenCoinLogin.html">Logowanie</a>
</html>