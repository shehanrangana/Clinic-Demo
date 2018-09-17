@extends('layouts.master')

@section('title', 'Users')

@section('content')
	<!-- MAIN -->
	<div class="main">
		<!-- MAIN CONTENT -->
		<div class="main-content">
			<div class="container-fluid">
                <div class="table-responsive">
                    <table class="table">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Birthday</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Role</th>
                        <th>Degree</th> 
                        @foreach($users as $user)
                            <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->gender }}</td>
                            <td>{{ $user->birthday }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->mobile }}</td>
                            <td>{{ $user->user_role }}</td>
                            <td>{{ $user->degree }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
			</div>
		</div>
	</div>
@endsection
