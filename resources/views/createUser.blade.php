<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Form Validation Example - NiceSnippets.com</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-8 offset-2 mt-5">
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="text-white">Registration Form</h3>
                    </div>
                    <div class="card-body">
                        
                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                                Session::forget('success');
                            @endphp
                        </div>
                        @endif
                   
                        <form method="POST" action="{{ url('user/store') }}">
                  
                            {{ csrf_field() }}
                  
                            <div class="form-group">
                                <label>Name:</label>
                                <input type="text" name="name" class="form-control" placeholder="Name">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Father's Name:</label>
                                <input type="text" name="fname" class="form-control" placeholder="Name">
                                @if ($errors->has('fname'))
                                    <span class="text-danger">{{ $errors->first('fname') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Mother's Name:</label>
                                <input type="text" name="mname" class="form-control" placeholder="Name">
                                @if ($errors->has('mname'))
                                    <span class="text-danger">{{ $errors->first('mname') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <strong>Email:</strong>
                                <input type="text" name="email" class="form-control" placeholder="Email">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                   
                            <div class="form-group">
                                <label>Password:</label>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                    
                           
                   
                            <div class="form-group text-center">
                                <button class="btn btn-success btn-submit">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>