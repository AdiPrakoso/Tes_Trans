@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update Data Employe</div>

                <div class="card-body">
                	<form action="/employe/{{$employe->id}}" method="POST" >
						{{csrf_field()}}
						  {{ method_field('PUT')}}
						   <div class="{{$errors->has('nama')?'has-error':''}}">
							<label>Nama</label><br>
							<input name="nama" type="text" value="{{$employe->nama}}">
							 @if($errors->has('nama'))
								<span class="help-block">{{$errors->first('nama')}}</span>
							 @endif
							 <br><br>
						  </div>
							<label>Company</label>
								<select name="company_id" class="form-control" >
								@foreach ($company as $cmp)
									 <option value="{{$cmp->id}}">{{$cmp->nama}}</option>
								@endforeach
								</select><br><br>
						  <div class="{{$errors->has('email')?'has-error':''}}">
							<label>Email Company</label><br>
							<input name="email" type="email" value="{{$employe->email}}">
							 @if($errors->has('email'))
								<span class="help-block">{{$errors->first('email')}}</span>
							 @endif
							 <br><br>
						  </div>
							<button type="submit">Save</button>
						</form>


				 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

