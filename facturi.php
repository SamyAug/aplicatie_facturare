<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <br>
    <form class="row col form-inline" action="index.php" method="POST">
        <h3 class="col-sm-4" style="border-bottom: 1px solid #f2f2f2;">Lista facturi</h3>
        <input type="submit" class="btn btn-success" name="factura_noua" value="Creare Factura Noua">
    </form>
</head>

<body>
    <form class="col form-inline" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Cautare dupa
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div>
        <input type="text" class="form-control" id="input_cautare" name="input_cautare">
    </form>

    <div class="col">
        <table class="table table-hover col-sm-12" id="tabel_facturi">
            <thead class="thead-dark table-bordered">
                <tr id="line_1">
                    <th scope="col">#</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Numar</th>
                    <th scope="col">Data Crearii</th>
                    <th scope="col">Scadenta</th>
                    <th scope="col">Furnizor</th>
                    <th scope="col">Client</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>HP</td>
                    <td>123412</td>
                    <td>@mdo</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>

<?php
// if (isset($_POST['afisare_facturi'])) {
//     echo "Aici vom afisa facturile";
// }
