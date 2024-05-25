@extends('layouts.app')

@section('content')
    <div class="row">
        <h3>Edit Employee Details </h3>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">

                    <form action="{{ route('employees.update',$employee->id) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name" name="f_name" value="{{$employee->f_name}}">
                            @error('f_name')<div style="color: red"> {{ $message }}</div>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name" name="l_name" value="{{$employee->l_name}}">
                            @error('l_name')<div style="color: red"> {{ $message }}</div>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Company</label>
                            <select class="form-select" aria-label="Default select example" name="companies">
                                @foreach($companies as $company)
                                    <option value="{{$company->id}}"
                                   {{($employee->companies==$company->id)? 'selected="selected"':"" }}
                                    >{{$company->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Email</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Email" name="emp_email"
                                   value="{{$employee->emp_email}}">
                            @error('emp_email')<div style="color: red"> {{ $message }}</div>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Phone" name="emp_phone"  value="{{$employee->emp_phone}}">
                            @error('emp_phone')<div style="color: red"> {{ $message }}</div>@enderror
                        </div>
                        <button type="submit" class="btn btn-primary ">Save</button>
                    </form>

                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
@endsection
