@extends('layouts.app')

@section('content')
    <div class="row">
        <h5>Add New Employee</h5>
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <form action="{{ route('employees.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name" name="f_name" value="{{ old('f_name') }}">
                    @error('f_name')<div style="color: red"> {{ $message }}</div>@enderror
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name" name="l_name" value="{{ old('l_name') }}">
                    @error('l_name')<div style="color: red"> {{ $message }}</div>@enderror
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Company</label>
                    <select class="form-select" aria-label="Default select example" name="companies">
                        @foreach($companies as $company)
                            <option value="{{$company->id}}">{{$company->name}}</option>
                        @endforeach

                    </select>
                    @error('companies')<div style="color: red"> {{ $message }}</div>@enderror
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Email</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Email" name="emp_email" value="{{ old('emp_email') }}">
                    @error('emp_email')<div style="color: red"> {{ $message }}</div>@enderror
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Phone" name="emp_phone" value="{{ old('emp_phone') }}">
                    @error('emp_phone')<div style="color: red"> {{ $message }}</div>@enderror
                </div>

                <button type="submit">Add Employee</button>
            </form>
        </div>
        <div class="col-md-6"></div>
    </div>

    <a href="{{ route('employees.index') }}"> Employee List</a>
@endsection

