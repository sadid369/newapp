@extends('welcome')

@section('content')
    {{-- <main class="container" role="main">
        <div class="row mt-5">
            @foreach ($users as $user)
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="fw-bold">{{ $user->name }}</h4>
                            <p>{{ $user->email }}</p>
                            <p>{{ $user->address->address }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main> --}}
    <main class="container" role="main">
        <div class="row mt-5">
            @foreach ($cat as $ct)
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="fw-bold">{{ $ct->title }}</h4>
                            <p class="fw-bold">{{ $ct->description }}</p>
                            <p class="btn btn-success">{{ $ct->categories->name }}</p>
                            {{-- <p>{{ $address->user->email }}</p>
                            <p>{{ $address->address }}</p> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
