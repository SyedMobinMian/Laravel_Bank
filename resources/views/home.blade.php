@extends('layouts.app')

@section('content')
<div class="page-heading">{{ __('Dashboard') }}</div>
<div class="module-container">
    <!-- Display Session Status -->
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    
    <form class="form" action="" method="post">
        @csrf
        <div class="form-section">
            <h3>Bank Details</h3>
            <div class="underline"></div>
            <div class="row">
                <div class="col">
                    <label for="account-holder">Account Holder Name</label>
                    <input type="text" class="form-control" id="account-holder" placeholder="Account Holder Name">
                </div>
                <div class="col">
                    <label for="account-number">Account Number</label>
                    <input type="text" class="form-control" id="account-number" placeholder="Account Number">
                </div>
                <div class="col">
                    <label for="bank-name">Bank Name</label>
                    <input type="text" class="form-control" id="bank-name" placeholder="Bank Name">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="ifsc-code">IFSC Code</label>
                    <input type="text" class="form-control" id="ifsc-code" placeholder="IFSC Code">
                </div>
                <div class="col">
                    <label for="zip-code">Zip Code</label>
                    <input type="text" class="form-control" id="zip-code" placeholder="Zip Code">
                </div>
                <div class="col">
                    <label for="state">State</label>
                    <input type="text" class="form-control" id="state" placeholder="State">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="branch">Branch</label>
                    <input type="text" class="form-control" id="branch" placeholder="Branch">
                </div>
            </div>
        </div>
    </form>
    <br>
    <button type="submit">Submit</button>
</div>
@endsection



  