@extends('welcome');

@section('content')
    <div class="row mt-5 justify-content-center">
        <div class="col-md-6">
            <h2 class="mb-12">Login</h2>
            @if ($errors->any())
                @foreach ($errors->All() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            @endif


            <div class="card">
                <div class="card-body">
                    <form action="login" method="post">
                        @csrf
                        <div class="mb-2">
                            <label for="" class="form-label">User Name</label>
                            <input name='name' type="text" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">User Email</label>
                            <input name='email' type="text" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">User Password</label>
                            <input name='password' type="password" class="form-control">
                        </div>
                        <button class="btn btn-primary mt-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
