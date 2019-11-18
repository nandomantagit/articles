`@extends('layouts.master')
@section('title', 'Download')
@section('content')
    <table class="table table-bordered">
        <thead>
        <tr>  
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Email Verified at</th>
            <th>Password</th>
        </tr>
        </thead>
        <tbody>
        <a href="{{url('/exportexel')}}" class="btn btn-sm btn-info"> Download Exel</a>
        <a href="{{url('/exportpdf')}}" class="btn btn-sm btn-info"> Download Pdf</a>

        @foreach($datas as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->email_verified_at }}</td>
                <td>{{ $user->password }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection


