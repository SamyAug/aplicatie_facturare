<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

<head>
    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
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

    <br>
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
            <div class="col-sm-1">Tip client:</div>
            <div class="form-check col-sm-1">
                <input class="form-check-input" type="radio" name="radio_tip_client" id="radio_client_firma" value="client_firma" data-toggle="collapse" data-target="#collapse_client_firma" aria-expanded="true" aria-controls="collapse_client_firma">
                <label class="form-check-label" for="radio_client_firma">
                    Firma
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="radio_tip_client" id="radio_client_persoana" value="client_persoana" data-toggle="collapse" data-target="#collapse_client_persoana" aria-expanded="true" aria-controls="collapse_client_persoana">
                <label class="form-check-label" for="radio_client_persoana">
                    Persoana Fizica
                </label>
            </div>
        </div>
        <br>

        <!-- Date despre client, daca acesta este persoana juridica/firma -->
        <div class="collapse" id="collapse_client_firma">
            <div class="row">
                <div class="form-group col-sm-2">
                    <label for="input_denumire_client_firma">Denumire firma</label>
                    <input type="text" class="form-control" id="input_denumire_client_firma" name="input_denumire_client_firma">
                </div>
                <div class="form-group col-sm-2">
                    <label for="input_cui_client_firma">CUI</label>
                    <input type="text" class="form-control" id="input_cui_client_firma" name="input_cui_client_firma">
                </div>
                <div class="form-group col-sm-2">
                    <label for="input_reg_com_client_firma">Reg. Com.</label>
                    <input type="text" class="form-control" id="input_reg_com_client_firma" name="input_reg_com_client_firma">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-2">
                    <label for="input_tara_client_firma">Tara</label>
                    <input type="text" class="form-control" id="input_tara_client_firma" name="input_tara_client_firma" value="Romania">
                </div>
                <div class="form-group col-sm-2">
                    <label for="input_judet_client_firma">Judet</label>
                    <input type="text" class="form-control" id="input_judet_client_firma" name="input_judet_client_firma">
                </div>
                <div class="form-group col-sm-2">
                    <label for="input_localitate_client_firma">Localitate</label>
                    <input type="text" class="form-control" id="input_localitate_client_firma" name="input_localitate_client_firma">
                </div>
                <div class="form-group col-sm-4">
                    <label for="input_adresa_client_firma">Adresa</label>
                    <input type="text" class="form-control" id="input_adresa_client_firma" name="input_adresa_client_firma">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-3">
                    <label for="input_cont_banc_client_firma">Cont Bancar</label>
                    <input type="text" class="form-control" id="input_cont_banc_client_firma" name="input_cont_banc_client_firma">
                </div>
                <div class="form-group col-sm-2">
                    <label for="input_banca_client_firma">Banca</label>
                    <input type="text" class="form-control" id="input_banca_client_firma" name="input_banca_client_firma">
                </div>
                <div class="form-group col-sm-2">
                    <label for="input_capital_social_client_firma">Capital Social (RON)</label>
                    <input type="number" class="form-control" id="input_capital_social_client_firma" name="input_capital_social_client_firma">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-2">
                    <label for="input_telefon_client_firma">Telefon</label>
                    <input type="tel" class="form-control" id="input_telefon_client_firma" name="input_telefon_client_firma">
                </div>
                <div class="form-group col-sm-3">
                    <label for="input_email_client_firma">Email</label>
                    <input type="email" class="form-control" id="input_email_client_firma" name="input_email_client_firma">
                </div>
            </div>
        </div>

        <!-- Date despre client daca acesta este persoana fizica -->
        <div class="collapse" id="collapse_client_persoana">
            <div class="row">
                <div class="form-group col-sm-2">
                    <label for="input_nume_client_persoana">Nume si Prenume</label>
                    <input type="text" class="form-control" id="input_nume_client_persoana" name="input_nume_client_persoana">
                </div>
                <div class="form-group col-sm-2">
                    <label for="input_cnp_client_persoana">CNP</label>
                    <input type="text" class="form-control" id="input_cnp_client_persoana" name="input_cnp_client_persoana">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-2">
                    <label for="input_tara_client_persoana">Tara</label>
                    <input type="text" class="form-control" id="input_tara_client_persoana" name="input_tara_client_persoana" value="Romania">
                </div>
                <div class="form-group col-sm-2">
                    <label for="input_judet_client_persoana">Judet</label>
                    <input type="text" class="form-control" id="input_judet_client_persoana" name="input_judet_client_persoana">
                </div>
                <div class="form-group col-sm-2">
                    <label for="input_localitate_client_persoana">Localitate</label>
                    <input type="text" class="form-control" id="input_localitate_client_persoana" name="input_localitate_client_persoana">
                </div>
                <div class="form-group col-sm-4">
                    <label for="input_adresa_client_persoana">Adresa</label>
                    <input type="text" class="form-control" id="input_adresa_client_persoana" name="input_adresa_client_persoana">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-2">
                    <label for="input_telefon_client_persoana">Telefon</label>
                    <input type="tel" class="form-control" id="input_telefon_client_persoana" name="input_telefon_client_persoana">
                </div>
                <div class="form-group col-sm-3">
                    <label for="input_email_client_persoana">Email</label>
                    <input type="email" class="form-control" id="input_email_client_persoana" name="input_email_client_persoana">
                </div>
            </div>
        </div>

        <br>

        <h5>Detalii Produse</h5>
        <div class="row col">
            <table class="table table-hover col-md-12" id="myTable">
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
                        <td><input type="number" class="form-control" name="cantitate_1" id="cantitate_1" min="0" step="0.01" placeholder="Ex: 2">
                        </td>
                        <td><input type="number" class="form-control" name="pret_unit_1" id="pret_unit_1" min="0" step="0.01" placeholder="Ex: 500.00" onchange="calculeaza_valoare(1)">
                        </td>
                        <td><input type="number" class="form-control" name="valoare_1" id="valoare_1" min="0" step="0.01" placeholder="Ex: 1000.00">
                        </td>
                        <td><input type="number" class="form-control" name="cota_tva_1" id="cota_tva_1" min="0" step="0.01" placeholder="Ex: 19" onchange="calculeaza_tva(1)">
                        </td>
                        <td><input type="number" class="form-control" name="valoare_tva_1" id="valoare_tva_1" min="0" step="0.01" placeholder="Ex: 190">
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
                            <input type="number" class="form-control" id="subtotal_valoare" name="subtotal_valoare" readonly>
                        </td>
                        <td></td>
                        <td>
                            <input type="number" class="form-control" id="subtotal_tva" name="subtotal_tva" readonly>
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
                            <input type="number" class="form-control font-weight-bold" id="total" name="total" readonly>
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

