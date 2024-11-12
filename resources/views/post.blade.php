@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <?php  // print_r($posts, false);  ?>
                <div class="card mb-4">
                    <div class="card-header">{{ $post->title }}</div>
                    <div class="card-body">
                        @if ($post->image) 
                            <img src="{{ $post->get_image }}" class="card-img-top" alt="">
                        @elseif ($post->iframe)
                            <div class="embed-responsive embed-responsive-16by9">
                                {!! $post->iframe !!}
                            </div>
                        @endif
                        <p>
                            {{ $post->body }}
                        </p>
                        <p class="text-muted mb-0 ">
                            <em>
                                &ndash; {{ $post->user->name }} 

                            </em>
                            {{ $post->created_at->format('d M Y') }}
                        </p>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
