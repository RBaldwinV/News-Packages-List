<!DOCTYPE html>
<html>
    <head>
        <title>NEWS PACKAGES LIST</title>

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
                <div class="title">NEWS PACKAGES LIST</div>
               
                      <!-- aqui va la forma que mete informacion a la base de datos -->
               
             <div class="col-md-6">
                {!! Form::open(array('url'=>'/packages')) !!}
               <br />{!! Form::label('correspondent_name') !!}
               <br />{!! Form::text('correspondent_name') !!}     
               <br />{!! Form::label('package_title') !!}
               <br />{!! Form::text('package_title') !!}
               <br />{!! Form::label('ready_for_broadcast') !!}
               <br />{!! Form::text('ready_for_broadcast') !!}     
               <br />{!! Form::label('video_files_id') !!}
               <br />{!! Form::text('video_files_id') !!}
               <br />{!! Form::label('audio_files_id') !!}
               <br />{!! Form::text('audio_files_id') !!}
               <br />{!! Form::label('image_files_id') !!}
               <br />{!! Form::text('image_files_id') !!}
               <br />{!! Form::label('admin_files_id') !!}
               <br />{!! Form::text('admin_files_id') !!}
               <br />{!! Form::submit('submit') !!}
                
                {!! Form::close() !!}
            </div>    
                
                <!-- Aqui sacamos todos los packages que estan el la base de datos -->
             
                <div class="col-md-6">
                @foreach($packages as $package)
               
                    <p>{!! $package->correspondent_name !!}
                {!! $package->package_title !!}
                {!! $package->ready_for_broadcast !!}
                {!! $package->video_files_id !!}
                {!! $package->audio_files_id !!}
                {!! $package->image_files_id !!}
                   {!! $package->admin_files_id !!}</p>
                    
                @endforeach
                </div>
                
          
                
                
            </div>
        </div>
    </body>
</html>
