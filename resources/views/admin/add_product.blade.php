<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
    <script src="{{ asset('admincss/vendor/jquery/jquery.min.js') }} "></script>
    <link href="{{ asset('admincss/css/select2.min.css') }}" rel="stylesheet">
    <script src="{{ asset('admincss/js/select2.min.js')}}"></script>

    <style type="text/css">
        .div_deg {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 30px; 
    }

    h1 {
        color: white;

    }

    label {
        display: inline-block;
        width: 250px;
        font-size: 18px !important;
        color: white !important;
    }

    input[type="text"]
    {
        width: 200px;
        height: 50px;
    }

    textarea
    {
        width: 450px;
        height: 80px;
    }

    .input_deg
    {
        padding: 15px;

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
                    <h1>Add Product</h1>
                    <div class="div_deg">
                        <form action="{{url('add_product_detail')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="input_deg">
                                <label for="title">Title</label>
                                <input type="text" name="title">
                            </div>
                            <div class="input_deg">
                                <label for="description">Description</label>
                                <textarea name="description" id="description"></textarea>
                            </div>
                            <div class="input_deg">
                                <label for="price">Price</label>
                                <input type="number" name="price">
                            </div>
                            <div class="input_deg">
                                <label for="quantity">Quantity</label>
                                <input type="number" name="quantity">
                            </div>
                            <div class="input_deg">
                                <label for="category_id">Product Category</label>
                                <select name="category_id" id="productCategory" required>
                                    <option value="0" disabled>Select an option</option>

                                    @foreach ($category as $category)
                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach
                                    
                                </select>
                            </div>
                            <div class="input_deg mb-3">
                                <label for="product_image">Product Image</label>
                                <input class="form-control" type="file" name="image">
                            </div>
                            <div class="input_deg mb-3">
                               <button type="submit" class="btn btn-success">Add Product</button>
                            </div>
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
    <script src="{{ asset('admincss/js/select2.min.js')}}"></script>


    <script>
        $(document).ready(function(){
            $('#productCategory').select2();
        });     
    </script>
</body>

</html>
