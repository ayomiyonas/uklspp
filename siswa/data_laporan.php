<?php
if(isset($_GET['act'])){
	$act=$_GET['act'];
	include $act.".php";
}else{
	
?>     
	 
	
            <div class="card-body table-responsive">
              
     
		<div class="row no-print">
                <div class="col-12"> 
			
                  <button onclick="cetak()" class="btn btn-success float-left" style="margin-left: 5px;"><i class="fas fa-print"></i> Print
                      </button>
                  <button type="button" class="btn btn-primary float-left" style="margin-left: 5px;">
                    <i class="fas fa-download"></i> PDF
                  </button>
                </div>
              </div>
			  <br> 
			  <table id="example1" class="table table-bordered table-striped">
	<thead>
	<tr>
		<th>No</th>
		<th>ID Pembayaran</th>
		<th>Petugas (ID) </th>
		<th>NISN</th> 
		<th>Tgl Bayar</th>
		<th>Bulan diBayar</th>
		<th>Tahun diBayar</th>
		<th>Jumlah Bayar</th>
		
	</tr>
	</thead>
	<tbody>
	<?php
	$no = 1;
	foreach($db->tampil_data("pembayaran","id_pembayaran") as $x){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $x['id_pembayaran']; ?></td>
		<td><?php 
		 foreach($db->detail_data($x['id_petugas'],"petugas","id_petugas") as $d){echo $d['nama_petugas']."(".$d['id_petugas'].")"; 	 }
		  ?></td>
		<td><?php echo $x['nisn']; ?></td> 
		<td><?php echo $x['tgl_bayar']; ?></td> 
		<td><?php echo $x['bulan_dibayar']; ?></td> 
		<td><?php echo $x['tahun_dibayar']; ?></td> 
		<td><?php echo $x['jumlah_bayar']; ?></td> 
		<td>
	<?php 
	}
	?>
	</tbody>
</table>
			
		       </div>
          </div>
		 
          
<script type="text/javascript"> 
function cetak(){
  window.addEventListener("load", window.print());	
}
</script>
<?php }
?>