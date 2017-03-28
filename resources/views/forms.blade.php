<!DOCTYPE html>
</!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<form action="" method="post" class="form-horizontal">
					{{	csrf_field() }}
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" name="nama" @if(isset($nama)) value="{{ $nama }}" @endif>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" name="email" @if(isset($email)) value="{{ $email }}" @endif>
					</div>
					<div class="form-group">
						<label for="jenis_kelamin">Jenis Kelamin</label>
						<div class="radio">
							<label>
								<input type="radio" name="gender" value="m" @if(isset($gender) && $gender == "m") checked @endif>Laki-laki
							</label>
						</div>
						<div class="radio">
							<label>
	  							<input type="radio" name="gender" value="f" @if(isset($gender) && $gender == "f") checked @endif>Perempuan
	  						</label>
  						</div>
					</div>
					<div class="form-group">
						<label for="servant">Servant Pilihan<br>
						<small>Bisa pilih lebih dari satu</small>
						</label>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="servant[]" value="saber" @if(isset($servant) && in_array('saber', $servant)) checked @endif>Saber
							</label>
						</div>
						<div class="checkbox">
							<label>
	  							<input type="checkbox" name="servant[]" value="archer" @if(isset($servant) && in_array('archer', $servant)) checked @endif>Archer
	  						</label>
  						</div>
						<div class="checkbox">     
							<label>
								<input type="checkbox" name="servant[]" value="lancer" @if(isset($servant) && in_array('lancer', $servant)) checked @endif>Lancer
							</label>
						</div>
						<div class="checkbox">
							<label>
	  							<input type="checkbox" name="servant[]" value="rider" @if(isset($servant) && in_array('rider', $servant)) checked @endif>Rider
  						</div>
  						<div class="checkbox">
							<label>
	  							<input type="checkbox" name="servant[]" value="assassin" @if(isset($servant) && in_array('assassin', $servant)) checked @endif>Assassin
	  						</label>
  						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="servant[]" value="caster" @if(isset($servant) && in_array('caster', $servant)) checked @endif>Caster
							</label>
						</div>
						<div class="checkbox">
							<label>
	  							<input type="checkbox" name="servant[]" value="berserker" @if(isset($servant) && in_array('berserker', $servant)) checked @endif>Berserker
  						</div>
  						<div class="checkbox">
							<label>
	  							<input type="checkbox" name="servant[]" value="ruler" @if(isset($servant) && in_array('ruler', $servant)) checked @endif>Ruler
	  						</label>
  						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="servant[]" value="avenger" @if(isset($servant) && in_array('avenger', $servant)) checked @endif>Avenger
							</label>
						</div>
						<div class="checkbox">
							<label>
	  							<input type="checkbox" name="servant[]" value="shielder" @if(isset($servant) && in_array('shielder', $servant)) checked @endif>Shielder
  						</div>
					</div>
					<button type="submit" class="btn btn-warning">Submit</button>
				</form>
				<br>
				<br>
				@if(isset($nama))
				Halo, {{ $nama }}
				@endif
				<br>
				@if(isset($email))
				Email kamu {{ $email }}
				@endif
				<br>
				@if(isset($gender))
				Kamu seorang 
				@if($gender == "m")
				Laki-laki 
				@else
				Perempuan 
				@endif
				@endif
				<br>
				@if(isset($servant))
				Servant Pilihan:
				@foreach ($servant as $serve)
				<br>->{{ ucwords($serve) }}
				@endforeach
				@endif
			</div>
		</div>
	</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>