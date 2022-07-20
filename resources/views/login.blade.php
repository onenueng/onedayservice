@extends('app')

@section('title', 'login')

@section('content')
<body>
<form>
    <div class= "container">
        <div class = "d-flex justify-content-center h-100">
            <div class="col-4" >
                <div class="card">
                    <div class="card-header">
                        <h3>Login</h3>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" class="form-control" name="name" id="name"  placeholder="Username">
                        <br>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        <br>
                    </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                </div>
            </div>
        </div>
    </div>    
</form>       
</body>
@endsection


