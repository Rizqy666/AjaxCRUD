@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="post" class="form-label">Post</label>
                                <textarea name="post" id="post" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit">Post</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
