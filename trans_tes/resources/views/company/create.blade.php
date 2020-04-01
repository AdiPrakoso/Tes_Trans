@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Company</div>

                <div class="card-body">
                	<form action="/company" method="POST" enctype="multipart/form-data">
						{{csrf_field()}}
						  <div class="{{$errors->has('nama')?'has-error':''}}">
							<label>Nama Company</label><br>
							<input name="nama" type="text" placeholder="company name">
							 @if($errors->has('nama'))
								<span class="help-block">{{$errors->first('nama')}}</span>
							 @endif
							 <br><br>
						  </div>
						  <div class="{{$errors->has('email')?'has-error':''}}">
							<label>Email Company</label><br>
							<input name="email" type="email" placeholder="email">
							 @if($errors->has('email'))
								<span class="help-block">{{$errors->first('email')}}</span>
							 @endif
							 <br><br>
						  </div>
						  <div class="{{$errors->has('logo')?'has-error':''}}">
							<label>Logo</label><br>
							<input name="logo" type="file">
							 @if($errors->has('logo'))
								<span class="help-block">{{$errors->first('logo')}}</span>
							 @endif
							 <br><br>
						  </div>
						  <div class="{{$errors->has('website')?'has-error':''}}">
							<label>Website</label><br>
							<input name="website" type="text" placeholder="company website">
							 @if($errors->has('website'))
								<span class="help-block">{{$errors->first('website')}}</span>
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








