<?php
function calc()
{
    if (isset($_POST['valide'])) {
        $p = $_POST['ht'];
        $t = $_POST['tva'];
        $m = $p * $t / 100;
        $tt = $p + $m;
        return ['tt' => $tt, 'm' => $m];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>affichage</title>
</head>
<body>

    <fieldset>
        <legend>Saisir le prix HT et le taux de TVA</legend>
        <h4>prix hors taxe</h4>
        <input type="number" disabled="disabled" name="ht" value="<?php echo $_POST['ht'] ?>"/><br>
        <h4>Taux de TVA en %</h4>
        <input type="number" name="tva" value="<?php echo $_POST['tva'] ?>"/><br>
        <h4>Montant de tva</h4>
        <input type="number" name="tva" value="<?php echo ($_POST['ht'] * $_POST['tva'] / 100) ?>"/><br>
        <h4>Prix TTC</h4>
        <input type="number" name="tva" value="<?php echo calc()['tt'] ?>"/><br>
    </fieldset>


</body>
</html>