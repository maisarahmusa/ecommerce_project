<!DOCTYPE html>
<html>

<head>
    @include('admin.css')

    <style>
        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px; 
        }
    </style>
</head>

<body>

    @include('admin.header')

    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('admin.sidebar')
        <!-- Sidebar Navigation end-->
        <div class="page-content">
            <div class="page-header">
                   <div class="container-fluid">
                        <h1 style="color:white"> Update Category </h1>
                        <div class="div_deg">
                            <form action="{{url('update_category', $data->id)}}" method="POST">
                                @csrf
                                <input type="text" name="category_name" value="{{$data->category_name}}">
                                <button type="submit" class="btn btn-primary">Update Category</button>
                            </form>
                        </div>
                   </div>
            </div>    
        </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{ asset('admincss/vendor/jquery/jquery.min.js') }} "></script>
    <script src="{{ asset('admincss/vendor/popper.js/umd/popper.min.js') }} "></script>
    <script src="{{ asset('admincss/vendor/bootstrap/js/bootstrap.min.js') }} "></script>
    <script src="{{ asset('admincss/vendor/jquery.cookie/jquery.cookie.js') }} "></script>
    <script src="{{ asset('admincss/vendor/chart.js/Chart.min.js') }} "></script>
    <script src="{{ asset('admincss/vendor/jquery-validation/jquery.validate.min.js') }} "></script>
    <script src="{{ asset('admincss/js/charts-home.js') }} "></script>
    <script src="{{ asset('admincss/js/front.js') }} "></script>
</body>

</html>