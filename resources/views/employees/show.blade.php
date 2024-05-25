@extends('layouts.app')

@section('content')
    <div class="row">
        <h3>Employee Details </h3>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">First Name</label>:{{$employee->f_name}}
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Last Name</label>:{{$employee->l_name}}
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Company</label>:{{$employee->company->name}}
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Email</label>:{{$employee->emp_email}}
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Phone Number</label>:{{$employee->emp_phone}}
                    </div>

                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <a href="{{ route('employees.index') }}"> Employees List</a>
    </div>
@endsection
