<?php
require 'functions.php';
if(isset($_GET['id'])){
    $id_transaksi=$_GET['id'];
}
$query = 'SELECT transaksi.*,member.nama_member , detail_transaksi.total_harga, detail_transaksi.total_bayar FROM transaksi INNER JOIN member ON member.id_member = transaksi.member_id INNER JOIN detail_transaksi ON detail_transaksi.transaksi_id = transaksi.id_transaksi WHERE transaksi.id_transaksi = ' . $_GET['id'];
$data = ambilsatubaris($conn,$query);
?>
<style>
table{
    border=collapse:collapse;
}
</style>
     <center> <h2> LAUNDRYPHONN </h2> <center>
     <hr>
  <table class="table" id="table" border="1" align="center" cellpadding="10">
                       <thead>
                        <tr>
                            <th>Kode Invoice </th>
                            <th>Pesanan Atas Nama </th>
                            <th>Tanggal Transaksi</th>
                            <th>Total Harga</th>
                            <th>Total Bayar</th>
                            <th>Kembalian</th>
                            <th>Status</th>
                        </tr>
                     </thead>
                   <tbody>
                        <tr>
                            <td><?php echo$data['kode_invoice']; ?></td>
                            <td><?php echo$data['nama_member']; ?></td>
                            <td><?php echo$data['tgl_pembayaran']; ?></td>
                            <td><?php echo$data['total_harga']; ?></td>
                            <td><?php echo$data['total_bayar']; ?></td>
                     </tr>
             </tbody>
          </table>
<script>window.print()</script>





             