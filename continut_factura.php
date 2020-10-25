<html>
<header>

</header>

<body>
    <div class="vp-factura-wrapper">
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
        <div style="font-family:'dejavu sans', sans-serif; font-size: 11px;">
            <div class="antet">
                <div class="blocuri_antet">
                    <div><b>FURNIZOR:</b> LUDINO COMPANY SRL</div>
                    <div><b>CUI:</b> RO12421020</div>
                    <div><b>REG. COM.:</b> J04/579/1999</div>
                    <div><b>ADRESĂ:</b> Mihai Viteazu 4, Bacău, Bacău</div>
                    <div><b>CONT:</b> RO19BRDE441SV17920984410</div>
                    <div><b>BANCĂ:</b> BRD GROUPE SOCIETE GENERALE</div>
                    <div><b>CAPITAL SOCIAL:</b> 500 lei</div>
                </div>
                <!--
		-->
                <div class="blocuri_antet">
                    <h2 style="font-size:25px;margin-bottom:15px;text-align:center;">FACTURĂ</h2>
                    <div style="padding-left: 35px">
                        <div><b>SERIA:</b> LDN</div>
                        <div><b>NUMĂR:</b> 179</div>
                        <div><b>DATA:</b> 23.10.2020</div>
                        <div><b>DATA SCADENTĂ:</b> 23.10.2020</div>
                        <div><b>AVIZ:</b> </div>
                    </div>
                </div>
                <!--
		-->
                <div class="blocuri_antet_dreapta">
                    <div><b>CLIENT:</b> Turcu Florin</div>
                    <div><b>CNP:</b> 1770730040056</div>
                    <div><b>ADRESĂ:</b> Principala, Iteşti, Bacău</div>
                    <div><b>TELEFON:</b> 0744139293</div>
                </div>
            </div>
            <table class="tabel">
                <thead>
                    <tr>
                        <th style="width:30px">NR.</th>
                        <th style="width:298px">PRODUSE / SERVICII</th>
                        <th style="width:33px">U.M.</th>
                        <th style="width:65px">CANT.</th>
                        <th style="width:68px">PREŢ<br>(fără TVA)</th>
                        <th style="width:90px">VALOARE</th>
                        <th style="width:35px">TVA</th>
                        <th style="width:85px">VALOARE TVA</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td style="text-align: center">- lei -</td>
                        <td style="text-align: center">- lei -</td>
                        <td style="text-align: center">%</td>
                        <td style="text-align: center">- lei -</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="continut_factura" style="text-align: right;">1.</td>
                        <td class="continut_factura" style="text-align: left;">SERVICII DE CAZARE IN PERIOADA 23.10.2020 - 25.10.2020</td>
                        <td class="continut_factura" style="text-align: left;">buc</td>
                        <td class="continut_factura">1,00</td>
                        <td class="continut_factura">550,00</td>
                        <td class="continut_factura">550,00</td>
                        <td class="continut_factura">19</td>
                        <td class="continut_factura">104,50</td>
                    </tr>
                    <tr>
                        <td class="continut_factura" style="height: 396px"></td>
                        <td class="continut_factura"></td>
                        <td class="continut_factura"></td>
                        <td class="continut_factura"></td>
                        <td class="continut_factura"></td>
                        <td class="continut_factura"></td>
                        <td class="continut_factura"></td>
                        <td class="continut_factura"></td>
                    </tr>
                </tbody>
            </table>
            <div class="linie_observatii">
                <div><b>OBSERVAŢII:</b> </div>
            </div>
            <div style="display:table;width:100%">
                <div class="format_totaluri">
                    <div class="total_comp">SUBTOTAL:</div>
                    <div class="total_comp">TOTAL DE PLATĂ:</div>
                </div>
                <div class="format_celule">
                    <div style="border-bottom: 1px solid black;">
                        <div class="celule_sume" style="width:95px">550,00</div>
                        <div class="celule_sume" style="border-right:0;width:95px;">104,50 </div>
                    </div>
                    <div style="text-align:right;padding-right:3px;">
                        <strong>654,50 lei</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>