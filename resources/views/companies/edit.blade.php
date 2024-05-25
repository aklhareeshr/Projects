@extends('layouts.app')

@section('content')
    <div class="row">
        <h3>Edit Company Details </h3>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">

                    <form action="{{ route('companies.update',$company_info->id) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Name</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name" name="name" value="{{$company_info->name}}">
                            @error('name')<div style="color: red"> {{ $message }}</div>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Email</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Email" name="email" value="{{$company_info->email}}">
                            @error('email')<div style="color: red"> {{ $message }}</div>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Logo</label>
                            <input type="file" class="form-control"  name="logo" id="logo" value="{{$company_info->logo}}">
                            @error('logo')<div style="color: red">{{ $message }}</div>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Website</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Website" name="website" value="{{$company_info->website}}">
                            @error('website')<div style="color: red">{{ $message }}</div>@enderror
                        </div>
                        <button type="submit" class="btn btn-primary ">Save</button>
                    </form>

                </div>
                <div class="col-md-4"></div>
            </div>


        </div>
    </div>
@endsection
