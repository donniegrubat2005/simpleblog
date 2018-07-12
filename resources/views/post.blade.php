@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard - Posts
				<div class="float-right" id="btn-create">
						<a href="/posts/create" class="btn btn-success">Create</a>
					</div>
				</div>
                
                <div class="card-body">
                <table class="table table-table">
                        <thead>
							<tr>
								<th>Title</th>
								<th>Content</th> 
								<th>User Name</th>
                                <th>Created</th>
                                <th>Updated</th>
								<th colspan="2">Action</th>
							</tr>
						</thead>
						@foreach($posts as $post)
						   
						<tbody>
							<tr>

								<td>{{$post->title}}</td>
								<td>{{$post->content}}</td>
								<td>{{$post->username}}</td>
								<td>{{$post->created_at}}</td>
								<td>{{$post->updated_at}}</td>
								<td><a href="/posts/{{ $post->id }}/edit" class="btn btn-success btn-sm">
								Edit</a></td>
								<td>
									<form action="/posts/{{ $post->id }}" method="POST">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}
										<button class="btn btn-danger btn-sm">Delete</button>
									</form>
								</td>
							</tr>

						</tbody>
						
						@endforeach
					</table>
                </div>
                <div class="card-footer">
				<div class="pull-right" id="page_link">
						{{ $posts->links() }}
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
