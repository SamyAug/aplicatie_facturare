<html>
<header>

</header>

<body>
    <style>
        /*antet*/
        .antet {
            border: 1px solid #000;
        }

        .blocuri_antet {
            box-sizing: border-box;
            display: inline-block;
            padding: 15px;
            text-align: left;
            vertical-align: top;
            width: 33.33%;
        }

        .blocuri_antet_dreapta {
            box-sizing: border-box;
            display: inline-block;
            padding: 15px;
            text-align: left;
            vertical-align: top;
            position: absolute;
            width: 33.33%;
        }

        /*table*/
        table {
            border: 1px solid #000;
            width: 100%;
        }

        td {
            border: 1px solid #000;
            border-top: none;
            vertical-align: top;
        }

        th {
            border: 1px solid #000;
            border-bottom: none;
            padding: 10px 2px;
            vertical-align: top;
        }

        .tabel {
            margin-top: 15px;
        }

        .nr_coloane {
            text-align: center;
        }

        /*preluarea informatiilor in tabel*/
        .continut_factura {
            border-bottom: none;
            border-top: none;
            font-size: 12px;
            line-height: 24px;
            padding: 0 4px;
            text-align: right;
        }

        .linie_observatii {
            border-right: 1px solid #000;
            border-left: 1px solid #000;
            border-bottom: 1px solid #000;
            padding: 3px;
        }

        .bloc_delegat {
            border-left: 1px solid #000;
            border-right: 1px solid #000;
            border-bottom: 1px solid #000;
            box-sizing: border-box;
            display: table-cell;
            padding: 3px;
            text-align: left;
            vertical-align: top;
            width: 377px;
        }

        /*blocuri pentru totaluri*/
        .format_totaluri {
            border-right: 1px solid #000;
            box-sizing: border-box;
            display: table-cell;
            text-align: right;
            line-height: 22px;
            width: 143px;
        }

        .total_comp {
            border-bottom: 1px solid #000;
            border-left: 1px solid #000;
            padding: 3px;
        }

        /*blocuri pentru sume*/
        .format_celule {
            border-right: 1px solid #000;
            border-bottom: 1px solid #000;
            box-sizing: border-box;
            display: table-cell;
            line-height: 28px;
            width: 1px;
        }

        .celule_sume {
            border-right: 1px solid #000;
            box-sizing: border-box;
            display: inline-block;
            padding-right: 3px;
            text-align: right;
        }
    </style>
</body>

</html>

<?php
error_reporting(0);

