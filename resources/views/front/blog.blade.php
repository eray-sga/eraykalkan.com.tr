@extends('front.layout')
@section('title') Blog - @endsection
@section('body')
<div id="blog">
    <div class="row">
        <section class="blog col-md-12 bottom_30">
            <div class="col-md-12 content-header">
                <div class="section-title top_30 bottom_15"><span></span><h2>Yazılarım</h2></div>
            </div>
            <div id="grid-blog" class="row">
                
                <!-- a blog -->
                @foreach ($blog as $bl)
                <div class="cbp-item">
                    <div class="cbp-item-wrapper">
                        <a href="{{route('blogdetail',$bl->slug)}}" class="blog-box">
                            <div class="blog-box-info">
                                <h2 class="title">{{$bl->title}}</h2>
                                <p class="little-text">
                                    {{ Str::limit(trim(html_entity_decode(strip_tags($bl->description), ENT_QUOTES, 'UTF-8')), 20) }}
                                </p>
                            </div>
                            
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
           
        </section>
    </div>
</div>
@endsection