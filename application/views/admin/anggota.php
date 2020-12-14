<div class="page-header">
	<h3>Data Anggota</h3>
</div>
<a href="<?php echo base_url().'admin/tambah_anggota'; ?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-plus"></span> Anggota Baru </a>
<br><br>
<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover" id = "table-datatable">
		<thead>
			<tr>
				<th style="text-align: center;">No</th>
				<th style="text-align: center;">Nama</th>
				<th style="text-align: center;">Gender</th>
				<th style="text-align: center;">Nomor Telephone</th>
				<th style="text-align: center;">Alamat</th>
				<th style="text-align: center;">Email</th>
				<th style="text-align: center;">Password</th>
				<th style="text-align: center;">Pilihan</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			foreach ($anggota as $a) {
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $a->nama_anggota ?></td>
				<td><?php echo $a->gender ?></td>
				<td><?php echo $a->no_telp ?></td>
				<td><?php echo $a->alamat ?></td>
				<td><?php echo $a->email ?></td>
				<td><?php echo $a->password ?></td>
				<td nowrap="nowrap">
					<a class="btn btn-primary btn-xs" href="<?php echo base_url().'admin/edit_anggota/'.$a->id_anggota; ?>"><span class="glyphicon glyphicon-zoom-in"></span></a>
					<a class="btn btn-warning btn-xs" href="<?php echo base_url().'admin/hapus_anggota/'.$a->id_anggota; ?>"><span class="glyphicon glyphicon-remove"></span></a>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>
</div>