@extends('welcome')

@section('content')
    <main class="container" role="main">
        <h1 class="mt-5 text-danger">Home</h1>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias iure perferendis autem at facere odit beatae ex.
        Libero doloribus inventore non, et ipsum eius reiciendis facere asperiores accusantium quo odit.
        <div class="row mt-5">
            @foreach ($blogs as $blog)
                @if ($blog['status'] == 1)
                    <div class="col-md-4">
                        <div class="card mb-5">
                            <div class="card-body">
                                <h2>{{ $blog['title'] }}</h2>
                                <p>
                                    {{ $blog['body'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-md-4">
                        <div class="card mb-5">
                            <div class="card-body">
                                <h2>{{ $blog['title'] }}</h2>
                                <p>
                                    {{ $blog['body'] }}
                                </p>
                                <div class="btn btn-warning">Pending</div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

        </div>
    </main>
@endsection
