
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        	@if(session('berhasil'))
				<div class="alert" role="alert">
					 {{session('berhasil')}}
				</div>
			@endif
            <div class="card">
                <div class="card-header">Data Employe</div>
				
                <div class="card-body">

                	

					<style type="text/css">
						.pagination li{
							float: left;
							list-style-type: none;
							margin:5px;
						}
					</style>
				 
					<a href="employe/create">Tambah Employe</a>
				 
					<table border="1">
						<tr>
							<th>Nama</th>
							<th>Company</th>
							<th>Email</th>
							<th>Action</th>
						</tr>
						@foreach($employe as $ep)
						<tr>
							<td>{{ $ep->nama }}</td>
							<td>{{$ep->company->nama}}</td>
							<td>{{ $ep->email }}</td>
							<td>
							<form action="/employe/{{$ep->id}}" method="POST">
							{{csrf_field()}}
					  		{{ method_field('DELETE')}}
								<button><a href="/employe/{{$ep->id}}/edit">Edit</a></button>
								<button type="submit" onclick="return confirm('Yakin ingin Dihapus ?')">Delete</button>
							</form>
							</td>
						</tr>
						@endforeach
					</table>
				 
					<br>
					Halaman : {{ $employe->currentPage() }} <br>
					Data Per Halaman : {{ $employe->perPage() }} <br>
				 
					{{ $employe->links() }}
				                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


<!DOCTYPE html>
<html>
<head>
	<title>Employe</title>
</head>
<body>
	

</body>
</html>