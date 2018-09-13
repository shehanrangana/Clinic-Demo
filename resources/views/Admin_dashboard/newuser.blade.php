@extends('layouts.master')

@section('title', 'dsfhsljkdfh')

@section('content')
	<!-- MAIN -->
	<div class="main">
		<!-- MAIN CONTENT -->
		<div class="main-content">
			<div class="container-fluid">
				<form method="post" action="/admin/saveUser">
					{{ csrf_field() }}
					<div>
						<label class="radio-inline">
							<input type="radio" name="user_role" id="inlineRadio1" value="option1"> Doctor
						</label>
						<label class="radio-inline">
							<input type="radio" name="user_role" id="inlineRadio2" value="option2"> Nurse
						</label>
						<label class="radio-inline">
							<input type="radio" name="user_role" id="inlineRadio3" value="option3"> Lab Assisitant
						</label>
						<label class="radio-inline">
							<input type="radio" name="user_role" id="inlineRadio4" value="option4"> Pharmacist
						</label>
					</div>
					<hr>
					<div class="form-group">
  					  	<label for="InputField1">Username</label>
  					  	<input type="text" name="username" class="form-control" id="InputField1" placeholder="username" >
					</div>
					<div class="form-group">
  					  	<label for="InputField2">Email</label>
  					  	<input type="email" name="email" class="form-control" id="InputField2" placeholder="Email" >
  					</div>
					<div class="form-group">
    					<label for="InputPassword1">Password</label>
    					<input type="password" name="password" class="form-control" id="InputPassword1" placeholder="Password" >
					</div>
					<div class="form-group">
    					<label for="InputPassword2">Confirm Password</label>
    					<input type="password" name="confirm_password" class="form-control" id="InputPassword2" placeholder="Confirm Password" >
  					</div>
  					<div class="form-group">
  					  	<label for="InputField3">Name</label>
  					  	<input type="text" name="name" class="form-control" id="InputField3" placeholder="Name">
					</div>
					<div class="form-group">
  					  	<label for="InputField4">Gender</label>
  					  	<input type="text" name="gender" class="form-control" id="InputField4" placeholder="Gender">
  					</div>
  					<div class="form-group">
  					  	<label for="InputField5">Birthday</label>
  					  	<input type="text" name="birthday" class="form-control" id="InputField5" placeholder="yyyy-mm-dd">
					</div>
					<div class="form-group">
  					  	<label for="InputField6">NIC</label>
  					  	<input type="text" name="nic" class="form-control" id="InputField6" placeholder="NIC">
  					</div>
                    <div class="form-group">
  					  	<label for="InputField7">Mobile</label>
  					  	<input type="telephone" min="0" name="mobile" class="form-control" id="InputField7" placeholder="Mobile">
  					</div>
                    <div>
                    	<label for="InputField8">Qualifications</label>
                    	<textarea name="qualifications" class="form-control" id="InputField8" rows="3"></textarea>
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