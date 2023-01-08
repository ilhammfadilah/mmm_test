<!DOCTYPE html>
<html lang="en"><head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title;?></title>
        <style>
            #table {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
                margin-top : 20px;
            }

            #table td, #table th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #table tr:nth-child(even){background-color: #f2f2f2;}

            #table tr:hover {background-color: #ddd;}

            #table th {
                padding-top: 10px;
                padding-bottom: 10px;
                text-align: left;
                background-color: #4e73df;
                color: white;
            }
        </style>
    </head><body>
        <div style="text-align:center">
            <h3><?= $name;?> </h3>
            <h3><?= $title;?> </h3>
            <h3><?= $subtitle;?> </h3>
        </div>
        <table id="table">
                <tr>
                    <th>No</th>
                    <th>Id Pembelian</th>
                    <th>Tanggal Pembelian</th>
                    <th>Nama Supplier</th>
                    <th>Total Bayar</th>
                </tr>
               <?php
                $no=1;
                foreach($pembelian as $data){
                ?>
                <tr>
                   <td align="center"><?php echo $no ?></td>
                    <td><?php echo $data->id_pembelian?></td>
                    <td><?php echo format_indo(date('Y-m-d', strtotime($data->tgl_pembelian)));?></td>
                    <td><?php echo $data->nama ?></td>
                    <td>Rp. <?= number_format($data->total_bayar, 0, ',', '.') ?></td>
                </tr>
                <?php 
                $no++;
                } 
                ?>
        </table>
    </body></html>