if (isset($_POST['afisare_factura'])) {
    $id = $_POST['factura_id'];
    $servername = "remotemysql.com";
    $username = "ALMtbDx7gH";
    $password = "WCvE5R5BGN";
    $dbname = "ALMtbDx7gH";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql_toate_facturile = "";
    // Check connection
    if ($conn->connect_error) {
        die();
    } else {
        //datele facturii
        $date_factura =  $conn->query("SELECT id_furnizor, id_client, tip_factura, serie, numar, data_emiterii, scadenta, subtotal_valoare, subtotal_tva, total FROM factura WHERE id = '$id'");
        $row_factura = $date_factura->fetch_assoc();
        $id_furnizor = $row_factura["id_furnizor"];
        $id_client = $row_factura["id_client"];
        $serie = $row_factura["serie"];
        $numar = $row_factura["numar"];
        $data_emiterii = $row_factura["data_emiterii"];
        $scadenta = $row_factura["scadenta"];
        $subtotal_valoare = $row_factura["subtotal_valoare"];
        $subtotal_tva = $row_factura["subtotal_tva"];
        $total = $row_factura["total"];

        //datele furnizorului
        $date_furnizor =  $conn->query("SELECT denumire, cui, reg_com, tara, judet, localitate, adresa, cont_bancar, banca, capital_social, telefon, email FROM furnizor WHERE id = '$id_furnizor'");
        $row_furnizor = $date_furnizor->fetch_assoc();
        $denumire_furnizor = $row_furnizor["denumire"];
        $cui_furnizor = $row_furnizor["cui"];
        $reg_com_furnizor = $row_furnizor["reg_com"];
        $tara_furnizor = $row_furnizor["tara"];
        $judet_furnizor = $row_furnizor["judet"];
        $localitate_furnizor = $row_furnizor["localitate"];
        $adresa_furnizor = $row_furnizor["adresa"];
        $cont_bancar_furnizor = $row_furnizor["cont_bancar"];
        $banca_furnizor = $row_furnizor["banca"];
        $capital_social_furnizor = $row_furnizor["capital_social"];
        $telefon_furnizor = $row_furnizor["telefon"];
        $email_furnizor = $row_furnizor["email"];

        //datele clientului
        $date_client =  $conn->query("SELECT denumire, cui, reg_com, tara, judet, localitate, adresa, cont_bancar, banca, capital_social, telefon, email FROM client WHERE id = '$id_client'");
        $row_client = $date_client->fetch_assoc();
        $denumire_client = $row_client["denumire"];
        $cui_client = $row_client["cui"];
        $reg_com_client = $row_client["reg_com"];
        $tara_client = $row_client["tara"];
        $judet_client = $row_client["judet"];
        $localitate_client = $row_client["localitate"];
        $adresa_client = $row_client["adresa"];
        $cont_bancar_client = $row_client["cont_bancar"];
        $banca_client = $row_client["banca"];
        $capital_social_client = $row_client["capital_social"];
        $telefon_client = $row_client["telefon"];
        $email_client = $row_client["email"];

        echo "<div class=\"vp-factura-wrapper\">
        <div style=\"font-family:'dejavu sans', sans-serif; font-size: 11px;\">
            <div class=\"antet\">
                <div class=\"blocuri_antet\">
                    <div><b>FURNIZOR:</b> $denumire_furnizor</div>
                    <div><b>CUI:</b> $cui_furnizor</div>
                    <div><b>REG. COM.:</b> $reg_com_furnizor</div>
                    <div><b>ADRESĂ:</b> $adresa_furnizor, $localitate_furnizor, $judet_furnizor</div>
                    <div><b>CONT:</b> $cont_bancar_furnizor</div>
                    <div><b>BANCĂ:</b> $banca_furnizor</div>
                    <div><b>CAPITAL SOCIAL:</b> $capital_social_furnizor lei</div>
                    <div><b>TELEFON:</b> $telefon_furnizor</div>
                    <div><b>EMAIL:</b> $email_furnizor lei</div>
                </div>
                <!--
		-->
                <div class=\"blocuri_antet\">
                    <h2 style=\"font-size:25px;margin-bottom:15px;text-align:center;\">FACTURĂ</h2>
                    <div style=\"padding-left: 35px\">
                        <div><b>SERIA:</b> $serie</div>
                        <div><b>NUMĂR:</b> $numar</div>
                        <div><b>DATA:</b> $data_emiterii</div>
                        <div><b>DATA SCADENTĂ:</b> $scadenta</div>
                    </div>
                </div>
                <!--
		-->
                <div class=\"blocuri_antet_dreapta\">
                    <div><b>CLIENT:</b> $denumire_client</div>
                    <div><b>CNP / CUI:</b> $cui_client</div>
                    <div><b>REG. COM.:</b> $reg_com_client</div>
                    <div><b>ADRESĂ:</b> $adresa_client, $localitate_client, $judet_client</div>
                    <div><b>CONT:</b> $cont_bancar_client</div>
                    <div><b>BANCĂ:</b> $banca_client</div>
                    <div><b>CAPITAL SOCIAL:</b> $capital_social_client lei</div>
                    <div><b>TELEFON:</b> $telefon_client</div>
                    <div><b>EMAIL:</b> $email_client lei</div>
                </div>
            </div>
            <table class=\"tabel\">
                <thead>
                    <tr>
                        <th style=\"width:30px\">NR.</th>
                        <th style=\"width:298px\">PRODUSE / SERVICII</th>
                        <th style=\"width:33px\">U.M.</th>
                        <th style=\"width:65px\">CANT.</th>
                        <th style=\"width:68px\">PREŢ<br>(fără TVA)</th>
                        <th style=\"width:90px\">VALOARE</th>
                        <th style=\"width:35px\">TVA</th>
                        <th style=\"width:85px\">VALOARE TVA</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td style=\"text-align: center\">- lei -</td>
                        <td style=\"text-align: center\">- lei -</td>
                        <td style=\"text-align: center\">%</td>
                        <td style=\"text-align: center\">- lei -</td>
                    </tr>
                </thead>
                <tbody>";

        //datele produselor
        $nr_lin = 0;
        $sql_factura_produs = "SELECT id_produs FROM factura_produs WHERE id_factura=$id";
        $query = mysqli_query($conn, $sql_factura_produs);
        if ($query) {
            while ($row = mysqli_fetch_assoc($query)) {
                $nr_lin++;
                $id_produs = $row['id_produs'];

                $date_produs = $conn->query("SELECT descriere, unitate_masura, cantitate, pret_unit, valoare, cota_tva, valoare_tva FROM produs WHERE id='$id_produs'");
                $row_produs = $date_produs->fetch_assoc();
                $descriere = $row_produs["descriere"];
                $um = $row_produs["unitate_masura"];
                $cantitate = $row_produs["cantitate"];
                $pret_unit = $row_produs["pret_unit"];
                $valoare = $row_produs["valoare"];
                $cota_tva = $row_produs["cota_tva"];
                $valoare_tva = $row_produs["valoare_tva"];
                echo "<tr>
                            <td class=\"continut_factura\" style=\"text-align: right;\">$nr_lin.</td>
                            <td class=\"continut_factura\" style=\"text-align: left;\">$descriere</td>
                            <td class=\"continut_factura\" style=\"text-align: left;\">$um</td>
                            <td class=\"continut_factura\">$cantitate</td>
                            <td class=\"continut_factura\">$pret_unit</td>
                            <td class=\"continut_factura\">$valoare</td>
                            <td class=\"continut_factura\">$cota_tva</td>
                            <td class=\"continut_factura\">$valoare_tva</td>
                        </tr>";
            }
        }

        echo "
                    <tr>
                        <td class=\"continut_factura\" style=\"height: 20px\"></td>
                        <td class=\"continut_factura\"></td>
                        <td class=\"continut_factura\"></td>
                        <td class=\"continut_factura\"></td>
                        <td class=\"continut_factura\"></td>
                        <td class=\"continut_factura\"></td>
                        <td class=\"continut_factura\"></td>
                        <td class=\"continut_factura\"></td>
                    </tr>
                </tbody>
            </table>
            <div class=\"linie_observatii\">
                <div><b>OBSERVAŢII:</b> </div>
            </div>
            <div style=\"display:table;width:100%\">
                <div class=\"format_totaluri\">
                    <div class=\"total_comp\">SUBTOTAL:</div>
                    <div class=\"total_comp\">TOTAL DE PLATĂ:</div>
                </div>
                <div class=\"format_celule\">
                    <div style=\"border-bottom: 1px solid black;\">
                        <div class=\"celule_sume\" style=\"width:95px\">$subtotal_valoare</div>
                        <div class=\"celule_sume\" style=\"border-right:0;width:95px;\">$subtotal_tva </div>
                    </div>
                    <div style=\"text-align:right;padding-right:3px;\">
                        <strong>$total lei</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>";
    }
}

function inserare_tr($linie, $descriere, $um, $cantitate, $pret_unit, $valoare, $cota_tva, $valoare_tva)
{
}
?>