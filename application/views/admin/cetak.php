<div class="container-fluid">
    <br>
    <center><h1>COFFEE SHOP</h1></center>
    <center><h5>Jalan Kenanga 3, No 73, Sleman, Yogyakarta</h5></center> 
    <center><h5>Telp. +62 882-6275-4914</h5></center> 
    <h4>No. Invoice: <?php echo $invoice->id ?></h4>
    <hr>
    <table class="table table-bordered table-hover table-striped">

    <tr>
        <th>ID BARANG</th>
        <th>NAMA PRODUK</th>
        <th>JUMLAH PESANAN</th>
        <th>HARGA SATUAN</th>
        <th>SUB-TOTAL</th>
    </tr>

    <?php
    $total = 0;
    foreach ($pesanan as $psn) :
        $subtotal = $psn->jumlah * $psn->harga;
        $total += $subtotal;
    ?>

    <tr>
        <td><?php echo $psn->id_brg ?></td>
        <td><?php echo $psn->nama_brg ?></td>
        <td><?php echo $psn->jumlah ?></td>
        <td><?php echo number_format($psn->harga,0,',','.') ?></td>
        <td><?php echo number_format($subtotal,0,',','.') ?></td>
    </tr>

    <?php endforeach; ?>

    <tr>
        <td colspan="4" align="right">Grand Total</td>
        <td align="right">Rp. <?php echo number_format($total,0,',','.')?></td>
    </tr>
    </table>

    <script type="text/javascript">
    window.print();
</script>