<div class="container-fluid">
    <h4>Invoice Pemesanan Produk</h4>
    
    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Id Invoice</th>
            <th>Nama Pemesanan</th>
            <th>Alamat Pengiriman</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Pembayaran</th>
            <th colspan="7"><center>Detail dan Cetak</center></th>
        </tr>

        <?php foreach ($invoice as $inv): ?>
        <tr>
            <td><?php echo $inv->id ?></td>
            <td><?php echo $inv->nama ?></td>
            <td><?php echo $inv->alamat ?></td>
            <td><?php echo $inv->tgl_pesan ?></td>
            <td><?php echo $inv->batas_bayar ?></td>
            <td><?php echo anchor('admin/invoice/detail/' .$inv->id, '<div class="btn btn-sm btn-dark mt-1 ml-4"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12ZM13 8C13 8.55228 12.5523 9 12 9C11.4477 9 11 8.55228 11 8C11 7.44772 11.4477 7 12 7C12.5523 7 13 7.44772 13 8ZM13 17V11H11V17H13Z" 
                                                                    fill="#fff"/>
                                                                    </svg>
                                                                    </div>') ?>
            </td>
            <td><?php echo anchor('admin/invoice/cetak/' .$inv->id, '<div class="btn btn-sm btn-dark mt-1 ml-3"><i class="fa fa-print" style="font-size:15px"></i></div>') ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>