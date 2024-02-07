@extends('web.master')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div class="video-section special-offer-section">
        <div class="container">
            <div class="section-header d-flex align-items-center">
                <h2 class="mb-0">Videos</h2>
                <div class="custom-right-search-form ms-auto text-end">
                    <form>
                        <div class="search-filed position-relative">
                            <input type="text" class="form-control" placeholder="Search..." required>
                            <button  type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                @foreach($videos as $video)
                    <div class="col-md-4 col-6 video-block">
                        <div class="video-inner">
                            <div class="video-image position-relative">
                                @if($video->url == null)
                                    <img src="{{ asset('video/'. $video->thumbnail_image)}}" alt="Video">
                                    <a class="video-play-icon" href="{{ asset('video/'. $video->video)}}" data-fancybox data-width="640" data-height="360">
                                        <i class="fa-regular fa-circle-play"></i>
                                    </a>
                                @else
                                    <img src="assets/images/video-1.jpg" alt="Video">
                                    <a class="video-play-icon" href="{{$video->url}}" data-fancybox data-width="640" data-height="360">
                                        <i class="fa-regular fa-circle-play"></i>
                                    </a>
                                @endif
                            </div>
                            <div class="video-content">
                                <h3>{{$video->title}}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $videos->onEachSide(1)->links('pagination')}}
            

            <!-- <nav aria-label="Page navigation example" class="custom-pagination text-center mb-5">
                <ul class="pagination">
                    {{ $videos->links() }}
                    {!! $videos->render() !!}

                    <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-chevron-left"></i></a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-ellipsis"></i></a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link active" href="#">6</a></li>
                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                    <li class="page-item"><a class="page-link" href="#">8</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-ellipsis"></i></a></li>
                    <li class="page-item"><a class="page-link" href="#">20</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-chevron-right"></i></a></li>
                </ul>
            </nav> -->
        </div>
    </div>
@endsection 
@section('jscontent')
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
