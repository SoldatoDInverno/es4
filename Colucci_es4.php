<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h3 {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        table th {
            background-color: lightblue;
            text-align: left;
            vertical-align: top;
            width: 225px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>
</head>
<body>
    <?php 
    $M=$_POST["Marca"];
    $Mod=$_POST["Modello"];
    $S=$_POST["Stato"];
    $A=$_POST["Anno"];
    $C=$_POST["Cilindrata"];
    $CV=$_POST["Cavalli"];
    $P=$_POST["Prezzo"];
    $T=$_POST["Targa"];
    $D=$_POST["Descrizione"];
    $AR = isset($_POST["Aria"]) ? $_POST["Aria"] : "";
    $VM = isset($_POST["Vernice"]) ? $_POST["Vernice"] : "";
    $TT = isset($_POST["Tetto"]) ? $_POST["Tetto"] : "";
    $IM = isset($_POST["Impianto"]) ? $_POST["Impianto"] : "";
    ?>
    <table>
            <tr><th>Marca</th>
                <td><?php
                echo $M; 
                ?></td>
                </tr>
            <tr>
                <th>Modello</th>
                <td><?php
                echo $Mod; 
                ?></td>
            </tr>
            <tr>
                <th>Stato</th>
                <td><?php
                echo $S; 
                ?></td>
            </tr>
            <tr>
                <th>Anno Costruzione</th>
                <td><?php
                echo $A; 
                ?></td>
            </tr>
            <tr>
                <th>Cilindrata</th>
                <td><?php
                echo $C; 
                ?></td>
            </tr>
            <tr>
                <th>Cavalli</th>
                <td><?php
                echo $CV; 
                echo "cv";
                ?></td>
            </tr>
            <tr>
                <th>Prezzo</th>
                <td><?php
                echo $P;
                echo "€" 
                ?></td>
            </tr>
            <tr>
                <th>Targa</th>
                <td><?php
                echo $T; 
                ?></td>
            </tr>
            <tr>
                <th>Accessori</th>
                <td><?php
                echo @$_POST["Aria"];
                echo "<br>";
                echo @$_POST["Vernice"];
                echo "<br>"; 
                echo @$_POST["Tetto"];
                echo "<br>"; 
                echo @$_POST["Impianto"];  
                ?></td>
                </tr>
            <tr>
                <th>Descrizione Aggiuntiva</th>
                <td><?php
                echo $D; 
                ?></td>
            </tr>
        </table>
    
    <?php 
    $f = fopen("F_AUTO.DAT", "a");
    $rec ="";
    $rec.=$M;
    $rec .=";";
    $rec.=$Mod;
    $rec .=";";
    $rec.=$S;
    $rec .=";";
    $rec.=$A;
    $rec .=";";
    $rec.=$C;
    $rec .=";";
    $rec.=$CV;
    $rec .=";";
    $rec.=$P;
    $rec .=";";
    $rec.=$T;
    $rec .=";";
    $rec.=$VM;
    $rec .=";";
    $rec.=$AR;
    $rec .=";";
    $rec.=$VM;
    $rec .=";";
    $rec.=$TT;
    $rec .=";";
    $rec.=$IM;
    $rec .=";";
    $rec.=$D;
    $rec .="\n";
    fwrite($f, $rec);
    fclose($f);
    ?>

</body>
</html>