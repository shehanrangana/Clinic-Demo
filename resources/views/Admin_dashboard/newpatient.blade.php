@extends('layouts.master')

@section('title', 'Patient registration')

@section('content')
	<!-- MAIN -->
	<div class="main">
		<!-- MAIN CONTENT -->
		<div class="main-content">
			<div class="container-fluid">
				<form method="post" action="/admin/savePatient">
					{{ csrf_field() }}
  					<div class="form-group">
  					  	<label for="InputField2">Name *</label>
  					  	<input type="text" name="name" class="form-control" id="InputField2" placeholder="Name" required>
					</div>
					<div class="form-group">
  					  	<label for="InputField3">Addresss Line 1 *</label>
  					  	<input type="text" name="addressLine1" class="form-control" id="InputField3" placeholder="Addresss Line 1" required>
					</div>
					<div class="form-group">
  					  	<label for="InputField4">Addresss Line 2 *</label>
  					  	<input type="text" name="addressLine2" class="form-control" id="InputField4" placeholder="Addresss Line 2" required>
					</div>
					<div class="form-group">
  					  	<label for="InputField5">Addresss Line 3</label>
  					  	<input type="text" name="addressLine3" class="form-control" id="InputField5" placeholder="Addresss Line 3">
					</div>
					<div class="form-group">
						<label for="InputField5">Gender *</label>
						<select class="form-control" name="gender" required>
							<option value="male">Male</option>
							<option value="female">Female</option>
						</select> 
					</div>
  					<div class="form-group">
  					  	<label for="InputField8">Birthday *</label>
  					  	<input type="text" name="birthday" class="form-control" id="InputField8" placeholder="yyyy-mm-dd" required>
  					</div>
					<div class="form-group">
  					  	<label for="InputField6">NIC *</label>
  					  	<input type="text" name="nic" class="form-control" id="InputField6" placeholder="NIC" required>
					</div>
                    <div class="form-group">
  					  	<label for="InputField9">Mobile</label>
  					  	<input type="number" name="mobile" class="form-control" id="InputField9" placeholder="Mobile" numeric>
					</div>
					<div class="form-group">
  					  	<label for="InputField10">Guardian's Mobile</label>
  					  	<input type="number" name="gMobile" class="form-control" id="InputField10" placeholder="Guardian's Mobile">
  					</div>
					<br>
  					<button type="submit" class="btn btn-default" placeholder="Qualifications">Submit</button>
				</form>
				<br>
				<div class="alert alert-warning" role="alert" style="background: transparent; border: transparent;">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
@endsection