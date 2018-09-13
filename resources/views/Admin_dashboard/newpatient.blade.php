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
  					<div class="form-group">
  					  	<label for="InputField1">Name</label>
  					  	<input type="text" name="name" class="form-control" id="InputField1" placeholder="Name">
					</div>
					<div class="form-group">
  					  	<label for="InputField2">Addresss Line 1</label>
  					  	<input type="text" name="addressLine1" class="form-control" id="InputField2" placeholder="Addresss Line 1">
					</div>
					<div class="form-group">
  					  	<label for="InputField3">Addresss Line 2</label>
  					  	<input type="text" name="addressLine2" class="form-control" id="InputField3" placeholder="Addresss Line 2">
					</div>
					<div class="form-group">
  					  	<label for="InputField4">Addresss Line 3</label>
  					  	<input type="text" name="addressLine3" class="form-control" id="InputField4" placeholder="Addresss Line 3">
					</div>
					<div class="form-group">
  					  	<label for="InputField5">Gender</label>
  					  	<input type="text" name="gender" class="form-control" id="InputField5" placeholder="Gender">
  					</div>
  					<div class="form-group">
  					  	<label for="InputField6">Birthday</label>
  					  	<input type="text" name="birthday" class="form-control" id="InputField6" placeholder="yyyy-mm-dd">
  					</div>
                    <div class="form-group">
  					  	<label for="InputField7">Mobile</label>
  					  	<input type="tel" name="mobile" class="form-control" id="exampleInputEmail1" placeholder="Mobile">
					</div>
					<div class="form-group">
  					  	<label for="InputField8">Guardian Mobile</label>
  					  	<input type="tel" name="gMobile" class="form-control" id="InputField7" placeholder="Guardian Mobile">
  					</div>
					<br>
  					<button type="submit" class="btn btn-default" placeholder="Qualifications">Submit</button>
				</form>
			</div>
		</div>
	</div>
@endsection