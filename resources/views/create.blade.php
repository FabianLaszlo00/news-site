@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form action="{{route('news.save')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title"/>
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <input type="text" class="form-control" name="content"/>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <input type="hidden" name='user_id' value="{{auth()->id()}}">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
