@extends('user.base')
@section('content')

    <div class="pricing-area">
        <div class="container-fluid">
            <div class="row justify-content-center">
                @foreach($packages as $package)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card border shadow-sm">
                            <div class="card-header text-center bg-light">
                                <h5 class="fw-bold">{{ $package->name }} Package</h5>
                                <p class="mb-0"></p>
                            </div>
                            <div class="card-body text-center">
                                <h2 class="fw-bold text-primary mb-1">{{ number_format($package->roi, 2) }}%</h2>
                                <small class="text-muted">Daily Interest</small>
                                <hr>
                                <h5 class="fw-bold mb-0">{{ $package->Duration }}</h5>
                                <small class="text-muted">Term Days</small>
                            </div>
                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item">
                                    <strong>Min Deposit:</strong> ${{ number_format($package->minAmount, 2) }}
                                </li>
                                <li class="list-group-item">
                                    <strong>Max Deposit:</strong>
                                    @if($package->unlimited != 1)
                                        ${{ number_format($package->maxAmount, 2) }}
                                    @else
                                        Unlimited
                                    @endif
                                </li>
                                <li class="list-group-item">
                                    <strong>Profit Return:</strong>
                                    {{ $package->returnTypes->name }}
                                </li>
                                <li class="list-group-item">
                                    <strong>Total Return:</strong> {{ number_format($package->roi * $package->numberOfReturns, 2) }}%
                                </li>
                            </ul>
                            <div class="card-footer text-center bg-light">
                                <a href="{{ route('new_investment.select', ['id' => $package->id]) }}" class="btn btn-primary w-100">
                                    Invest Now
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>

@endsection
