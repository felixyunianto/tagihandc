       <!-- Begin Page Content -->
       <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

<div class="row">
          	<div class="col-lg-6">
          		 <?= form_error('name', '<div class="alert alert-danger" role="alert">','</div>'); ?>

          		 <?= $this->session->flashdata('message'); ?>

          		<table class="table table-hover" style="width: 1000px">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">ID Pembayaran</th>
                      <th scope="col">Nama Pelanggan</th>
                      <th scope="col">Nama Paket</th>
                      <th scope="col">Jumlah Pembayaran</th>
                      <th scope="col">Status</th>
				      <th scope="col">Action</th>
				      
				    </tr>
				  </thead>
				  <tbody>
				  	<?php $i = 1; ?>
				  	<?php foreach($dashboard as $r) : ?>
				    <tr>
				      <th scope="row"><?= $i; ?></th>
                      <td><?= $r['id_pembayaran']; ?></td>
				      <td><?= $r['nama_pelanggan']; ?></td>
                      <td><?= $r['nama_paket']; ?></td>
                      <td><?= $r['jumlah_pembayaran']; ?></td>
                      <td><?= $r['status']; ?></td>
				      <td>
				     
				     <a href="" class="badge badge-success">Bayar</a>
				     

				      </td>
				    </tr>
				<?php $i++; ?>
				<?php endforeach; ?>
				  </tbody>
				</table>	
          	</div>
          </div> 


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

