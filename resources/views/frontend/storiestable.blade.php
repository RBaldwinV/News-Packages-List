<!DOCTYPE html>
<html>

<head>
    <title>Stories Table</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html,
        body {
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
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        
        .title {
            font-size: 96px;
        }
        
        table {
            width: 80%;
        }
        
    </style>
</head>

<body>
    <div class="container">
        <div class="content">
            <div class="title">Stories Table</div>

            <!-- aqui va la forma que mete informacion a la base de datos -->

           
            <table>
                <tr>
                    <td>Title</td>
                    <td>Author</td>
                    <td>Ready</td>
                    <td>Video</td>
                    <td>Documents</td>
                </tr>

                @foreach($stories as $story)
                <tr style="border: 1px solid #aaa">
                    <td valign="top">{!! $story->title !!}</td>
                    <td valign="top">{!! $story->author !!}</td>
                    <td valign="top"><a href="/updateStory/{!! $story->id !!}">{!! $story->ready?'Yes':'No' !!}</a></td>
                    <td valign="top"><a href="{!! $story->video_url !!}">Download</a></td>
                    <td valign="top">
                        @foreach($story->documents as $document)
                        <a href="{!! $document->document_url !!}">{!! $document->title !!}</a><br>
                        @endforeach
                        <a href="/addDocument/{!! $story->id !!}">Add Document</a>
                    </td>
                </tr>

                @endforeach
                <tr>
                    <td> <a href="/addVideo">Add Video</a> </td>
                </tr>
            </table>
            




        </div>
    </div>
</body>

</html>