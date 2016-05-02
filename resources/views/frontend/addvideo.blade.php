<!DOCTYPE html>
<html>
    <head>
        <title>Add Video</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">        
        
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 120;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Add Video</div>
               
                      <!-- aqui va la forma que mete informacion a la base de datos -->
               
            {!! Form::open(array('url'=>'addVideo','method'=>'POST', 'files'=>true) !!}
            {!! Form::label('Title') !!}
            {!! Form::input('title') !!}

            {!! Form::label('Author') !!}
            {!! Form::input('author') !!}

            {!! Form::label('Video') !!}
            {!! Form::file('video') !!}

            {!! Form::submit('Submit') !!}
            {!! Form::close() !!}

                
          
                
                
            </div>
        </div>
    </body>
</html>
