<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

<head>
    <br>
    <h2 class="col" style="border-bottom: 1px solid #f2f2f2;">Aplicatie de gestionare a facturilor</h2>
    <br>
</head>

<body>
    <form class="form-inline" action="facturi.php" method="POST">
        <div class="form-group mx-sm-3 mb-2">
            <input type="submit" class="btn btn-primary" name="afisare_facturi" value="Afisare Facturi Create"></input>
        </div>
    </form>

    <br> <br>
    <h3 class="col" style="border-bottom: 1px solid #f2f2f2;">Factura noua</h3>
    <br>

    <form class="col" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

        <h5>Tip factura</h5>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="radio_tip_factura" id="radio_fiscala" value="fiscala" checked>
            <label class="form-check-label" for="radio_fiscala">
                Fiscala
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="radio_tip_factura" id="radio_proforma" value="proforma">
            <label class="form-check-label" for="radio_proforma">
                Pro Forma
            </label>
        </div>
        <br>

        <h5>Detalii factura</h5>
        <div class="row">
            <div class="form-group col-sm-2">
                <label for="input_serie">Serie</label>
                <input type="text" class="form-control" id="input_serie" name="input_serie">
            </div>
            <div class="form-group col-sm-2">
                <label for="input_numar">Numar</label>
                <input type="number" class="form-control" id="input_numar" name="input_numar">
            </div>
            <div class="form-group col-sm-2">
                <label for="input_data">Data</label>
                <input type="date" class="form-control" id="input_data" name="input_data">
            </div>
            <div class="form-group col-sm-2">
                <label for="input_scadenta">Scadenta</label>
                <input type="date" class="form-control" id="input_scadenta" name="input_scadenta">
            </div>
        </div>
        <br>

        <div class="form-inline">
            <h5 class="col-sm-2">Detalii Furnizor</h5>
            <button type="button" class="btn btn-outline-dark col-sm-1" data-toggle="collapse" data-target="#collapse_furnizor" aria-expanded="false" aria-controls="collapse_furnizor">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-down-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z">
                    </path>
                </svg>
            </button>
        </div>
        <br>
        <div class="collapse" id="collapse_furnizor">
            <div class="row">
                <div class="form-group col-sm-2">
                    <label for="input_denumire_furnizor">Denumire firma</label>
                    <input type="text" class="form-control" id="input_denumire_furnizor" name="input_denumire_furnizor">
                </div>
                <div class="form-group col-sm-2">
                    <label for="input_cui_furnizor">CUI</label>
                    <input type="text" class="form-control" id="input_cui_furnizor" name="input_cui_furnizor">
                </div>
                <div class="form-group col-sm-2">
                    <label for="input_reg_com_furnizor">Reg. Com.</label>
                    <input type="text" class="form-control" id="input_reg_com_furnizor" name="input_reg_com_furnizor">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-2">
                    <label for="input_tara_furnizor">Tara</label>
                    <input type="text" class="form-control" id="input_tara_furnizor" name="input_tara_furnizor" value="Romania">
                </div>
                <div class="form-group col-sm-2">
                    <label for="input_judet_furnizor">Judet</label>
                    <input type="text" class="form-control" id="input_judet_furnizor" name="input_judet_furnizor">
                </div>
                <div class="form-group col-sm-2">
                    <label for="input_localitate_furnizor">Localitate</label>
                    <input type="text" class="form-control" id="input_localitate_furnizor" name="input_localitate_furnizor">
                </div>
                <div class="form-group col-sm-4">
                    <label for="input_adresa_furnizor">Adresa</label>
                    <input type="text" class="form-control" id="input_adresa_furnizor" name="input_adresa_furnizor">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-3">
                    <label for="input_cont_banc_furnizor">Cont Bancar</label>
                    <input type="text" class="form-control" id="input_cont_banc_furnizor" name="input_cont_banc_furnizor">
                </div>
                <div class="form-group col-sm-2">
                    <label for="input_banca_furnizor">Banca</label>
                    <input type="text" class="form-control" id="input_banca_furnizor" name="input_banca_furnizor">
                </div>
                <div class="form-group col-sm-2">
                    <label for="input_capital_social_furnizor">Capital Social (RON)</label>
                    <input type="number" class="form-control" id="input_capital_social_furnizor" name="input_capital_social_furnizor">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-2">
                    <label for="input_telefon_furnizor">Telefon</label>
                    <input type="tel" class="form-control" id="input_telefon_furnizor" name="input_telefon_furnizor">
                </div>
                <div class="form-group col-sm-3">
                    <label for="input_email_furnizor">Email</label>
                    <input type="email" class="form-control" id="input_email_furnizor" name="input_email_furnizor">
                </div>
            </div>
        </div>
        <br>

        <div class="form-inline">
            <h5 class="col-sm-2">Detalii Client</h5>
            <button type="button" class="btn btn-outline-dark col-sm-1" data-toggle="collapse" data-target="#collapse_client" aria-expanded="true" aria-controls="collapse_client">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-down-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z">
                    </path>
                </svg>
            </button>
        </div>
        <br>
        <div class="collapse" id="collapse_client">
            <div class="row">
                <div class="form-group col-sm-2">
                    <label for="input_denumire_client">Denumire firma</label>
                    <input type="text" class="form-control" id="input_denumire_client" name="input_denumire_client">
                </div>
                <div class="form-group col-sm-2">
                    <label for="input_cui_client">CUI</label>
                    <input type="text" class="form-control" id="input_cui_client" name="input_cui_client">
                </div>
                <div class="form-group col-sm-2">
                    <label for="input_reg_com_client">Reg. Com.</label>
                    <input type="text" class="form-control" id="input_reg_com_client" name="input_reg_com_client">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-2">
                    <label for="input_tara_client">Tara</label>
                    <input type="text" class="form-control" id="input_tara_client" name="input_tara_client" value="Romania">
                </div>
                <div class="form-group col-sm-2">
                    <label for="input_judet_client">Judet</label>
                    <input type="text" class="form-control" id="input_judet_client" name="input_judet_client">
                </div>
                <div class="form-group col-sm-2">
                    <label for="input_localitate_client">Localitate</label>
                    <input type="text" class="form-control" id="input_localitate_client" name="input_localitate_client">
                </div>
                <div class="form-group col-sm-4">
                    <label for="input_adresa_client">Adresa</label>
                    <input type="text" class="form-control" id="input_adresa_client" name="input_adresa_client">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-3">
                    <label for="input_cont_banc_client">Cont Bancar</label>
                    <input type="text" class="form-control" id="input_cont_banc_client" name="input_cont_banc_client">
                </div>
                <div class="form-group col-sm-2">
                    <label for="input_banca_client">Banca</label>
                    <input type="text" class="form-control" id="input_banca_client" name="input_banca_client">
                </div>
                <div class="form-group col-sm-2">
                    <label for="input_capital_social_client">Capital Social (RON)</label>
                    <input type="number" class="form-control" id="input_capital_social_client" name="input_capital_social_client">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-2">
                    <label for="input_telefon_client">Telefon</label>
                    <input type="tel" class="form-control" id="input_telefon_client" name="input_telefon_client">
                </div>
                <div class="form-group col-sm-3">
                    <label for="input_email_client">Email</label>
                    <input type="email" class="form-control" id="input_email_client" name="input_email_client">
                </div>
            </div>
        </div>
        <br>

        <h5>Detalii Produse</h5>
        <div class="row col">
            <table class="table table-hover col-md-11" id="myTable">
                <thead class="thead-dark table-bordered">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Descriere</th>
                        <th scope="col">Unit. M.</th>
                        <th scope="col">Cantitate</th>
                        <th scope="col">Pret Unitar</th>
                        <th scope="col">Valoare</th>
                        <th scope="col">Cota TVA</th>
                        <th scope="col">Valoare TVA</th>
                    </tr>
                </thead>
                <tbody>
                    <tr id="line_1">
                        <th scope="row" id="nr_crt_1">1</th>
                        <td>
                            <input type="text" class="form-control" name="descriere_1" id="descriere_1" placeholder="Ex: Anvelopa Pirelli">
                        </td>
                        <td><input type="text" class="form-control" name="um_1" id="um_1" placeholder="Ex: Bucata">
                        </td>
                        <td><input type="number" class="form-control" name="cantitate_1" id="cantitate_1" placeholder="Ex: 2">
                        </td>
                        <td><input type="number" class="form-control" name="pret_unit_1" id="pret_unit_1" placeholder="Ex: 500.00">
                        </td>
                        <td><input type="number" class="form-control" name="valoare_1" id="valoare_1" placeholder="Ex: 1000.00">
                        </td>
                        <td><input type="number" class="form-control" name="cota_tva_1" id="cota_tva_1" placeholder="Ex: 19">
                        </td>
                        <td><input type="number" class="form-control" name="valoare_tva_1" id="valoare_tva_1" placeholder="Ex: 190">
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            Subtotal
                        </td>
                        <td>
                            <input type="number" class="form-control" name="subtotal_valoare" value="0" readonly>
                        </td>
                        <td></td>
                        <td>
                            <input type="number" class="form-control" name="subtotal_tva" value="0" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="font-weight-bold">Total</td>
                        <td colspan="2">
                            <input type="number" class="form-control font-weight-bold" name="total" value="0" readonly>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <br>
        <input type="submit" class="btn btn-success" name="generare_factura" value="Generare Factura">
    </form>

    <ul class="nav justify-content-end">
        <li class="nav-item">
            <button class="btn btn-dark" id="rand_nou">Adauga produs</button>
        </li>
        <li class="nav-item">
            <button class="btn btn-danger" id="sterge_rand">Sterge produs</button>
        </li>
    </ul>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</body>

