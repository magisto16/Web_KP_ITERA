@extends('layouts.app')
@section('title') User Management @stop
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            User
                        </div>
                        <div class="col-md-auto">
                            <a href="{{route('register') }}"><button type="button" class="btn btn-primary ">Tambah</button></a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col" >#</th>
                        <th scope="col" class="col-3">Name</th>
                        <th scope="col" >Email</th>
                        <th scope="col" class="col-3">Roles</th>
                        @can('edit-users')
                        <th scope="col" class="col-4">Action</th>
                        @endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $p)
                            <tr>
                            <th scope="row">{{$p->id}}</th>
                            <td>{{$p->name}}</td>
                            <td>{{$p->email}}</td>
                            <td>{{implode(", ", $p->roles()->get()->pluck('name')->toArray())}}</td>
                            <td>
                                @can('edit-users')
                                <a href="{{route('koor.user.edit',$p->id) }}"><button type="button" class="btn btn-warning float-left">Edit</button></a>
                                <form action="{{route('koor.user.destroy',$p->id) }}" method="POST" class="float-left">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <button type="submit" class="btn btn-danger float-right">Delete</button>
                                </form>
                                @endcan
                            </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
