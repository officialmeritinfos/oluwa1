@extends('user.base')

@section('content')


    <div class="row">
        <div class="col-xl-8 mx-auto">
            <div class="card border-top border-0 border-4 border-primary">
                <div class="card-body p-5">
                    <div class="card-title d-flex align-items-center">
                        <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                        </div>
                        <h5 class="mb-0 text-primary">{{$pageName}}</h5>
                    </div>
                    <hr>
                    <form class="row g-3" method="post" action="{{route('investment.new')}}">
                        @csrf
                        @include('templates.notification')
                        <div class="form-group col-md-12">
                            <label for="inputAddress2">Package Name</label>
                            <input type="text" class="form-control form-control-lg" id="inputAddress2"
                                   placeholder="Enter Amount to Invest" name="packageName" value="{{$package->name}}" readonly>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputAddress2">Minimum Amount($)</label>
                            <input type="text" class="form-control form-control-lg" id="inputAddress2"
                                   placeholder="Enter Amount to Invest" name="packageName" value="{{$package->minAmount}}" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputAddress2">Maximum Amount($)</label>
                            <input type="text" class="form-control form-control-lg" id="inputAddress2"
                                   placeholder="Enter Amount to Invest" name="packageName" value="{{($package->isFixed==1)?'Fixed':$package->maxAmount}}" readonly>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputAddress2">Amount ($)</label>
                            <input type="number" class="form-control form-control-lg" id="inputAddress2"
                                   placeholder="Enter Amount to Invest" name="amount">
                        </div>
                        <div class="form-group col-md-12" style="display: none;">
                            <label for="inputAddress2">Package</label>
                            <input type="number" class="form-control form-control-lg" id="inputAddress2"
                                   placeholder="Enter Amount to Invest" name="package" value="{{$package->id}}">
                        </div>

                        <div class="form-group col-md-12 mx-auto">
                            <label for="inputAddress2">Account</label>
                            <select type="number" class="form-control form-control-lg" id="inputAddress2"
                                    name="account">
                                <option value="">Select a Account</option>
                                <option value="1">Account Balance</option>
                                @if($user->canCompound==1)
                                    <option value="2">Reinvest from Profit Balance</option>
                                @endif
                            </select>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Invest</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
