<div class="page-header">
	<h3>Data Buku</h3>
</div>
<a href="<?php echo base_url().'admin/tambah_buku'; ?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-plus"></span> Buku Baru </a>
<br><br>
<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover" id = "table-datatable">
		<thead>
			<tr>
				<th style="text-align: center;">No</th>
				<th style="text-align: center;">Gambar</th>
				<th style="text-align: center;">Judul Buku</th>
				<th style="text-align: center;">Pengarang</th>
				<th style="text-align: center;">Penerbit</th>
				<th style="text-align: center;">Tahun Terbit</th>
				<th style="text-align: center;">ISBN</th>
				<th style="text-align: center;">Lokasi</th>
				<th style="text-align: center;">Status</th>
				<th style="text-align: center;">Pilihan</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			foreach ($buku as $b) {
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><img src="<?php echo base_url().'/assets/upload/'.$b->gambar; ?>" align="center" width="80" height="80" alt="Gambar Tidak Ada"></td>
				<td><?php echo $b->judul_buku ?></td>
				<td><?php echo $b->pengarang ?></td>
				<td><?php echo $b->penerbit ?></td>
				<td width="100" align="center"> <?php echo $b->thn_terbit ?></td>    
				<td align="center"> <?php echo $b->isbn ?></td>
				<td><?php echo $b->lokasi ?></td>
				<td>
					<?php
					if ($b->status_buku == "1"){
						echo "Tersedia";
					}else if($b->status_buku == "0"){
						echo "Sedang Dipinjam";
					}
					?>
				</td>
				<td nowrap="nowrap">
					<a class="btn btn-primary btn-xs" href="<?php echo base_url().'admin/edit_buku/'.$b->id_buku; ?>"><span class="glyphicon glyphicon-zoom-in"></span></a>
					<a class="btn btn-warning btn-xs" href="<?php echo base_url().'admin/hapus_buku/'.$b->id_buku; ?>"><span class="glyphicon glyphicon-remove"></span></a>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>
</div>