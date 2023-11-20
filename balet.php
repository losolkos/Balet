<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>podaj godziny dla grup</h1>

    <form id='godziny'  method='post'>
        <br><label for="grupaA">ilość godzin dla grópyA:</label>
        <input type="number" name="grupaA" id="grupaA" >

        <br><label for="grupaB">ilość godzin dla grópyB:</label>
        <input type="number" name="grupaB" id="grupaB" >

        <br><label for="grupaC">ilość godzin dla grópyC:</label>
        <input type="number" name="grupaC" id="grupaC" >

        <br><label for="grupaD">ilość godzin dla grópyD:</label>
        <input type="number" name="grupaD" id="grupaD" >

        <br><label for="grupaE">ilość godzin dla grópyE:</label>
        <input type="number" name="grupaE" id="grupaE" >

        <br><label for="grupaF">ilość godzin dla grópyF:</label>
        <input type="number" name="grupaF" id="grupaF" >
        
        <br> <label for="grupaG">ilość godzin dla grópyG:</label>
        <input type="number" name="grupaG" id="grupaG" >

        <br><label for="grupaH">ilość godzin dla grópyH:</label>
        <input type="number" name="grupaH" id="grupaH" >

        <br> <label for="grupaI">ilość godzin dla grópyI:</label>
        <input type="number" name="grupaI" id="grupaI" >
        
        <br><label for="grupaJ">ilość godzin dla grópyJ:</label>
        <input type="number" name="grupaJ" id="grupaJ" >

        <br> <button type='submit' name='godziny'>Sprawdź</button>
    </form>
<?php
if(isset($_POST['godziny'])){
    if(isset($_POST['godziny'])){
        $godzinyGrupaA = isset($_POST['grupaA']) ? $_POST['grupaA'] : 0;
        $godzinyGrupaB = isset($_POST['grupaB']) ? $_POST['grupaB'] : 0;
        $godzinyGrupaC = isset($_POST['grupaC']) ? $_POST['grupaC'] : 0;
        $godzinyGrupaD = isset($_POST['grupaD']) ? $_POST['grupaD'] : 0;
        $godzinyGrupaE = isset($_POST['grupaE']) ? $_POST['grupaE'] : 0;
        $godzinyGrupaF = isset($_POST['grupaF']) ? $_POST['grupaF'] : 0;
        $godzinyGrupaG = isset($_POST['grupaG']) ? $_POST['grupaG'] : 0;
        $godzinyGrupaH = isset($_POST['grupaH']) ? $_POST['grupaH'] : 0;
        $godzinyGrupaI = isset($_POST['grupaI']) ? $_POST['grupaI'] : 0;
        $godzinyGrupaJ = isset($_POST['grupaJ']) ? $_POST['grupaJ'] : 0;
        $godzinysal = 10;
        $czas = 7;
        $czasogólny = $godzinyGrupaA + $godzinyGrupaB +$godzinyGrupaC + $godzinyGrupaD + $godzinyGrupaE + $godzinyGrupaF + $godzinyGrupaG + $godzinyGrupaH + $godzinyGrupaI + $godzinyGrupaJ; 
        $i = 0;
        do {
            $i++;
            $czasogólny -= $godzinysal;
        } while ($godzinyGrupaA > 0);
        echo "trzeba wynająć" , $i, "sale <br>";
    }
}
?>
</body>
</html>