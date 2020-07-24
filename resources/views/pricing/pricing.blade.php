<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="app.css">
        <title>Pricing table</title>
    </head>
        <body>
            @if(count($pricings)>1)
                @foreach($pricings as $pricing)
                <table style="width:100%">
                  <tr>
                  <th>{{$pricing->Pcode}}</th>
                  <th>{{$pricing->Category}}</th>
                  <th>{{$pricing->Name}}</th>
                  <th>{{$pricing->Price}}</th>
                  <th>{{$pricing->Unit}}</th>
                  </tr>
                </table>
                @endforeach
           

            @else
                <h3>NO data found</h3>
            @endif

        </body>
</html>