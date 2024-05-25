@extends('layouts.app')

@section('content')
    <div class="row">
        <h3>Company List</h3>
        <div class="col-md-12">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <a class="pull-right btn btn-primary col-md-1" style="float: right" href="{{route('companies.create')}}">Add Company</a>
                <table class="table table-striped">

                    <thead>
                    <tr>

                        <th>Name</th>
                        <th>Email</th>
                        <th>Logo</th>
                        <th>Website</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($companies as $company)
                        <tr>

                            <td>{{ $company->name }}</td>
                            <td>{{ $company->email }}</td>
                            <td>
                                @if($company->logo)
                                    <img src="{{ asset('storage/' . $company->logo) }}" alt="Logo" width="100">
                                @endif
                            </td>
                            <td>{{ $company->website }}</td>
                            <td>
                                <a style="margin-right: 5px;" class=" btn btn-primary btn-sm" href="{{ route('companies.show', $company->id) }}">Show</a>
                                <a class=" btn btn-primary btn-sm" href="{{ route('companies.edit', $company->id) }}">Edit </a></td>
                            <td>
                                <form action="{{ route('companies.destroy', $company->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $companies->links() }}
            </div>
        </div>
    </div>
@endsection
