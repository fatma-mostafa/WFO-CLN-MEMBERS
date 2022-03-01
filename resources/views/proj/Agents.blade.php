@extends('layouts.app')
@section('content')
    <body id="body"> 
        <div class="container-lg">
            <table class="table table-striped" border="3px">
                <thead>
                    <tr>
                    <td colspan="6">ALL Agents in <span style="color:red"><u>{{$cName}}</u></span> Country</td>
                    </tr>
                </thead>
                @if($Count > 0)
                    <thead>
                        <tr>
                            <th >ID</th>
                            <th >companyName</th>
                            <th>Category</th>
                            <th >WFO</th>
                            <th >CLN</th>
                            <th >Contact Info.</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i = 0; $i < $Count; $i++)
                            <tr> 
                                <td >{{ $Agents[$i]->ID }}</td>
                                <td ><big>{{ $Agents[$i]->companyName }}</big></td>
                                <td ><a href="{{route('Edit_Category',['a'=>$Agents[$i]->ID])}}"><u>{{ $Category[$i]->ID }}</u></a></td>
                                @if($Org[$i])
                                    <td >✔</td>
                                @else
                                    <td >✘</td>
                                @endif
                                @if($Net[$i])
                                    <td >✔</td>
                                @else
                                    <td >✘</td>
                                @endif
                                <td>
                                    <big><a class="fa fa-phone" href="{{route('Contact_US',['a'=>$Agents[$i]->ID])}}" ></a></big>
                                </td>
                            </tr>
                            
                        @endfor 
                    </tbody>
                @endif
            </table>
        
            <a class="btn-lg btn-danger" href="{{route('Choose_Country')}}" class="previous round">Back</a>
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
            .table{
                text-align:center;

            }
            a {
                text-decoration: none;
                display: inline-block;
                padding: 8px 16px;
                text-align:center;
                font-size:24px;
                
            }
            .btn-lg{
                margin-left:45%;
                
            }
            a:hover {
                background-color: #ddd;
                color: black;
            }

            .previous {
                background-color: #f1f1f1;
                color: black;
            }

            .next {
                background-color: #4CAF50;
                color: white;
             }

            .round {
                border-radius: 70%;
            }
    </style>
@endsection