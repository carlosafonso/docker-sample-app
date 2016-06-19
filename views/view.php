<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Docker sample app</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"/>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>Sample app!</h1>
                    <p>Deployed as a Docker container!</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1>Here be some environment variables</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h3>ENV</h3>
                <p><?php dump($env) ?></p>
            </div>
            <div class="col-md-4">
                <h3>FOO</h3>
                <p><?php dump($foo) ?></p>
            </div>
            <div class="col-md-4">
                <h3>BAR</h3>
                <p><?php dump($foo) ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <dl>
                    <dt>Tag</dt>
                    <dd><?php echo $info->tag ?: 'Not available' ?></dd>
                    <dt>Commit</dt>
                    <dd><?php echo $info->commit ?: 'Not available' ?></dd>
                    <dt>Build</dt>
                    <dd><?php echo $info->build ?: 'Not available' ?></dd>
                </dl>
            </div>
        </div>
    </div>
</body>
</html>