<?php
//includem fisierul cu clasele
include 'insert.php';

//error_reporting(0);

function inserare_furnizor() //inseram datele furnizorului intr-un obiect
{
    $furnizor = new Firma;
    $furnizor->denumire = $_POST['input_denumire_furnizor'];
    $furnizor->cui = $_POST['input_cui_furnizor'];
    $furnizor->reg_com = $_POST['input_reg_com_furnizor'];
    $furnizor->tara = $_POST['input_tara_furnizor'];
    $furnizor->judet = $_POST['input_judet_furnizor'];
    $furnizor->localitate = $_POST['input_localitate_furnizor'];
    $furnizor->adresa = $_POST['input_adresa_furnizor'];
    $furnizor->cont_bancar = $_POST['input_cont_banc_furnizor'];
    $furnizor->banca = $_POST['input_banca_furnizor'];
    $furnizor->capital_social = $_POST['input_capital_social_furnizor'];
    $furnizor->telefon = $_POST['input_telefon_furnizor'];
    $furnizor->email = $_POST['input_email_furnizor'];
    return $furnizor;
}

function inserare_client() //inseram datele clientului intr-un obiect
{
    $client = new Firma;
    $client->denumire = $_POST['input_denumire_client'];
    $client->cui = $_POST['input_cui_client'];
    $client->reg_com = $_POST['input_reg_com_client'];
    $client->tara = $_POST['input_tara_client'];
    $client->judet = $_POST['input_judet_client'];
    $client->localitate = $_POST['input_localitate_client'];
    $client->adresa = $_POST['input_adresa_client'];
    $client->cont_bancar = $_POST['input_cont_banc_client'];
    $client->banca = $_POST['input_banca_client'];
    $client->capital_social = $_POST['input_capital_social_client'];
    $client->telefon = $_POST['input_telefon_client'];
    $client->email = $_POST['input_email_client'];
    return $client;
}

