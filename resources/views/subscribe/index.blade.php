@extends('layouts.app')

@section('title', 'Vendor Subcription Interface')

@section('content')

<!-- Page Content-->
<div class="container py-4 py-lg-5 my-4">
    <div class="row justify-content-center" style="margin-top: 10%;">
        <div class="col-sm-12 col-lg-10 col-md-12">
            <h2 class="h3 mb-4">Vee Subscription</h2>
            <p class="font-size-md">Subcribe to your most suited plan.</p>
            <ol class="list-unstyled font-size-md">
                <li><span class="text-primary mr-2">1.</span>Click on choose.</li>
                <li><span class="text-primary mr-2">2.</span>Pay Your Subscription fee online.</li>
            </ol>
            <div class="card py-2 mt-4">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <form class="needs-validation" novalidate method="POST" id="subd" action="{{ route('merchant.subscribed') }}" enctype="multipart/form-data">
                    @csrf
                    <!-- Simple list group inside card -->
                    <div class="row">
                        @foreach ($plans as $plan)
                        <div class="col-md-{{ $plans->count() == 2 ? "6" : "4" }} ">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $plan->name }} <span>
                                            <h5>&#8358; {{ $plan->price }} per {{ $plan->invoice_interval }}</h5>
                                        </span></h5>
                                    <p class="card-text font-size-sm text-muted">{{ $plan->description }}</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    @foreach ($plan->features as $feature)
                                    <li class="list-group-item">{{ $feature->name }} - {{ $feature->value }}</li>
                                    @endforeach
                                    <li class="list-group-item">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                                <div class="card-body">
                                    
                                    <a href="#" onclick="choosePlan('{{ $plan->name }}');" class="btn btn-sm btn-primary {{ Auth::user()->merchant->subscribedTo($plan->id) ? "disabled" : "" }}">{{ Auth::user()->merchant->subscribedTo($plan->id) ? "You have an active Subscription" : "Choose Plan" }}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <input type="hidden" name="merchant_id" value="{{ Auth::user()->merchant->id }}">
                        <input type="hidden" id="plan_id" name="plan_id" value="">
                        <input type="hidden" id="trnx" name="trnx" value="">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script src="https://js.paystack.co/v1/inline.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    var plans = {!!$plans!!};
    var subdUrl = "{{ route('merchant.subscribed') }}";
    var merchant_id = "{{ Auth::user()->merchant->id }}";

    function choosePlan(planname) {
        planx = plans.find(plan => plan.name === planname);;
        payWithPaystack(planx);
    }

    function payWithPaystack(e) {
        //e.preventDefault();
        let handler = PaystackPop.setup({
            key: 'pk_live_121ff057ef0a1250bfddacd23ae944eaeaf63954', //'pk_test_a2e11c0f1cddcce1fb9f8753599ba19e944e6486', // // Replace with your public key
            email: "{{ Auth::user()->email }}"
            , amount: e.price * 100
            , ref: '' + Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            // label: "Optional string that replaces customer email"
            onClose: function() {
                alert('Window closed, Payment not successful.');
            }
            , callback: function(response) {
                let message = 'Payment complete! Reference: ' + response.reference;
                //alert(message);
                //console.log(response);
                $('#trnx').val(JSON.stringify(response));
                $('#plan_id').val(e.id);
                
                $('#subd').submit();
            }
        });
        handler.openIframe();
    }

    function submitToserver(response,e) {
       /*  var form = new FormData();
                form.append('trnx', response);
                form.append('plan_id', e.id);
                form.append('merchant_id', merchant_id);
                form.append('_token',"{{ csrf_token() }}"); */

                


                if (response.status == "success" && response.message == "Approved") {
                    console.log(form);

                    /* $.ajax({
                        url: subdUrl,
                        type: "post",
                        data: form,
                        success: function(response) {
                            console.log(response)
                            // You will get response from your PHP page (what you echo or print)
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.log(textStatus, errorThrown);
                        }
                    }); */

                }
    }

</script>
@endpush
