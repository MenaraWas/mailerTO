@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>List Akun Peserta</h1>
            <div class="row mb-3">
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Jumlah Peserta</h5>
                      <h3 class="card-text">127</h3>
                    </div>
                  </div>
                </div>
              </div>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <td>id</td>
                    <td>firstname</td>
                    <td>lastname</td>
                    <td>email</td>
                    <td>username</td>
                    <td>password</td>
                    <td>Action</td>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($members as $peserta)
                    <tr>
                        <td>{{$peserta['id']}}</td>
                        <td>{{$peserta['firstname']}}</td>
                        <td>{{$peserta['lastname']}}</td>
                        <td>{{$peserta['email']}}</td>
                        <td>{{$peserta['username']}}</td>
                        <td >{{$peserta['password']}}</td>
                        <td>
                            <a href={{"edit/".$peserta['id']}}>Update</a> | <a href="#">Send Email</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection
