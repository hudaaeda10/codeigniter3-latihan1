<div class="content-wrapper">
	<div class="content-header">		
		<h4 class="title"><strong>DETAIL DATA MAHASISWA</strong></h4>
	</div>
	<div class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<table class="table table-bordered">
							<tr>
								<th>Nama Mahasiswa</th>
								<td><?php echo $detail->nama ?></td>
							</tr>
							<tr>
								<th>NIM</th>
								<td><?php echo $detail->nim ?></td>
							</tr>
							<tr>
								<th>Tanggal Lahir</th>
								<td><?php echo $detail->tgl_lahir ?></td>
							</tr>
							<tr>
								<th>Jurusan</th>
								<td><?php echo $detail->jurusan ?></td>
							</tr>
							<tr>
								<th>Alamat</th>
								<td><?php echo $detail->alamat ?></td>
							</tr>
							<tr>
								<th>Email</th>
								<td><?php echo $detail->email ?></td>
							</tr>
							<tr>
								<th>Nomor Telphone</th>
								<td><?php echo $detail->no_telp ?></td>
							</tr>
							<td>
								<img src="<?php echo base_url(); ?>assets/foto/<?php echo $detail->foto; ?>" width="90" height="110">
							</td>
							<td></td>
						</table>
						<a href="<?php echo base_url('mahasiswa/index') ; ?>" class="btn btn-primary mt-2">Kembali</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>