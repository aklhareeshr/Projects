@extends('layouts.app')

@section('content')
    <div class="row">
        <h3>Company Details </h3>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Name</label>:{{$company_info->name}}
                    </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Email</label>:{{$company_info->email}}
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Logo</label>:
                            @if($company_info->logo)
                                <img src="{{ asset('storage/' . $company_info->logo) }}" alt="Logo" width="100">
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Website</label>:{{$company_info->website}}
                        </div>
                </div>
                <div class="col-md-4"></div>
            </div>


        </div>
        <a href="{{ route('companies.index') }}"> Companies List</a>
    </div>
@endsection
