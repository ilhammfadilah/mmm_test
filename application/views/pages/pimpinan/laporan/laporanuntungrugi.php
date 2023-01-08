<!DOCTYPE html>
<html lang="en"><head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title;?></title>
        <style>
        </style>
    </head><body>
        <table style="margin-top: 0px;text-align: center" width="100%">
            <tr>
            <td style="text-align: center"><?=$name?></td>
            </tr>
            <tr>
            <td style="text-align: center"><?=$title?></td>
            </tr>
            <tr>
            <td style="text-align: center"><?=$subtitle?></td>
            </tr>
        </table><hr>
        <!-- <?php
            foreach($head as $data){
        ?>
        <table>
            <tr>
            <td>Kode Penjualan</td>
            <td>: <?php echo $data->id_penjualan ?></td>
            </tr>
            <tr>
                <td>Tanggal Transaksi</td>
                <td>: <?php echo format_indo(date('Y-m-d', strtotime($data->tgl_penjualan)));?></td>
            </tr>
            <tr>
                <td>Nama Agen</td>
                <td>: <?php echo $data->nama ?></td>
            </tr>
           <hr>
        </table><?php } ?> -->

        
        <table width="100%">
            <tr>
                <td>Pendapatan Penjualan :</td>
            </tr>
        </table>
        <?php
            foreach($detail as $data){
        ?>
        <table style="margin-left: 40px;" width="100%">
            
           <tr>
                <td style="margin-bottom: 0px;" width="100%"><?=$data->nama?></td>
                <td  width="100%"><?=$data->jumlah_ayam?> Ekor</td>
                <td  width="100%">Rp. <?= number_format($data->sub_total, 0, ',', '.') ?></td>
            </tr>
        </table> <br><br>

       <?php } ?>
       <?php
            foreach($read as $data){
        
        ?>
        <table style="margin-left: 40px;" width="100%">
            <tr>
                <td  width="100%"></td>
                <td  width="100%">Total</td>
                <td  width="100%">Rp. <?= number_format($data->jumlahpemasukan, 0, ',', '.') ?></td>
            </tr><br>
        </table>
       <?php } ?>

        <br>
        <table width="100%">
            <tr>
                <td>Pengeluaran Pembelian Bahan :</td>
            </tr>
        </table>
         <?php
            foreach($detail1 as $data){
        ?>
        <table style="margin-left: 40px;" width="100%">
            
            <tr>
                <td style="margin-bottom: 0px;" width="100%"><?=$data->nama?></td>
                <td  width="100%"><?=$data->jumlah_ayam?> Ekor</td>
                <td  width="100%">Rp. <?= number_format($data->sub_total, 0, ',', '.') ?></td>
            </tr>
        </table> <br><br>

       <?php } ?>

        <?php
            foreach($read1 as $data){
        
        ?>
        <table style="margin-left: 40px;" width="100%">
            <tr>
                <td  width="100%"></td>
                <td  width="100%">Total</td>
                <td  width="100%">Rp. <?= number_format($data->jumlahpengeluaran, 0, ',', '.') ?></td>
            </tr><br>
        </table>
       <?php } ?>

        <br>

        <?php
            foreach($read2 as $data){
                $total = $data->jumlahpemasukan - $data->jumlahpengeluaran
        ?>
        <table style="margin-left: 40px;" width="100%">
            <tr>
                <td  width="100%">Laba Bersih</td>
                <td  width="100%"></td>
                <td  width="100%">Rp. <?= number_format($total, 0, ',', '.') ?></td>
            </tr><br>
        </table><br><hr>
       <?php } ?>
        

    </body></html>