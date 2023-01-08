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
                    <th>Id Penjualan</th>
                    <th>Tanggal Penjualan</th>
                    <th>Nama Agen</th>
                    <th>Total Bayar</th>
                    <th>Status Transaksi</th>
                </tr>
               <?php
                $no=1;
                foreach($penjualan as $data){
                    if($data->status=="0"){
                        $st = "Diproses";
                    }if($data->status=="1"){
                        $st = "Sudah Dikonfirmasi Admin";
                     }if($data->status=="2"){
                        $st = "Sudah Upload Struk";
                    }
                    if($data->status=="3"){
                        $st = "Sudah Dikirim";
                    }
                ?>
                <tr>
                   <td align="center"><?php echo $no ?></td>
                    <td><?php echo $data->id_penjualan?></td>
                    <td><?php echo format_indo(date('Y-m-d', strtotime($data->tgl_penjualan)));?></td>
                    <td><?php echo $data->nama ?></td>
                    <td>Rp. <?= number_format($data->total_bayar, 0, ',', '.') ?></td>
                     <?php if($st == "Diproses"){
                        ?>
                        <td><p class="text-warning"><?php echo $st ?></p></td>
                        <?php } ?>
                        <?php if($st == "Sudah Dikonfirmasi Admin"){
                        ?>
                        <td ><p class="text-info"><?php echo $st ?></p></td>
                        <?php } ?>
                         <?php if($st == "Sudah Upload Struk"){
                        ?>
                        <td><p class="text-primary"><?php echo $st ?></p></td>
                        <?php } ?>

                         <?php if($st == "Sudah Dikirim"){
                        ?>
                        <td><p class="text-success"><?php echo $st ?></p></td>
                        <?php } ?>
                </tr>
                <?php 
                $no++;
                } 
                ?>
        </table>
    </body></html>