function inserare_produse($linii) //inseram datele produselor intr-un array de obiecte
{
    $produse = array();
    for ($linia = 1; $linia <= $linii; $linia++) {
        $produs = new Produs();
        if (empty($_POST['descriere_' . $linia])) {
            $produs->descriere = "";
        } else {
            $produs->descriere = $_POST['descriere_' . $linia];
        }
        if (empty($_POST['um_' . $linia])) {
            $produs->unitate_masura = "";
        } else {
            $produs->unitate_masura = $_POST['um_' . $linia];
        }
        if (empty($_POST['cantitate_' . $linia])) {
            $produs->cantitate = "";
        } else {
            $produs->cantitate = $_POST['cantitate_' . $linia];
        }
        if (empty($_POST['pret_unit_' . $linia])) {
            $produs->pret_unitar = "";
        } else {
            $produs->pret_unitar = $_POST['pret_unit_' . $linia];
        }
        if (empty($_POST['valoare_' . $linia])) {
            $produs->valoare = "";
        } else {
            $produs->valoare = $_POST['valoare_' . $linia];
        }
        if (empty($_POST['cota_tva_' . $linia])) {
            $produs->cota_tva = "";
        } else {
            $produs->cota_tva = $_POST['cota_tva_' . $linia];
        }
        if (empty($_POST['valoare_tva_' . $linia])) {
            $produs->valoare_tva = "";
        } else {
            $produs->valoare_tva = $_POST['valoare_tva_' . $linia];
        }
        $produse[] = $produs;
    }
    return $produse;
}

