@extends('front.layouts.app')

@section('main')


<section class="section-5">
    <div class="container my-5">
        <div class="py-lg-2">&nbsp;</div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-5">
                <div class="card shadow border-0 p-5">
                    <h1 class="h3">Register</h1>
                    <form action="{{ route('registerSave') }}" method="POST">
                       @csrf
                        <div class="mb-3">
                            <label for="" class="mb-2">Name*</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name">
                        </div> 
                        <div class="mb-3">
                            <label for="" class="mb-2">Email*</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Enter Email">
                        </div> 
                        <div class="mb-3">
                            <label for="" class="mb-2">Password*</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
                        </div> 
                        <div class="mb-3">
                            <label for="" class="mb-2">Confirm Password*</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Enter Password">
                        </div> 
                        <button type="submit" class="btn btn-primary mt-2">Register</button>
                    </form>                    
                </div>

            @if ($errors->any())
            <div class="card-footer text-body-secoundry">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                            
                        @endforeach
                    </ul>
                </div>
            </div>   
            @endif  
              
                <div class="mt-4 text-center">
                    <p>Have an account? <a  href='login'>Login</a></p>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection