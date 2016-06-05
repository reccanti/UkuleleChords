<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

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
                font-weight: 100;
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
            
            .chord_list {
                padding: 0;
                margin: 0;
            }
            
            .chord_list li {
                display: inline;
                list-style: none;
                margin: 0 10px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="links">
                    <h1>Ukulele Chords</h1>
                    <div>
                        <h3>Major Chords</h3>
                        <ul class="chord_list">
                            <li><a href="./A">A</a></li>
                            <li><a href="./B">B</a></li>
                            <li><a href="./C">C</a></li>
                            <li><a href="./D">D</a></li>
                            <li><a href="./E">E</a></li>
                            <li><a href="./F">F</a></li>
                            <li><a href="./G">G</a></li>
                        </ul>
                    </div>
                </div>
                <svg 
                    id="chord" 
                    width="500" 
                    height="500"
                    data-chord="{{ $chord }}">
                </svg>
            </div>
        </div>
        <script type="text/javascript" src="{!! asset('js/bundle.js') !!}"></script>
    </body>
</html>