function inserare_factura()
{
    $factura = new Factura;
    $factura->tip_factura = $_POST['radio_tip_factura'];
    $factura->serie = $_POST['input_serie'];
    $factura->numar = $_POST['input_numar'];
    $factura->data = $_POST['input_data'];
    $factura->scadenta = $_POST['input_scadenta'];
    $factura->valoare = $_POST['subtotal_valoare'];
    $factura->valoare_tva = $_POST['subtotal_tva'];
    $factura->total = $_POST['total'];
    return $factura;
}

function inserare_in_db(Firma $client, Firma $furnizor, array $produse, Factura $factura)
{
    //date de conectare la baza de date 
    $servername = "remotemysql.com";
    $username = "ALMtbDx7gH";
    $password = "WCvE5R5BGN";
    $dbname = "ALMtbDx7gH";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        $sql_furnizor = "INSERT INTO furnizor (denumire, cui, reg_com, tara, judet, localitate, adresa, cont_bancar, banca, capital_social, telefon, email)
VALUES ('$furnizor->denumire', '$furnizor->cui', '$furnizor->reg_com', '$furnizor->tara', '$furnizor->judet', '$furnizor->localitate', '$furnizor->adresa', '$furnizor->cont_bancar', '$furnizor->banca', $furnizor->capital_social, $furnizor->telefon, '$furnizor->email')";

        if ($conn->query($sql_furnizor) === FALSE) {
            echo "Error: " . $sql_furnizor . "<br>" . $conn->error;
        }

        $sql_client = "INSERT INTO client (denumire, cui, reg_com, tara, judet, localitate, adresa, cont_bancar, banca, capital_social, telefon, email)
VALUES ('$client->denumire', '$client->cui', '$client->reg_com', '$client->tara', '$client->judet', '$client->localitate', '$client->adresa', '$client->cont_bancar', '$client->banca', $client->capital_social, $client->telefon, '$client->email')";

        if ($conn->query($sql_client) === FALSE) {
            echo "Error: " . $sql_client . "<br>" . $conn->error;
        }

        $nr_produse = 0;
        foreach ($produse as $produs) {
            $sql_produs = "INSERT INTO produs (descriere, unitate_masura, cantitate, pret_unit, valoare, cota_tva, valoare_tva)
VALUES ('$produs->descriere','$produs->unitate_masura', $produs->cantitate, $produs->pret_unitar, $produs->valoare, $produs->cota_tva, $produs->valoare_tva)";

            if ($conn->query($sql_produs) === FALSE) {
                echo "Error: " . $sql_produs . "<br>" . $conn->error;
            }
            $nr_produse++;
        }

        $date_furnizor = $conn->query("SELECT id from furnizor ORDER BY id DESC LIMIT 1");
        $row_f = $date_furnizor->fetch_assoc();
        $id_furnizor = $row_f["id"];
        $date_client = $conn->query("SELECT id from client ORDER BY id DESC LIMIT 1");
        $row_c = $date_client->fetch_assoc();
        $id_client = $row_c["id"];
        echo $id_furnizor;


        $sql_factura = "INSERT INTO factura (id_furnizor, id_client, tip_factura, serie, numar, data_emiterii, scadenta, subtotal_valoare, subtotal_tva, total)
VALUES ($id_furnizor, $id_client,'$factura->tip_factura','$factura->serie', $factura->numar, '$factura->data', '$factura->scadenta', $factura->valoare, $factura->valoare_tva, $factura->total)";

        if ($conn->query($sql_factura) === FALSE) {
            echo "Error: " . $sql_factura . "<br>" . $conn->error;
        }

        $date_factura = $conn->query("SELECT id from factura ORDER BY id DESC LIMIT 1");
        $row_fac = $date_factura->fetch_assoc();
        $id_factura = $row_fac["id"];

        $sql_toate_produsele = "SELECT id FROM produs ORDER BY id DESC LIMIT $nr_produse";
        $query = mysqli_query($conn, $sql_toate_produsele);
        if ($query) {
            while ($row = mysqli_fetch_assoc($query)) {
                $id_produs_db = $row['id'];
                $sql_factura_produs = "INSERT INTO factura_produs (id_factura, id_produs)
                VALUES ($id_factura, $id_produs_db)";
                if ($conn->query($sql_factura_produs) === FALSE) {
                    echo "Error: " . $sql_factura_produs . "<br>" . $conn->error;
                }
            }
        }
    }
    $conn->close();
}

