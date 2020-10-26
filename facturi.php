<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <br>
    <h2 class="col" style="border-bottom: 1px solid #f2f2f2;">Aplicatie de gestionare a facturilor</h2>
    <br>
    <form class="col" action="index.php" method="POST">
        <input type="submit" class="btn btn-success" name="factura_noua" value="Creare Factura Noua">
    </form>
    <br>
    <h3 class="col" style="border-bottom: 1px solid #f2f2f2;">Lista facturilor</h3>
    <br>
</head>

<body>
    <form class="col form-inline" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <select class="custom-select" id="optiuni_cautare" name="optiuni_cautare">
            <option selected value="">Cautare dupa...</option>
            <option value="serie">Serie</option>
            <option value="numar">Numar</option>
            <option value="data_emiterii">Data Emiterii</option>
            <option value="scadenta">Data Scadentei</option>
            <option value="denumire_furnizor">Furnizor</option>
            <option value="denumire_client">Client</option>
            <option value="total">Total Plata</option>
        </select>
        <input type="text" class="form-control" id="input_cautare" name="input_cautare">
        <input type="submit" class="btn btn-dark" name="buton_cautare" value="Cauta">
    </form>
</body>

<script>

</script>

</html>
<?php
error_reporting(0);

if (isset($_POST['afisare_facturi'])) {
    afiseaza_facturi("toate", "toate");
}

if (isset($_POST['buton_cautare'])) {
    if (!empty($_POST['optiuni_cautare']) || !empty($_POST['input_cautare'])) {
        $selected = $_POST['optiuni_cautare'];
        $input_cautare = $_POST['input_cautare'];
        afiseaza_facturi($selected, $input_cautare);
    } else {
        afiseaza_facturi("toate", "toate");
    }
}

function seteaza_inceput_tabel()
{
    $html_inceput_tabel = "<div class=\"col\">
<table class=\"table table-hover col-sm-10\" id=\"tabel_facturi\">
    <thead class=\"thead-dark table-bordered\">
        <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">Tip</th>
            <th scope=\"col\">Serie</th>
            <th scope=\"col\">Numar</th>
            <th scope=\"col\">Data</th>
            <th scope=\"col\">Scadenta</th>
            <th scope=\"col\">Furnizor</th>
            <th scope=\"col\">Client</th>
            <th scope=\"col\">Total</th>
            <th scope=\"col\"></th>
        </tr>
    </thead>
    <tbody id=\"table_body\">";
    return $html_inceput_tabel;
}
function seteaza_sf_tabel()
{
    $html_sf_tabel = "</tbody>
</table>
</div>";
    return $html_sf_tabel;
}

function afiseaza_facturi($optiune_cautare, $input_cautare)
{
    
    echo seteaza_inceput_tabel();
    //date de conectare la baza de date 
    $servername = "remotemysql.com";
    $username = "ALMtbDx7gH";
    $password = "WCvE5R5BGN";
    $dbname = "ALMtbDx7gH";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql_toate_facturile = "";
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        $nr_linii = 0;
        if ($optiune_cautare == "toate" && $input_cautare == "toate") {
            $sql_toate_facturile = "SELECT id, id_furnizor, id_client, tip_factura, serie, numar, data_emiterii, scadenta, total FROM factura ORDER BY id DESC";
        } else {
            if ($optiune_cautare == "denumire_furnizor") {
                $date_furnizor = $conn->query("SELECT id from furnizor where denumire LIKE '%$input_cautare%'");
                $row_furnizor = $date_furnizor->fetch_assoc();
                if ($row_furnizor != NULL) {
                    $id_furnizor = $row_furnizor["id"];
                    $sql_toate_facturile = "SELECT id, id_furnizor, id_client, tip_factura, serie, numar, data_emiterii, scadenta, total FROM factura WHERE id_furnizor = '$id_furnizor' ORDER BY id DESC";
                } else {
                    echo "<script>alert(\"Furnizorul nu s-a gasit\"); </script>";
                }
            } else {
                if ($optiune_cautare == "denumire_client") {
                    $date_client = $conn->query("SELECT id from client where denumire LIKE '%$input_cautare%'");
                    $row_client = $date_client->fetch_assoc();
                    if ($row_client != NULL) {
                        $id_client = $row_client["id"];
                        $sql_toate_facturile = "SELECT id, id_furnizor, id_client, tip_factura, serie, numar, data_emiterii, scadenta, total FROM factura WHERE id_client = '$id_client' ORDER BY id DESC";
                    } else {
                        echo "<script>alert(\"Clientul nu s-a gasit\"); </script>";
                    }
                } else {
                    $sql_toate_facturile = "SELECT id, id_furnizor, id_client, tip_factura, serie, numar, data_emiterii, scadenta, total FROM factura WHERE $optiune_cautare LIKE '%$input_cautare%' ORDER BY id DESC";
                }
            }
        }
        if ($sql_toate_facturile != "") {
            $query = mysqli_query($conn, $sql_toate_facturile);
            if ($query) {
                while ($row = mysqli_fetch_assoc($query)) {
                    $nr_linii++;
                    $id_factura = $row['id'];
                    $id_furnizor = $row['id_furnizor'];
                    $id_client = $row['id_client'];
                    $tip_factura = $row['tip_factura'];
                    $serie = $row['serie'];
                    $numar = $row['numar'];
                    $data_emiterii = $row['data_emiterii'];
                    $scadenta = $row['scadenta'];
                    $total = $row['total'];

                    //obtinem denumirea clientului din factura care e in alta tabela
                    $date_client = $conn->query("SELECT denumire from client where id=$id_client");
                    $row_client = $date_client->fetch_assoc();
                    $nume_client = $row_client["denumire"];

                    //obtinem denumirea furnizorului din factura care e in alta tabela
                    $date_furnizor = $conn->query("SELECT denumire from furnizor where id=$id_furnizor");
                    $row_furnizor = $date_furnizor->fetch_assoc();
                    $nume_furnizor = $row_furnizor["denumire"];

                    echo "
            <tr>
                <form action=\"continut_factura.php\" method=\"POST\">
                    <th>$nr_linii</th>
                    <td>$tip_factura</td>
                    <td>$serie</td>
                    <td>$numar</td>
                    <td>$data_emiterii</td>
                    <td>$scadenta</td>
                    <td>$nume_furnizor</td>
                    <td>$nume_client</td>
                    <td>$total</td>
                    <input type=\"hidden\" id=\"factura_id\" name=\"factura_id\" value=\"$id_factura\">
                    <td><input type=\"submit\" class=\"btn btn-dark\" name=\"afisare_factura\" value=\"Afiseaza\"></td>
                </form>
            </tr>
            ";
                }
            }
        }
    }
    echo seteaza_sf_tabel();
}
