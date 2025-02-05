@extends('layout.leaderboard')
@section('page-title')
    Leaderbord-Showdata
@endsection
@section('content')
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">View User Data</h3>
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <div data-mdb-input-init class="form-outline">
                                        <label class="form-label" for="username">Username</label>
                                        <input type="text" id="username" name="username"
                                            class="form-control form-control-lg" value="{{ @$user->username }}" readonly />
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 mb-4 pb-2">

                                    <div class="form-outline">
                                        <label class="form-label" for="points">Points</label>
                                        <input type="text" id="points" name="points"
                                            class="form-control form-control-lg" value="{{ @$user->points }}" readonly />
                                    </div>

                                </div>
                                <div class="col-md-4 mb-4 pb-2">

                                    <div class="form-outline">
                                        <label class="form-label" for="wins">Wins</label>
                                        <input type="tel" id="wins" name="wins"
                                            class="form-control form-control-lg" value="{{ @$user->wins }}" readonly />
                                    </div>

                                </div>
                                <div class="col-md-4 mb-4 pb-2">

                                    <div class="form-outline">
                                        <label class="form-label" for="losses">Losses</label>
                                        <input type="tel" id="losses" name="losses"
                                            class="form-control form-control-lg" value="{{ @$user->losses }}" readonly />
                                    </div>

                                </div>
                            </div>
                            <div class="mt-4 pt-2">
                                <a href="{{ route('deshbord') }}" class="btn btn-danger btn-lg">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
