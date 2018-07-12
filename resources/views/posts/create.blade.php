@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Posts</div>
                <div class="card-body">
                <form action="/posts" method="post">
                    {{ csrf_field() }}
                <input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
                <div class="formgroup">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control">
                <label for="content">Content</label>
                <textarea name="content" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <div class="btnsubmit">
                <input type="submit" class="btn btn-success float-right">
                </div>
                </form>
                </div>
                <div class="card-footer">
				
                </div>
            </div>
        </div>
    </div>
</div>
@endsection