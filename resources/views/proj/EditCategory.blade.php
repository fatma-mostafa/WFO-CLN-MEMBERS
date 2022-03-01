
@extends('layouts.app')
@section('content')
    <body id="body"> 
    

    <div class="container-lg text-align">
    
        <form action="{{route('Confirm',['a'=>$a ?? ''])}}" method="POST" class="form" role="form">
        @csrf
            <div class="form-group">
                <strong><i>Company Name : </i></strong>{{$Agent->companyName}}&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp
                <strong><i>Country : </i></strong>{{$Agent->Country_Name}}&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp
                <strong><i>Previous Rtae : </i></strong>{{$Agent->Category_ID}}
                
            </div>
            <div class="form-group">     
                @if($Count > 0)
                    <select class="dropdown form-control" name="Category" id="Category" required>
                        <option value="">Change Category</option>
                        @for($i = 0; $i < $Count; $i++)
                            <option class="dropdown-item" value="{{ $Categories[$i]->ID }}" >{{ $Categories[$i]->ID }}</option> 
                        @endfor                
                    </select>
                @endif
                <button type="submit" class="btn btn-danger btn-lg"> Done </button>
            </div>
        </form>
    </div>
        
  
   </body> 
</html> 
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endsection
@section('css')
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>  
            .dropdown,.dropdown-item { 
                text-align: center; 
                padding:5px 400px; 
                margin-top:20px;
            } 
            .btn{
                text-align: center;  
                border: 7px ;  
                margin-top:600px;
                margin-left:37%;        
            }
            #body{
                justify-content: center;  
                align-items: center;
                background-image:url('/img/AIM_Logo.png');
                background-repeat:no-repeat;
                background-position: fixed;
                
                -webkit-background-size: 100% 100%;
                -webkit-filter: cover;

            }
    </style>
@endsection