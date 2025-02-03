@extends('layout.master')

@section('title', 'Home Page')

@section('content')

<div class="container"></div>
    <div class="row">
        <div class="col-lg-3 m-0 p-0">
            <ul class="m-0 p-0" style="width: 100%; height: 100px;">
                <li>Menu 0
                    <ul class="dropdown-content">
                        <li>Submenu 1-1</li>
                        <li>Submenu 1-2</li>
                    </ul>
                </li>
                <li>Menu 2
                    <ul class="dropdown-content">
                        <li>Submenu 2-1</li>
                        <li>Submenu 2-2</li>
                    </ul>
                </li>
                <li>Menu 3
                    <ul class="dropdown-content">
                        <li>Submenu 2-1</li>
                        <li>Submenu 2-2</li>
                    </ul>
                </li>
                <li>Menu 4
                    <ul class="dropdown-content">
                        <li>Submenu 2-1</li>
                        <li>Submenu 2-2</li>
                    </ul>
                </li>
                <li>Menu 5
                    <ul class="dropdown-content">
                        <li>Submenu 2-1</li>
                        <li>Submenu 2-2</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="col-lg-9 m-0 p-0">
            <div class="banner" style="width: 100%; height:300px; background-color:rgb(47, 124, 88);"></div>
            <div class="col-lg-12 banner-sec" style="width: 100%; height:200px; background-color:rgb(139, 30, 151);"></div>
            <div class="col-lg-12 d-flex flex-row flex-wrap" style="width: 100%; height:auto;">
                <div class="col-lg-6 " style="width: 50%; height:100px;background-color:black;"></div>
                <div class="col-lg-6 " style="width: 50%; height:100px;background-color:red;"></div>
                <div class="col-lg-6 " style="width: 50%; height:100px;background-color:green;"></div>
                <div class="col-lg-6 " style="width: 50%; height:100px;background-color:blue;"></div>
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

@section('style')
<style>
    ul {
    list-style: none;
    padding: 0;
    width: 200px;
}
li {
    background: #f0f0f0;
    padding: 10px;
    position: relative;
    cursor: pointer;
}
li:hover {
    background: #ddd;
}
.dropdown-content {
    display: none;
    position: absolute;
    left: 100%;
    top: 0;
    background: #fff;
    border: 1px solid #ccc;
    min-width: 150px;
}
li:hover .dropdown-content {
    display: block;
}
</style>
@endsection
