@extends('layout')

@section('content')
    <h1 class="text-center">Users information</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody >
            @if(count($users)>0)
                @foreach ($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                    </tr>
                @endforeach
            @else
                <p>No User Found</p>
            @endif
        </tbody>
    </table>
@endsection