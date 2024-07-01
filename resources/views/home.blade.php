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
    @php
        // $data = true;

        $i = 3;
    @endphp

    @isset($data)
        <div class="alert alert-success d-inline-block w-20">Success</div>
    @endisset

    @switch($i)
        @case(1)
            <div class="alert alert-danger">1</div>
        @break

        @case(2)
            <div class="alert alert-success">2</div>
        @break

        @default
            <div class="alert alert-warning">{{ $i }}</div>
    @endswitch
@endsection
