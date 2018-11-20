<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{$title}</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
          crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Welcome to {$variable_name}</h1>
            <p>This is an example of how a basic html page can be turned into a template
                and populated by smarty.
            </p>
        </div>
    </div>

    {if $control == 'form'}
        {include 'form.tpl'}
    {else}
        {include 'results.tpl'}
    {/if}

</div>
</body>
</html>