@extends('admin/master')
@section('title', 'Admin')
@section('content')
<?php 
$thisPage = "Product";
?>

		<!-- MAIN -->
		<div class="main">
		<h1>&nbsp&nbsp&nbsp&nbspAuthors</h1>
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Data table of product</h3>
							<button type="button" class="lnr lnr-upload right" data-toggle="modal" data-target="#myModal"></button>
						</div>
						<div class="panel-body">
							
						<table class="table table-striped">
										<thead>
											<tr>
												<th>#</th>
												<th>Nama Produk</th>
												<th>Foto</th>
												<th>Deskripsi</th>
												<th>Stok</th>
												<th>harga</th>
												<th>admin_id</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
										@foreach($data_product as $produk)
											<tr>
												<td>{{$loop->iteration }}</td>
												<td>{{$produk->nama_produk}}</td>
												<!-- <td>{{$produk->picture}}</td> -->
												<td> 
												<!-- <a target="_blank" href="http://127.0.0.1:8000/image/{{$produk->picture}}">Lihat Gambar</a> -->
												<img src="{{ url( $produk->foto)}}" width="100px"alt="Image"> 
												</td>
												<!-- <td> <a href="{{ asset('image/'. $produk->picture)}}"> okeh </a> </td> -->
												<td>{{$produk->deskripsi}}</td>
												<td>{{$produk->stok}}</td>
												<td>{{$produk->harga}}</td>
												<td>{{$produk->admin_id}}</td>
												<td>
												<a href="{{ url('editproduk/'.$produk->id) }}" class="btn btn-warning"> edit</a>
												<a href="{{ url('hapusproduk/'.$produk->id) }}" class="btn btn-danger"> delete</a>
												</td>
											</tr>
							@endforeach
										</tbody>
									</table>
						</div>
					</div>
					<!-- END OVERVIEW -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->

		<!-- Modal -->
		<div id="myModal" class="modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <div class="modal-body">

                        <!-- <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username" required="required">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" required="required">
                                </div> -->
                        <div class="row">

                            <form action="/admin/produk" method="post" enctype="multipart/form-data">
							{{csrf_field()}}
                                <div class="col-md-12">
                                    <center>
                                        <h3>Tambah Produk</h3>
                                    </center>
                                    <div class="form-group">
                                        <label>Nama Produk</label>
                                        <input type="text" class="form-control" name="nama_produk" required="required">
                                    </div>
									<div class="form-group">
                                        <label>Deskripsi</label>
                                        <input type="text" class="form-control" name="deskripsi" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label>Picture</label>
                                        <!-- <input name="foto" type="file" accept="image/png, image/jpg" /> -->
										<input type="text" class="form-control" name="foto" required="required">
                                    </div>
									<div class="form-group">
                                        <label>Stok Barang</label>
                                        <input type="text" class="form-control" name="stok" required="required">
                                    </div>
									<div class="form-group">
                                        <label>Harga</label>
                                        <input type="text" class="form-control" name="harga" required="required">
                                    </div>
									<div class="form-group">
									<select name="admin_id"  class="form-control">
               						<option value="">== Select admin ==</option>
                					@foreach ($data_admin as $id => $name)
                    				<option value="{{ $id }}">{{ $name }}</option>
                					@endforeach
           							</select>
                                    </div>
                                </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class=" btn btn-primary ">Submit</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
					</form>
                </div>
            </div>
        </div>
	    @endsection
