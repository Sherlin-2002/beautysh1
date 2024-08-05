<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
        .div_deg
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }
        h1
        {
            color:white;

        }
        label
        {
            display: inline-block;
            width:250px;
            font-size:15px;
            color:white!important;
        }
    </style>
  </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <div class="div_deg">
                <form action="{{url('upload_product')}}" method="Post" enctype="multipart/form-data">
                    @csrf
                    <h1>Add Product</h1>
                    <div >
                        <label>Product Title</label>
                        <input type="text" name="title" required>
                    </div>
                    <div>
                        <label> Description</label>
                        <textarea type="text" name="description" required></textarea>
                    </div>
                    
                    <div>
                        <label>Price</label>
                        <input type="text" name="price" required >
                    </div>
                    <div>
                        <label>Quantity</label>
                        <input type="number" name="qty" required>
                    </div>
                    <div>
                        <label>Product category</label>
                        <select name="category" required>
                            <option>Select a Option</option>
                            @foreach($category as $category)
                            <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div>
                        <label>Product Image</label>
                        <input type="file" name="image" required>
                    </div>
                    <div>
                        
                        <input class="btn btn-success" type="submit" value="Add Product" >
                    </div>
                </form>
            </div>


    <!-- JavaScript files-->
    <script src="{{asset('/admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('/admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('/admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('/admincss/js/front.js')}}"></script>
  </body>
</html>