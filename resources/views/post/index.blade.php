@vite(['resources/css/app.css', 'resources/js/app.js'])
@extends('layouts.main')
@section('main')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Время постов!</h1>
            <section class="featured-posts-section">
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-md-4 fetured-post blog-post" data-aos="fade-up">
                            <div class="blog-post-thumbnail-wrapper">
                                <img src="{{ 'storage/' . $post->preview_image }}" alt="blog post">
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="blog-post-category">{{ $post->category->title }}</p>
                                @auth()
                                <form action="{{ route('like.store', $post->id) }}" method="post">
                                    @csrf
                                    <span>{{ $post->likedUsers->count() }}</span>
                                    <button type="submit" class="border-0 bg-transparent">
                                            @if(auth()->user()->likedPosts->contains($post->id))
                                                <i class="fa-solid fa-heart" style="color: #f50000;"></i>
                                            @else
                                                <i class="fa-regular fa-heart"></i>
                                            @endif
                                    </button>
                                </form>
                                @endauth
                                @guest()
                                    <div>
                                        <span>{{ $post->likedUsers->count() }}</span>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                @endguest
                            </div>
                            <a href="{{ route('main.post.show', $post->id) }}" class="blog-post-permalink">
                                <h6 class="blog-post-title">{{ $post->title }}</h6>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="mx-auto" style="margin-top: -60px; margin-bottom: 100px; ">
                        {{ $posts->links() }}
                    </div>
                </div>
            </section>
            <div class="row">
                <div class="col-md-8">
                    <section>
                        <div class="mx-auto">
                            <h5 data-aos="fade-up">Случайные посты</h5>
                        </div>
                        <div class="row blog-post-row">
                            @foreach($randomPosts as $post)
                                <div class="col-md-6 blog-post" data-aos="fade-up">
                                    <div class="blog-post-thumbnail-wrapper">
                                        <img src="{{ 'storage/' . $post->preview_image }}" alt="blog post">
                                    </div>
                                    <p class="blog-post-category">{{ $post->category->title }}</p>
                                    <a href="{{ route('main.post.show', $post->id) }}" class="blog-post-permalink">
                                        <h6 class="blog-post-title">{{ $post->title }}</h6>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </section>
                </div>
                <div class="col-md-4 sidebar" data-aos="fade-left">
                    <div class="widget widget-post-list">
                        <h5 class="widget-title">Популярные посты</h5>
                        <ul class="post-list">
                            @foreach($likedPosts as $post)
                                <li class="post">
                                    <a href="{{ route('main.post.show', $post->id) }}" class="post-permalink media">
                                        <img src="{{ 'storage/' . $post->preview_image }}" alt="blog post">
                                        <div class="media-body">
                                            <h6 class="post-title">{{ $post->title }}</h6>
                                        </div>
                                    </a>
                                </li>

                            @endforeach
                        </ul>
                    </div>
                    <div class="widget" style="margin-top: 130px; margin-bottom: 100px; " data-aos="fade-left">
                        <h5 class="widget-title">Категории</h5>
                        <img src="{{ asset('assets/images/blog_widget_categories.jpg') }}" alt="categories" class="w-100">
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
