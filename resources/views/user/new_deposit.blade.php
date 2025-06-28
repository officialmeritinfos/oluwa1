@extends('user.base')

@section('content')

    <div class="row">
        <div class="mt-3 mb-3">
            @include('templates.notification')
        </div>
        <div class="col-xl-12 mx-auto row justify-content-center">

            @foreach($coins as $coin)
                <div class="col-xxl-4 col-lg-4 col-sm-4 col-6 mt-3">
                    <div class="payment-box text-center card">
                        <div class="payment-box-thumb">
                            <img src="{{asset('uploads/'.$coin->code)}}" alt="Lights" class="trans-img" style="width: 100px;">
                        </div>
                        <div class="payment-box-content">
                            <h5 class="title">{{$coin->name}}</h5>
                            <button data-bs-id="{{$coin->asset}}" data-bs-coin="{{$coin->name}}" data-bs-toggle="modal" data-bs-target="#paynow" class="btn btn-primary w-100 mt-3">Proceed</button>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>


    <div class="modal fade" id="paynow" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deposit <span id="coin"></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('deposit.new')}}" method="post">
                        @csrf
                        <div class="mb-3" style="display: none;">
                            <label for="recipient-name" class="col-form-label">Asset:</label>
                            <input type="text" class="form-control" name="asset">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Amount:</label>
                            <input type="number" step="0.01" class="form-control" id="recipient-name" name="amount">
                        </div>

                        <div class="mt-3 text-center">
                            <button type="submit" class="btn btn-primary">Deposit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script>
            var exampleModal = document.getElementById('paynow')
            exampleModal.addEventListener('show.bs.modal', function (event) {
                // Button that triggered the modal
                var button = event.relatedTarget
                // Extract info from data-bs-* attributes
                var asset = button.getAttribute('data-bs-id')
                var assetName = button.getAttribute('data-bs-coin')
                // If necessary, you could initiate an AJAX request here
                // and then do the updating in a callback.
                //
                // Update the modal's content.
                var modalTitle = exampleModal.querySelector('.modal-title')
                var modalBodyInput = exampleModal.querySelector('input[name="asset"]')

                modalTitle.textContent = 'Deposit ' + assetName
                modalBodyInput.value = asset
            })
        </script>
    @endpush

@endsection
