<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="app.css">
        <title>Pricing table</title>
    </head>
        <body>
            <a href='/pricingAdmin/create'>ADD Entry</a>
            @if(count($pricings)>1)
                @foreach($pricings as $pricing)
                <table style="width:100%">
                  <tr>
                  <th>{{$pricing->Pcode}}</th>
                  <th>{{$pricing->Category}}</th>
                  <th>{{$pricing->Name}}</th>
                  <th>{{$pricing->Price}}</th>
                  <th>{{$pricing->Unit}}</th>
                  <th><a href='/pricingAdmin/{{$pricing->Pcode}}/edit'>Edit</a></th>
                  <th>{{ Form::open(['action'=>["PricingsAdminController@destroy",$pricing->Pcode],"method"=>"POST"]) }}
                        {{Form::hidden('_method','DELETE')}}
                        {{Form::submit('Delete')}}
                       {{Form::close()}}</th>
                  </tr>
                </table>
                @endforeach
           

            @else
                <h3>NO data found</h3>
            @endif

        </body>
</html>