<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
    <script src="{{ asset('admincss/vendor/jquery/jquery.min.js') }} "></script>
    <link href="{{ asset('admincss/css/select2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.1/css/dataTables.dataTables.css">
    <script src="{{ asset('admincss/js/select2.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

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
                    <h1>List of Products</h1>
                    <div class="div_deg">
                        <table class="cell-border">
                           <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Price (RM)</th>
                                    <th>Quantity</th>
                                    <th>Product Category</th>
                                </tr>
                           </thead>
                           <tbody>
                                @forelse ($productList as $pl)
                                    <tr>
                                        <td>{{$pl->title}}</td>
                                        <td>{{$pl->description}}</td>
                                        <td>{{$pl->price}}</td>
                                        <td>{{$pl->quantity}}</td>
                                    </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center">No products found.</td>
                                </tr>
                                    
                                @endforelse 
                                    
                               
                           </tbody>
                        </table>
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
    <script src="https://cdn.datatables.net/2.2.1/js/dataTables.js"></script>


    <script>
        $(document).ready(function(){
            $('#productCategory').select2();
        });     
    </script>
</body>

</html>