@extends('layout.master')

@section('title', 'Product')


@section('content')

<div class="container"></div>
    <din class="row">
        <div class="col-lg-12">
            <form id="insertAbout">
                @csrf
                <div class="form-row">
                  <div class="col">
                    <input type="text" id="fname" class="form-control" placeholder="f name">
                  </div>
                  <div class="col">
                    <input type="text" id="lname" class="form-control" placeholder="L name">
                  </div>
                  <div class="col">
                    <input type="text" id="nickname" class="form-control" placeholder="nick name">
                  </div>

                </div>
                <button type="submit"  class=" btn-danger"> click</button>
              </form
        </div>
    </din>
</div>

@endsection

@section('script')

<script>
    $(document).ready(function(){
        $('#insertAbout').submit(function(e){
            e.preventDefault();

            let formData = {
                fname: $('#fname').val(),
                lname: $('#lname').val(),
                nickname: $('#nickname').val(),
            }
        $.ajax({
            url : '/insertabout',
            type : 'POST',
            data : formData,
            headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // ใส่ตรงนี้
                },
            success :function(response){
                alert(response.message);
            },
            error: function(xhr, status, error) {
                        console.error("เกิดข้อผิดพลาด: " + error);
                    }

        });
        });
    });
</script>

@endsection
