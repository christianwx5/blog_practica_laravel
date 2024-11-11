@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <?php  // print_r($posts, false);  ?>
                <div class="card mb-4">
                    <div class="card-header">{{ $post->title }}</div>
                    <div class="card-body">
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
