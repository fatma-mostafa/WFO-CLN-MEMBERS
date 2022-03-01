
@extends('layouts.app')
@section('content')
    <body id="body"> 

        <div class="container-lg">
            <p><strong><span style="font-size:300%; color:red">Company Name : </span></strong></p><span style="font-size:250%;">{{$Agent->companyName}}&nbsp;In&nbsp;{{$Agent->Country_Name}}</span>
            <hr><p><strong><span style="font-size:300%; color:red">Contact Info : </span></strong></p>
            @if(!empty($Agent->website))
                <div class="row">
                    <i class="fa" aria-hidden="true"> 
                        <strong id="St"><span style="font-size:100%; color:blue">&#xf0ac; WebSite :</span></strong>
                        <strong id="st2" style="font-size:150%;"><a href="{{$Agent->website}}" >{{$Agent->website}}</a></strong>  
                    </i> 
                </div> 
            @endif
            @if($Count > 0)
                @for($i=0 ; $i < $Count ; $i++)
                    <div class=" row">
                        <strong id="St"><u>{{$branches[$i]->Branch_Name}}</u></strong>
                    </div>
                    <div class=" row">
                        @if($branches[$i]->Address != "Contact Person")
                            <i class="fa" aria-hidden="true"> 
                                <strong id="St"><span style="font-size:100%; color:blue">&#xf2ba; Address :</span></strong>
                                <strong id="st2" style="font-size:150%;">{{$branches[$i]->Address}}</strong>  
                            </i> 
                        @endif
                    </div>
                    @if(count($branch_Tel[$i]) > 0)
                        <p>
                            <div class=" row">
                                <i class="fa" aria-hidden="true"> 
                                    <strong id="St"><span style="font-size:100%; color:blue">&#xf095; Tel :</span></strong> 
                                        @for($j=0 ; $j < count($branch_Tel[$i]) ; $j++)
                                            <strong id="St">
                                                {{$branch_Tel[$i][$j]->Telephone_Number}}
                                                @if($j < count($branch_Tel[$i])-1)
                                                    &nbsp; - &nbsp;
                                                @endif 
                                            </strong>
                                        @endfor
                                </i>  
                            </div> 
                        </p>  
                    @endif  
                    @if(count($branch_Fax[$i]) > 0)
                        <p>
                            <div class=" row">     
                                <i class="fa" aria-hidden="true"> 
                                    <strong id="St"><span style="font-size:100%; color:blue">&#xf1ac; Fax :</span></strong>
                                        @for($j=0 ; $j < count($branch_Fax[$i]) ; $j++)
                                            <strong id="St">
                                                {{$branch_Fax[$i][$j]->Fax}}
                                                @if($j < count($branch_Fax[$i])-1)
                                                &nbsp; - &nbsp;
                                                @endif
                                            </strong>
                                        @endfor
                                </i>
                            </div>
                        </p>
                    @endif
                    @if(count($branch_Email[$i]) >0)
                        <p>
                            <div class=" row">     
                                <i id="St" class="fa" aria-hidden="true"> <strong id="St"><span style="font-size:100%; color:blue">&#xf0e0;&nbsp; Email : </span></strong><br>
                                        @for($j=0 ; $j < count($branch_Email[$i]);$j++)
                                            <strong id="St">
                                                <ul>
                                                    <li>{{$branch_Email[$i][$j]->Email}}</li>
                                                </ul>
                                            </strong>
                                        @endfor
                                </i>
                            </div>
                        </p>
                    @endif
                    @if($Count >1 && $i < $Count-1)
                        <hr> 
                    @endif
                @endfor
            @endif
            <!-- <a class="btn-lg btn-danger" href="{{route('AgentsInSpec_Country')}}" class="previous round">Back</a>
    -->    
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
        .p{
            align:center;
        }
        .btn-lg{
            margin-left:45%;
            margin-top:400px;
        }
        #body{
            overflow-x: hidden;
        }
    </style>
@endsection