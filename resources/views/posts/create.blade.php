@extends('layouts.app')

@section('content')
<div class="container">
	<form class="form-controll" action="/p" enctype="multipart/form-data" method="post">
        @csrf
		<div class="row">
			<div class="col-8 offset-2">
				<div class="row">
					<h1>Add new Post</h1>
				</div>
				<div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label text-md-right">Post Caption</label>

                    <div class="col-md-6">
                        <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" autocomplete="caption" autofocus>

                        @error('caption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>		
		    </div>		
	    </div>

	    <div class="row">
			<div class="col-8 offset-2">
				<div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label text-md-right">Post Image</label>

                    <div class="col-md-6">
                        <input type="file" name="image" class="form-control-file" id="image">

                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>		
		    </div>		
	    </div>
	    
	    <div class="row">
			<div class="col-8 offset-2">
				<div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label text-md-right"></label>
                    <div class="col-md-6">
                        <button class="form-control-file btn btn-primary">add</button>                     
                    </div>
                </div>		
		    </div>		
	    </div>
	</form>	
</div>
@endsection