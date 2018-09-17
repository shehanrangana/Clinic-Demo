@extends('layouts.master')

@section('title', 'Patients')

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
                        <th>Address Line 1</th>
                        <th>Address Line 2</th>
                        <th>Address Line 3</th>
                        <th>Gender</th>
                        <th>Birthday</th>
                        <th>NIC</th>
                        <th>Mobile</th>
                        <th>Guardian's Mobile</th>
                        <th>Queue</th>

                        @foreach($patients as $patient)
                            <tr>
                            <td>{{ $patient->id }}</td>
                            <td>{{ $patient->name }}</td>
                            <td>{{ $patient->addressLine1 }}</td>
                            <td>{{ $patient->addressLine2 }}</td>
                            <td>{{ $patient->addressLine3 }}</td>
                            <td>{{ $patient->gender }}</td>
                            <td>{{ $patient->birthday }}</td>
                            <td>{{ $patient->nic }}</td>
                            <td>{{ $patient->mobile }}</td>
                            <td>{{ $patient->gMobile }}</td>
                            <td>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Add to...
                                <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">9 - 10</a></li>
                                    <li><a href="#">10 - 11</a></li>
                                    <li><a href="#">11 - 12</a></li>
                                </ul>
                            </div>
                            </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
			</div>
		</div>
	</div>
@endsection
