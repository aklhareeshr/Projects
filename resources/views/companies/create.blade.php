@extends('layouts.app')

@section('content')


    <div class="row">
        <h5>Add New Company</h5>
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <form action="{{ route('companies.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Name</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name" name="name" value="{{ old('name') }}">
                    @error('name')<div style="color: red"> {{ $message }}</div>@enderror
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Email</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Email" name="email" value="{{ old('email') }}">
                    @error('email')<div style="color: red"> {{ $message }}</div>@enderror
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Logo</label>
                    <input type="file" class="form-control"  name="logo" id="logo">
                    @error('logo')<div style="color: red">{{ $message }}</div>@enderror
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Website</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Website" name="website" value="{{ old('website') }}">
                    @error('website')<div style="color: red">{{ $message }}</div>@enderror
                </div>
                <button type="submit">Add Company</button>
            </form>
        </div>
        <div class="col-md-6"></div>
    </div>

    <a href="{{ route('companies.index') }}"> Companies List</a>
@endsection