function nr_linii()
{
    $linia = 1;
    while (!is_null($_REQUEST['descriere_' . $linia])) {
        $linia++;
    }
    return $linia - 1;
}

function produse_complete(array $produse)
{
    foreach ($produse as $produs) {
        if (empty($produs->descriere) || empty($produs->unitate_masura) || empty($produs->cantitate) || empty($produs->pret_unitar) || empty($produs->valoare) || empty($produs->cota_tva) || empty($produs->valoare_tva)) {
            return FALSE;
        }
    }
    return TRUE;
}



if (isset($_POST['generare_factura'])) {
    $factura = inserare_factura();
    if (empty($factura->serie) || empty($factura->numar) || empty($factura->data) || empty($factura->scadenta)) {
        echo '<script>alert("Nu ati completat toate datele facturii! (Seria, numarul, data sau scadenta)");</script>';
        die();
    } else {
        $furnizor = inserare_furnizor();
        if (empty($furnizor->denumire) || empty($furnizor->cui) || empty($furnizor->reg_com) || empty($furnizor->tara) || empty($furnizor->judet) || empty($furnizor->localitate) || empty($furnizor->adresa) || empty($furnizor->cont_bancar) || empty($furnizor->banca) || empty($furnizor->capital_social) || empty($furnizor->telefon) || empty($furnizor->email)) {
            echo '<script>alert("Nu ati completat toate datele furnizorului!");</script>';
            die();
        } else {
            $client = inserare_client();
            if (empty($client->denumire) || empty($client->cui) || empty($client->reg_com) || empty($client->tara) || empty($client->judet) || empty($client->localitate) || empty($client->adresa) || empty($client->cont_bancar) || empty($client->banca) || empty($client->capital_social) || empty($client->telefon) || empty($client->email)) {
                echo '<script>alert("Nu ati completat toate datele clientului!");</script>';
                die();
            } else {
                $produse = inserare_produse(nr_linii());
                if (produse_complete($produse)) {
                    inserare_in_db($client, $furnizor, $produse, $factura);
                    echo '<script>alert("Factura generata cu succes!");</script>';
                } else {
                    echo '<script>alert("Nu ati completat toate datele produselor!");</script>';
                    die();
                }
            }
        }
    }
}

?>

<script>
    var html = '<tr id="line_1">\
                        <th scope="row" id="nr_crt_1">1</th>\
                        <td>\
                            <input type="text" class="form-control" name="descriere_1" id="descriere_1">\
                        </td>\
                        <td><input type="text" class="form-control" name="um_1" id="um_1">\
                        </td>\
                        <td><input type="number" class="form-control" name="cantitate_1" id="cantitate_1">\
                        </td>\
                        <td><input type="number" class="form-control" name="pret_unit_1" id="pret_unit_1">\
                        </td>\
                        <td><input type="number" class="form-control" name="valoare_1" id="valoare_1">\
                        </td>\
                        <td><input type="number" class="form-control" name="cota_tva_1" id="cota_tva_1">\
                        </td>\
                        <td><input type="number" class="form-control" name="valoare_tva_1" id="valoare_tva_1">\
                        </td>\
                    </tr>';



    $(function() {

        var linii = $("#myTable > tbody > tr").length;
        $('tbody').sortable();

        $('#rand_nou').click(function() {
            linii++;
            var rand_nou = html.replace(/1/g, linii);
            $('tbody').append(rand_nou);
        });
        $('#sterge_rand').click(function() {
            $('tr').get(linii).remove();
            linii--;
        });
    })
</script>

</html>