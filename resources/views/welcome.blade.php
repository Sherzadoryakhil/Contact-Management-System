@extends("layouts.public")

@section("content")
    <div class="py-5 bg-white">
        <div class="px-4 my-5 text-center">
            <h1 class="display-5 fw-bold mt-4">Contact App</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Contact App gives you everything you need to organize your contacts easily.</p>
                <div class="d-flex justify-content-sm-center">
                    <a href="#" class="btn btn-primary btn-lg mr-2">Sign up</a>
                    <a href="#" class="btn btn-outline-secondary btn-lg">Sign in</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-4">
                <h3>Data Protection</h3>
                <p>In the event of contact deletion or corruption, keep your contacts secure and unharmed across all of
                    your connected accounts.</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <h3>Notes & Tags</h3>
                <p>Group, search, and filter your contacts using notes and tags.</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <h3>Birthday Reminders</h3>
                <p>Weekly notifications are sent to you, including birthday reminders.</p>
            </div><!-- /.col-lg-4 -->
        </div>
    </div>
    <section class="bg-white">
        <div class="container py-5">
            <h2 class="text-center my-5">Easy to try. Fair pricing to upgrade.</h2>
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Free</h4>
                    </div>
                    <div class="card-body">
                        <h3 class="pricing-card-title">$0 <small class="text-muted">/ mo</small></h3>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>1,000 Contacts</li>
                            <li>Sync 1 Accounts</li>
                            <li>Basic Features</li>
                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Pro</h4>
                    </div>
                    <div class="card-body">
                        <h3 class="pricing-card-title">$9 <small class="text-muted">/ mo</small></h3>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>25,000 Contacts</li>
                            <li>Sync 5 Accounts</li>
                            <li>Pro Features</li>
                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Enterprise</h4>
                    </div>
                    <div class="card-body">
                        <h3 class="pricing-card-title">$15 <small class="text-muted">/ mo</small></h3>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>50,000 Contacts</li>
                            <li>Sync 7 Accounts</li>
                            <li>Advance Features</li>
                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body> --}}
    
    {{-- {{ date("Y") }} --}}
    {{-- <br> --}}
    {{-- {{ 3 + 7 }} --}}
    {{-- <br> --}}
    {{-- we don't want to the data be skip used the below syntax --}}
    {{-- {!! "<h3>Hello</h3>" !!} --}}
    {{-- <?= "<h3>Hello</h3>" ?> --}}

    {{-- <h2> --}}
        {{-- Hello @{{ name }} --}}
    {{-- </h2> --}}

    {{-- @php --}}
        {{-- $message = "Hello World";     --}}
    {{-- @endphp --}}
    {{-- <h1>{{ $message }}</h1> --}}
    {{-- this is a comment --}}

    {{-- ========================== --}}
        {{-- <h1>Contact App</h1>
        <div>
        <a href="{{ route('contacts.index') }}">All Contacts</a> --}}
        {{-- <a href="{{ route('contacts.create', 5) }}">Add Contacts</a> --}}
        {{-- <a href="{{ route('contacts.show', 1) }}">Show Contacts</a> --}}
    {{-- </div>
</body>
</html> --}}
