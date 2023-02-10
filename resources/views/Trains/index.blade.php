@extends('layouts.app')

@section('main-content')
    <main>
        <div class="container">
            <div class="row">
                @forelse ($trains as $train)
                    <div class="col-3">
                        <div class="card mb-4">
                            <img src="{{ Vite::asset('resources/assets/img/train.png') }}" alt="Train">
                            <div class="card-body">
                                <h5>
                                    {{ $train->company }}
                                </h5>
                                <p>
                                    From: {{ $train->departure_station }} to: {{ $train->arrival_station }}
                                </p>
                                <p>
                                    Departure: {{ $train->departure_time }} Arrival: {{ $train->arrival_time }}
                                </p>
                                <p>
                                    Train: {{ $train->train_code }}
                                </p>
                                <p>
                                    Carriages: {{ $train->number_of_carriages }}
                                </p>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </main>
@endsection
