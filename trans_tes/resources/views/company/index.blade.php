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
                <div class="card-header">Data Company</div>

                <div class="card-body">

					<style type="text/css">
						.pagination li{
							float: left;
							list-style-type: none;
							margin:5px;
						}
					</style>
				 
					<a href="company/create">Tambah Company</a>
				 
					<table border="1">
						<tr>
							<th>Nama</th>
							<th>Email</th>
							<th>Logo</th>
							<th>Website</th>
							<th>Action</th>
						</tr>
						@foreach($company as $com)
						<tr>
							<td>{{ $com->nama }}</td>
							<td>{{ $com->email }}</td>
							<td><img src="{{url('/storage/app/company/'.$com->logo)}}"></td>
							<td>{{ $com->website }}</td>
							<td>
							<form action="/company/{{$com->id}}" method="POST">
							{{csrf_field()}}
					  		{{ method_field('DELETE')}}
								<button><a href="/company/{{$com->id}}/edit">Edit</a></button>
								<button type="submit" onclick="return confirm('Yakin ingin Dihapus ?')">Delete</button>
							</form>
							</td>
						</tr>
						@endforeach
					</table>
				 
					<br>
					Halaman : {{ $company->currentPage() }} <br>
					Data Per Halaman : {{ $company->perPage() }} <br>
				 
					{{ $company->links() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

