@extends('layout.master')

@section('title', 'Product')

@section('content')

<div class="contener">
    <div class="row">
        <div class="col-md-12">
            <h1 class="p-2 m-2">Home Page</h1>
            <div class="col-lg-12 d-flex   flex-row flex-wrap justify-content-center align-content-center" style="2px soild #000 #000; margin: 10px; ">

                @foreach ( $products as $index => $item )
                <div class=" col-lg-3 p-3 d-flex flex-column justify-content-center align-content-center " >
                        <div class="img-fluid" style="width: 100%; height: auto">
                            <img src="{{$item['images'][0]}}" alt="" class="imgproduct img-fluid p-2 m-2" style="max-width: 50%; max-height: auto;" >
                        </div>
                    <h2 class="title_product">{{$item['title']}}</h2>
                    <p class="category">{{$item['category']}}</p>
                    <p class="description">{{$item['description']}}</p>
                    <p class="description"></p>

                </div>
                @endforeach
            </div>

        </div>
    </div>
</div>


@endsection

@section('script')

<script>
    $(document).ready(function(){
        let product = [];
        $.ajax({
            url: "https://dummyjson.com/products",
            type: "GET",
            dataType: "json",
            success: function(response) {
                product = response.products;
                console.log(product);
            },
            error: function(xhr, status, error) {
                console.error("AJAX Error:", error);
            }
        });
    });


</script>

@endsection
