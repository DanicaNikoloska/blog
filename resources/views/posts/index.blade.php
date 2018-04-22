@extends('layouts.app')

@section('content')

<!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          @include('inc.messages')

          <!-- Blog Posts -->
          @foreach($posts as $post)
            <div class="card mb-4">
              <img class="card-img-top" src="{{ asset('/storage/images/'.$post->image) }}" alt="Card image cap">
              <div class="card-body">
                <h2 class="card-title">{{ $post->title }}</h2>
                <p class="card-text">{{ $post->description }}</p>
                <a href="#" class="btn btn-primary">Read More &rarr;</a>
              </div>
              <div class="card-footer text-muted">
                Posted on {{ date('d M Y', strtotime($post->created_at)) }} 
                by <i>{{ $post->user->name }}</i>
              </div>
            </div>
          @endforeach

          <div class="paginate-links-centered">
            {{ $posts->links() }}
          </div>          
          
        </div>

        <!-- Sidebar Post Column -->
        <div class="col-md-4">
          @foreach($featured as $post)
            <!-- Featured Post -->
            <br>
            <h5 class="alert alert-info">Featured Post</h5>
            <div class="card my-4">              
              <img class="card-img-featured" src="{{ asset('/storage/images/'.$post->image) }}" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">{{ $post->title }}</h4>
                <p class="card-text">{{ $post->description }}</p>
                <a href="#" class="btn btn-primary">Read More &rarr;</a>
              </div>
              <div class="card-footer text-muted">
                Posted on {{ date('d M Y', strtotime($post->created_at)) }} 
                by <i>{{ $post->user->name }}</i>
              </div>
            </div>
          @endforeach

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

@endsection