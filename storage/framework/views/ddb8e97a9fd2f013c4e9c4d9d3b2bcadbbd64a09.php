<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>STEEL4WEB</title>

        <!-- Bootstrap CSS -->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

        <style type="text/css">
            body{
                padding: 50px 0;
            }
        </style>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <div class="container">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">Panel heading</div>
                    <nav class="navbar navbar-static-top" role="navigation">
                        <div class="navbar-form navbar-left">
                            <form action="#" method="POST" class="form-inline" role="form">
                            
                                <div class="form-group">
                                    <label class="sr-only" for="">Obra</label>
                                    <select name="obra" id="inputObra" class="form-control" required="required">
                                        <option value="">XXX</option>
                                        <option value="">YYY</option>
                                    </select>
                                </div>
                            
                                <div class="form-group">
                                    <label class="sr-only" for="">Etapa</label>
                                    <select name="etapa" id="inputEtapa" class="form-control" required="required">
                                        <option value="">XYZ</option>
                                        <option value="">ABC</option>
                                    </select>
                                </div>
                                                        
                                <button type="submit" class="btn btn-default">Carregar</button>

                            </form>
                        </div>                        
                    </nav>                    
                    
                    <div class="table-responsive">
                        <!-- Table -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Heading 1</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Content 1</td>
                                </tr>
                                <tr>
                                    <td>Content 2</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>    
            </div>
        </div>

        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </body>
</html>