error_reporting(0);

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

function inserare_client_firma() //inseram datele clientului intr-un obiect
{
    $client_firma = new Firma;
    $client_firma->denumire = $_POST['input_denumire_client_firma'];
    $client_firma->cui = $_POST['input_cui_client_firma'];
    $client_firma->reg_com = $_POST['input_reg_com_client_firma'];
    $client_firma->tara = $_POST['input_tara_client_firma'];
    $client_firma->judet = $_POST['input_judet_client_firma'];
    $client_firma->localitate = $_POST['input_localitate_client_firma'];
    $client_firma->adresa = $_POST['input_adresa_client_firma'];
    $client_firma->cont_bancar = $_POST['input_cont_banc_client_firma'];
    $client_firma->banca = $_POST['input_banca_client_firma'];
    $client_firma->capital_social = $_POST['input_capital_social_client_firma'];
    $client_firma->telefon = $_POST['input_telefon_client_firma'];
    $client_firma->email = $_POST['input_email_client_firma'];
    return $client_firma;
}

function inserare_client_persoana() //inseram datele clientului intr-un obiect
{
    $client_persoana = new PersoanaFizica;
    $client_persoana->nume = $_POST['input_nume_client_persoana'];
    $client_persoana->cnp = $_POST['input_cnp_client_persoana'];
    $client_persoana->tara = $_POST['input_tara_client_persoana'];
    $client_persoana->judet = $_POST['input_judet_client_persoana'];
    $client_persoana->localitate = $_POST['input_localitate_client_persoana'];
    $client_persoana->adresa = $_POST['input_adresa_client_persoana'];
    $client_persoana->telefon = $_POST['input_telefon_client_persoana'];
    $client_persoana->email = $_POST['input_email_client_persoana'];
    return $client_persoana;
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

//functia de inserare a datelor facturii daca clientul este persoana juridica
function inserare_in_db_firma(Firma $client, Firma $furnizor, array $produse, Factura $factura)
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

//functia de inserare a datelor facturii daca clientul este persoana fizica
function inserare_in_db_persoana(PersoanaFizica $client, Firma $furnizor, array $produse, Factura $factura)
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
VALUES ('$client->nume', '$client->cnp', NULL, '$client->tara', '$client->judet', '$client->localitate', '$client->adresa', NULL, NULL, NULL, $client->telefon, '$client->email')";

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
            if ($_POST['radio_tip_client'] == "client_firma") {
                $client_firma = inserare_client_firma();
                if (empty($client_firma->denumire) || empty($client_firma->cui) || empty($client_firma->reg_com) || empty($client_firma->tara) || empty($client_firma->judet) || empty($client_firma->localitate) || empty($client_firma->adresa) || empty($client_firma->cont_bancar) || empty($client_firma->banca) || empty($client_firma->capital_social) || empty($client_firma->telefon) || empty($client_firma->email)) {
                    echo '<script>alert("Nu ati completat toate datele clientului!");</script>';
                    die();
                } else {
                    $produse = inserare_produse(nr_linii());
                    if (produse_complete($produse)) {
                        inserare_in_db_firma($client_firma, $furnizor, $produse, $factura);
                        echo '<script>alert("Factura generata cu succes!");</script>';
                    } else {
                        echo '<script>alert("Nu ati completat toate datele produselor!");</script>';
                        die();
                    }
                }
            }
            if ($_POST['radio_tip_client'] == "client_persoana") {
                $client_persoana = inserare_client_persoana();
                if (empty($client_persoana->nume) || empty($client_persoana->cnp) || empty($client_persoana->tara) || empty($client_persoana->judet) || empty($client_persoana->localitate) || empty($client_persoana->adresa)  || empty($client_persoana->telefon) || empty($client_persoana->email)) {
                    echo '<script>alert("Nu ati completat toate datele clientului!");</script>';
                    die();
                } else {
                    $produse = inserare_produse(nr_linii());
                    if (produse_complete($produse)) {
                        inserare_in_db_persoana($client_persoana, $furnizor, $produse, $factura);
                        echo '<script>alert("Factura generata cu succes!");</script>';
                    } else {
                        echo '<script>alert("Nu ati completat toate datele produselor!");</script>';
                        die();
                    }
                }
            }
            if ($_POST['radio_tip_factura'] == "") {
                echo '<script>alert("Nu ati ales tipul de client!");</script>';
                die();
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
                        <td><input type="number" class="form-control" name="cantitate_1" id="cantitate_1" min="0" step="0.01">\
                        </td>\
                        <td><input type="number" class="form-control" name="pret_unit_1" id="pret_unit_1" min="0" step="0.01" onchange="calculeaza_valoare(1)">\
                        </td>\
                        <td><input type="number" class="form-control" name="valoare_1" id="valoare_1" min="0" step="0.01">\
                        </td>\
                        <td><input type="number" class="form-control" name="cota_tva_1" id="cota_tva_1" min="0" step="0.01" onchange="calculeaza_tva(1)">\
                        </td>\
                        <td><input type="number" class="form-control" name="valoare_tva_1" id="valoare_tva_1" min="0" step="0.01">\
                        </td>\
                    </tr>';



    $(function() {

        var linii = $("#myTable > tbody > tr").length;
        $('tbody').sortable(); //functia care permite rearanjarea randurilor in tabel

        $('#rand_nou').click(function() { //functia care permite adaugarea unui nou rand in tabel --- se insereaza cod-ul html de mai sus
            linii++;
            var rand_nou = html.replace(/1/g, linii); //fiecare nume a elementelor din care e compusa linia e diferit deoarece facem replace
            $('tbody').append(rand_nou);
        });
        $('#sterge_rand').click(function() { //functia care sterge o linie la apasarea butonului
            $('tr').get(linii).remove();
            linii--;
            calculeaza_valoare(linii);
            calculeaza_tva(linii);
        });

        $('#radio_client_firma').click(function() {
            if ($('#radio_client_persoana').attr('aria-expanded') == "true") {
                $('#radio_client_persoana').addClass("collapsed");
                $('#radio_client_persoana').attr({
                    "aria-expanded": "false"
                });
                $('#collapse_client_persoana').removeClass("show");
            }
        });

        $('#radio_client_persoana').click(function() {
            if ($('#radio_client_firma').attr('aria-expanded') == "true") {
                $('#radio_client_firma').addClass("collapsed");
                $('#radio_client_firma').attr({
                    "aria-expanded": "false"
                });
                $('#collapse_client_firma').removeClass("show");
            }
        });

    })

    //functia care calculeaza valoarea produselor pe fiecare linie fara tva --- numar de produse * pret pe bucata
    function calculeaza_valoare(id) {
        var pret_unitar = document.getElementById("pret_unit_" + id).value;
        var cantitate = document.getElementById("cantitate_" + id).value;
        document.getElementById("valoare_" + id).value = (pret_unitar * cantitate).toFixed(2);
        calc_subtotal_valoare(id);
    }

    //functia care calculeaza tva-ul fiecarei linii --- acesta este un procent din valoarea produsului
    function calculeaza_tva(id) {
        var valoare = document.getElementById("valoare_" + id).value;
        var cota_tva = document.getElementById("cota_tva_" + id).value;
        document.getElementById("valoare_tva_" + id).value = (valoare * cota_tva / 100).toFixed(2);
        calc_subtotal_tva(id);
    }

    //functia care calculeaza valoarea totala a produselor fara tva
    function calc_subtotal_valoare(nr_linii) {
        var subtotal = 0;
        for (var i = 1; i <= nr_linii; i++) {
            var valoare = Number(document.getElementById("valoare_" + i).value);
            subtotal = Number(subtotal) + Number(valoare);
        }
        document.getElementById("subtotal_valoare").value = (Number(subtotal)).toFixed(2);
        calc_total();
    }

    //functia care calculeaza tva-ul total al produselor
    function calc_subtotal_tva(nr_linii) {
        var subtotal = 0;
        for (var i = 1; i <= nr_linii; i++) {
            var valoare = Number(document.getElementById("valoare_tva_" + i).value);
            subtotal = Number(subtotal) + Number(valoare);
        }
        document.getElementById("subtotal_tva").value = (Number(subtotal)).toFixed(2);
        calc_total();
    }

    //functia care calculeaza totalul facturii
    function calc_total() {
        var subtotal_valoare = Number(document.getElementById("subtotal_valoare").value);
        var subtotal_tva = Number(document.getElementById("subtotal_tva").value);
        document.getElementById("total").value = (subtotal_valoare + subtotal_tva).toFixed(2);
    }
</script>

</html>