<<html>
    <head>
        <title>Customer Create</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"></head> 
 <body>
        @if($errors->any())
        <div class = "alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                  <li>
                      {{$error}}
                 </li>
                @endforeach
            </ul>
        </div>
        @endif
    <div class="container mt-5">
        <form action="{{url('customer-save')}}" method="POST">
            <h2>Customer Registration Form</h2>
            @csrf
        <div class="form-group">
            <label>Name : </label>
            <input type="text" name="Name" class="form-control" />
            <label>Address : </label>
            <input type="text" name="Address" class="form-control"/>
            <label>Mobile : </label>
            <input type="text" name="Mobile" class="form-control" />
            <label>Email : </label>
            <input type="text" name="Email" class="form-control" />
            <input type="checkbox" name="Gender[]" class=" " value="Male">Male
            <input type="checkbox" name="Gender[]" class=" " value="Female">Female

        </div>
        <button type="text" class="btn btn-primary form-control">Submit</button>
      </form> 
    </div>
 </body>
</html>
