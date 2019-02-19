<input type="hidden" name="id">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="form-group">
	<div class="col-sm-6">
		<label class="control-label"> Nome </label>
    		<input type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>
	</div>
	<div class="col-sm-6">
		<label class="control-label"> Email </label>
		<input type="email" class="form-control" name="email" value="{{ old('email') }}">
	</div>
</div>

@if(isset($roles))
	<div class="row">
		<div class="col-sm-6">
			<label class="control-label"> Papel </label>
			<select class="selectpicker" name="role" value="{{ old('role') }}">
			@forelse ($roles as $role)
				<option value="{{ $role->name }}">{{ $role->name }} </option>
			@empty
				
			@endforelse
			</select>
		</div>
	</div>
@endif 

@if(!isset($collection))
	<div class="form-group">
		<div class="col-sm-6">
			<label class="control-label"> Senha </label>
			<input type="password" class="form-control" name="password" value="{{ old('password') }}">
		</div>
		<div class="col-sm-6">
			<label class="control-label"> Confirmar senha</label>
			<input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}">
		</div>
	</div>
@endif

@if(isset($collection))
	<div class="form-group">
		<div class="col-sm-6">
			<label class="control-label"> Alterar Senha </label>
			<input type="password_new" class="form-control" name="password" value="{{ old('password') }}">
		</div>
		<div class="col-sm-6">
			<label class="control-label"> Confirmar Senha </label>
			<input type="password_confirmation" class="form-control" name="password" value="{{ old('password_confirmation') }}">
		</div>
	</div>
@endif

