@if( isset($errors) && $errors->any())
    <div class="alert alert-danger alert-top">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

@foreach (['danger', 'warning', 'success', 'info'] as $msg)
  	@if(Session::has('alert-' . $msg))
  		<div class="alert alert-{{ $msg }} alert-top">
  			{{ Session::get('alert-' . $msg) }}
  			<a href="#" class="close" data-dismiss="alert">&times;</a>
		  </div>
  	@endif
@endforeach
