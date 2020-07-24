<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="app.css">
        <title>Pricing table(Admin)</title>
    </head>
        <body>

           <h1>Edit entry</h1>
           {{ Form::open(['action'=>"PricingsAdminController@store","method"=>"POST"]) }}
                {{Form::label("name","Name")}}
                {{Form::text("name","",["placeholder"=>"Product name"])}}
                {{Form::label("category","Category")}}
                {{Form::text("category","",["placeholder"=>"Category"])}}
                {{Form::label("price","Price")}}
                {{Form::number("price","",["placeholder"=>"Price"])}}
                {{Form::label("unit","Unit")}}
                {{Form::text("unit","",["placeholder"=>"Unit"])}}
                {{Form::submit("Submit")}}
            {{ Form::close()}}
        </body>
</html>
