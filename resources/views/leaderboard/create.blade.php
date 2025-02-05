@extends('layout.leaderboard')
@section('page-title')
    Leaderbord-Createdata
@endsection
@section('content')
    @include('layout.show_flash_card')
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Create User Data</h3>
                            <form action="{{ route('store.data') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 mb-4">

                                        <div data-mdb-input-init class="form-outline">
                                            <label class="form-label" for="username">Username</label>
                                            <input type="text" id="username" name="username"
                                                class="form-control form-control-lg" value="{{ old('username') }}" />
                                            @if ($errors->has('username'))
                                                <span class="text-danger">{{ $errors->first('username') }}</span>
                                            @endif
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 mb-4 pb-2">

                                        <div class="form-outline">
                                            <label class="form-label" for="points">Points</label>
                                            <input type="text" id="points" name="points"
                                                class="form-control form-control-lg" value="{{ old('points') }}" />
                                            @if ($errors->has('points'))
                                                <span class="text-danger">{{ $errors->first('points') }}</span>
                                            @endif
                                        </div>

                                    </div>
                                    <div class="col-md-4 mb-4 pb-2">

                                        <div class="form-outline">
                                            <label class="form-label" for="wins">Wins</label>
                                            <input type="tel" id="wins" name="wins"
                                                class="form-control form-control-lg" value="{{ old('wins') }}" />
                                            @if ($errors->has('wins'))
                                                <span class="text-danger">{{ $errors->first('wins') }}</span>
                                            @endif
                                        </div>

                                    </div>
                                    <div class="col-md-4 mb-4 pb-2">

                                        <div class="form-outline">
                                            <label class="form-label" for="losses">Losses</label>
                                            <input type="tel" id="losses" name="losses"
                                                class="form-control form-control-lg" value="{{ old('losses') }}" />
                                            @if ($errors->has('losses'))
                                                <span class="text-danger">{{ $errors->first('losses') }}</span>
                                            @endif
                                        </div>

                                    </div>
                                </div>
                                <div class="mt-4 pt-2">
                                    <a href="{{ route('deshbord') }}" class="btn btn-danger btn-lg">Cancel</a>
                                    <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
