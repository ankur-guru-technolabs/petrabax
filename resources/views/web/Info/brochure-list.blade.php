@extends('web.master')
@section('content')
<div class="brochure-section">
    <div class="container">
        <div class="section-header d-flex align-items-center">
            <h2>Petrabax Brochure Center</h2>
            <div class="custom-right-search-form ms-auto text-end">
                <form>
                    <div class="search-filed position-relative">
                        <input type="hidden" id="cate_id" value={{$cat_id}}>
                        <input type="text" class="form-control" placeholder="Search..." id="searchInput" value={{$search}}>
                        <button  type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <ul class="nav nav-pills brochure-category-list" id="pills-tab" role="tablist">
            @foreach($categories as $cat)
                <li class="nav-item" role="presentation">
                    <button class="nav-link {{ $cat_id == $cat->id ? 'active' : '' }}" type="button" data-cat-id="{{ $cat->id }}">{{$cat->name}}</button>
                </li>
            @endforeach
        </ul>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active">
                @if($brochures->count() > 0)
                <div class="row">
                        @foreach($brochures as $brochure)
                            <div class="col-md-4 brochure-box">
                                <div class="brochure-box-inner">
                                    <a href="#">
                                    <div class="brochure-images">
                                        <img src="{{ asset('/brochure/'.$brochure->image) }}" alt="Brochure">
                                    </div>
                                    <div class="brochure-content">
                                        <h3>{{$brochure->name}}</h3>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                </div>
                    {{ $brochures->onEachSide(1)->appends(['search' => $search])->links('pagination')}}
                @else
                    <p class="text-center">No record found</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection 
@section('jscontent')
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function () {
        $('.nav-link').on('click', function () {
            var categoryId = $(this).data('cat-id');
            window.location.href = "{{ url('brochure-list') }}/" + categoryId;
        });
    });

    $('#searchInput').keypress(function(event) {
        var searchText = $('#searchInput').val();
        var cate_id = $('#cate_id').val();
        if (event.which == 13){
            if(searchText.length == 0){
                event.preventDefault();
                window.location.href = "{{ route('brochureList') }}";
            }else if(searchText.length < 3){
                event.preventDefault();
            }else{
                event.preventDefault();
                window.location.href = "{{ route('brochureList') }}/"+ cate_id + "/" + searchText + "?page=1";
            }
        }
    }); 
</script>
@endsection
