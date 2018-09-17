@extends('layouts.master')

@section('title', 'User registration')

@section('content')
	<!-- MAIN -->
	<div class="main">
		<!-- MAIN CONTENT -->
		<div class="main-content">
			<div class="container-fluid">
				<form method="post" action="/admin/saveUser">
					{{ csrf_field() }}
					<div class="form-group">
  					  	<label for="InputField3">Name *</label>
  					  	<input type="text" name="name" class="form-control" id="InputField3" placeholder="Name" required>
					</div>
					<div class="form-group">
						<label for="InputField5">Gender *</label>
						<select class="form-control" name="gender" required>
							<option value="male">Male</option>
							<option value="female">Female</option>
						</select> 
					</div>
  					<div class="form-group">
  					  	<label for="InputField5">Birthday *</label>
  					  	<input type="text" name="birthday" class="form-control" id="InputField5" placeholder="yyyy-mm-dd" required>
					</div>
					<div class="form-group">
  					  	<label for="InputField2">Email *</label>
  					  	<input type="email" name="email" class="form-control" id="InputField2" placeholder="Email" required>
  					</div>
                    <div class="form-group">
  					  	<label for="InputField7">Mobile *</label>
  					  	<input type="telephone" min="0" name="mobile" class="form-control" id="InputField7" placeholder="Mobile" required>
  					</div>
					<div class="row"> 
						<div class="col-md-4" >
							<div class="form-group">
								<label for="InputField7">User Role *</label>
								<select id="user_role" class="form-control" name="user_role" required>
									<option value="1">Doctor</option>
									<option value="2">Nurse</option>
									<option value="3">Lab Assistant</option>
									<option value="4">Pharmacist</option>
								</select> 
							</div>
						</div>
						<div class="col-md-8">
							<div class="form-group">
								<label for="InputField7">Degree *</label>
								<select id="degree" class="form-control" name="degree" required>
									<option value="mbbs">Bachelor of Medicine (MBBS)</option>
									<option value="md">Doctor of Medicine (MD)</option>
								</select> 
							</div>
						</div>
					</div>
					<br>
					<button type="submit" class="btn btn-default" placeholder="Qualifications">Submit</button>
				</form>
				<br>
				<!-- <div class="alert alert-warning" role="alert" style="background: transparent; border: transparent;">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div> -->
				
			</div>
		</div>
	</div>
@endsection
