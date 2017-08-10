
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Task4</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-9 col-sm-offset-3 col-md-6 col-md-offset-3 main">
            <h1 class="page-header">Query</h1>
            <div class="panel panel-success">
                <div class=panel-heading>
                    <h3 class=panel-title>DISTINCT</h3>
                </div>
                <div class=panel-body>
                    <?=$distinct;?>
                </div>
            </div>
            <div class="panel panel-success">
                <div class=panel-heading>
                    <h3 class=panel-title>INNER JOIN</h3>
                </div>
                <div class=panel-body>
                    <?=$innerJoin;?>
                </div>
            </div>
            <div class="panel panel-success">
                <div class=panel-heading>
                    <h3 class=panel-title>LEFT JOIN</h3>
                </div>
                <div class=panel-body>
                    <?=$leftJoin;?>
                </div>
            </div>
            <div class="panel panel-success">
                <div class=panel-heading>
                    <h3 class=panel-title>RIGHT JOIN</h3>
                </div>
                <div class=panel-body>
                    <?=$rightJoin;?>
                </div>
            </div>
            <div class="panel panel-success">
                <div class=panel-heading>
                    <h3 class=panel-title>CROSS JOIN</h3>
                </div>
                <div class=panel-body>
                    <?=$crossJoin;?>
                </div>
            </div>
            <div class="panel panel-success">
                <div class=panel-heading>
                    <h3 class=panel-title>NATURAL JOIN</h3>
                </div>
                <div class=panel-body>
                    <?=$naturalJoin;?>
                </div>
            </div>
            <div class="panel panel-success">
                <div class=panel-heading>
                    <h3 class=panel-title>GROUP</h3>
                </div>
                <div class=panel-body>
                    <?=$group;?>
                </div>
            </div>
            <div class="panel panel-success">
                <div class=panel-heading>
                    <h3 class=panel-title>HAVING</h3>
                </div>
                <div class=panel-body>
                    <?=$having;?>
                </div>
            </div>
            <div class="panel panel-success">
                <div class=panel-heading>
                    <h3 class=panel-title>ORDER</h3>
                </div>
                <div class=panel-body>
                    <?=$order;?>
                </div>
            </div>
            <div class="panel panel-success">
                <div class=panel-heading>
                    <h3 class=panel-title>ORDER</h3>
                </div>
                <div class=panel-body>
                    <?=$limit;?>
                </div>
            </div>
        </div>
    </div>

</div>


<!-- Bootstrap core JavaScript
================================================== -->

</body>
</html>
