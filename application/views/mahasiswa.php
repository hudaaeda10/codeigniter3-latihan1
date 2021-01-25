<div class="content-wrapper">
	<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Mahasiswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Mahasiswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>	
    <div class="content">
    	<div class="row">
    		<div class="col-md-12">
    			<div class="card">    				
	    			<div class="card-body">
	    				<?php echo $this->session->flashdata('message'); ?>
	    				<button class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data Mahasiswa</button>
	    				<a class="btn btn-danger mb-3" href="<?php echo base_url('mahasiswa/print') ?>"> <i class="fa fa-print"></i> Print</a>
	    				<a class="btn btn-warning mb-3" href="<?php echo base_url('mahasiswa/pdf') ?>"> <i class="fa fa-print"></i> PDF</a>	    				
	    				<a class="btn btn-warning mb-3" href="<?php echo base_url('mahasiswa/excel') ?>"> <i class="fa fa-print"></i> EXCEL</a>

	    				<div class="navbar-form navbar-right form-inline">
	    					<?php echo form_open('mahasiswa/search') ?>
	    						<input type="text" name="keyword" class="form-control" placeholder="Search">
	    						<button type="submit" class="btn btn-success">Cari</button>
	    					<?php echo form_close() ?>
	    				</div>

			    		<table class="table table-bordered">
			    			<tr>
			    				<th>No</th>
			    				<th>Nama Mahasiswa</th>
			    				<th>NIM</th>
			    				<th>Tanggal Lahir</th>
			    				<th>Jurusan</th>
			    				<th colspan="3">Aksi</th>
			    			</tr>
			    			<?php 
			    			$no = 1;
			    			foreach($mahasiswa as $mhs) : ?>
			    			<tr>
			    				<td><?php echo $no++ ?></td>
			    				<td><?php echo $mhs->nama ?></td>
			    				<td><?php echo $mhs->nim ?></td>
			    				<td><?php echo $mhs->tgl_lahir ?></td>
			    				<td><?php echo $mhs->jurusan ?></td>
			    				<td onclick="javascript: return confirm('Apakah anda yakin data dihapus>')"><?php echo anchor('mahasiswa/hapus/'.$mhs->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
			    				<td><?php echo anchor('mahasiswa/edit/'.$mhs->id,'<div class="btn btn-primary ml-2 btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
			    				<td><?php echo anchor('mahasiswa/detail/'.$mhs->id,'<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>		    				
			    			</tr>
			    			<?php endforeach; ?>		 
			    		</table>    				
	    			</div>    			
    				
    			</div>
    		</div>    		
    	</div>
    </div>
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h4 class="modal-title" id="exampleModalLabel">Tambah Mahasisa</h4>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <?php echo form_open_multipart('/mahasiswa/tambah_aksi'); ?>
	        	<div class="form-group">
	        		<label>Nama Mahasiswa</label>
	        		<input type="text" name="nama" class="form-control">
	        	</div>
	        	<div class="form-group">
	        		<label>NIM</label>
	        		<input type="text" name="nim" class="form-control">
	        	</div>
	        	<div class="form-group">
	        		<label>Tanggal Lahir</label>
	        		<input type="date" name="tgl_lahir" class="form-control">
	        	</div>
	        	<div class="form-group">
	        		<label>Jurusan</label>
	        		<select class="form-control" name="jurusan">
	        			<option>Teknik Informatika</option>
	        			<option>Sistem Informasi</option>
	        			<option>Data Science</option>
	        		</select>
	        	</div>
	        	<div class="form-group">
	        		<label>alamat</label>
	        		<input type="text" name="alamat" class="form-control">
	        	</div>
	        	<div class="form-group">
	        		<label>email</label>
	        		<input type="email" name="email" class="form-control">
	        	</div>
	        	<div class="form-group">
	        		<label>Nomor Telphone</label>
	        		<input type="text" name="no_telp" class="form-control">
	        	</div>
	        	<div class="form-group">
	        		<label>Upload foto</label>
	        		<input type="file" name="foto" class="form-control">
	        	</div>
	        	<button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
	        	<button type="submit" class="btn btn-primary">Simpan</button>

	        <?php echo form_close(); ?>
	      </div>
	    </div>
	  </div>
	</div>
</div>
