@extends('layouts.app')

@section('main-content')
    <main>
        <div class="container">
            <div class="row">
                @forelse ($trains as $train)
                    <div class="col-3">
                        <div class="card">
                            <img src="{{ Vite::asset('resources/assets/img/train.png') }}" alt="Train">
                            <div class="card-body">
                                <h4>
                                    {{ $train->company }}
                                </h4>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </main>
@endsection
