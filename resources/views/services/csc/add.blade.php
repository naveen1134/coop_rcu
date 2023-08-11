@extends('layouts.master')
@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Services</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/society/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item">Services</li>
                <li class="breadcrumb-item">Common Services Centres</li>
                <li class="breadcrumb-item active">add</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> Common Services Centres</h5>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 mb-4">
                                @if(session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-sm-12 col-md-12 mb-4">
                                @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                            </div>
                        </div>
                        <!-- Floating Labels Form -->
                        <form action="{{url('/society/services/csc/store')}}" method="post" id="cscadd" class="row g-3">
                            @csrf
                            <div class="col-md-3">
                            </div>
                            <div class="col-md-6">

                                <div class="row margindiv">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingName" name="count" placeholder="Your Others No." required>
                                            <label for="floatingName">Count</label>
                                        </div>
                                        <div class="invalid-feedback">Please enter your count.</div>
                                    </div>
                                </div>

                                <div class="row margindiv">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingName" name="income" placeholder="Your Others Amount." required>
                                            <label for="floatingName">Income Generated (rs)</label>
                                        </div>
                                    </div>
                                    <div class="invalid-feedback">Please enter income.</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary" id="cscsubmit">Submit</button>
                            </div>

                        </form><!-- End floating Labels Form -->

                    </div>




                </div>
            </div>
    </section>

</main><!-- End #main -->
@endsection