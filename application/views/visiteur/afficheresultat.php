<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
</head>
<body>
<div>

<?php
foreach($lesoeuvres as $unoeuvre):
echo '
<div>

<div>'.$unoeuvre['couverture'].'</div>
<div class=col-xs-12 col-sm-8 col-md-9 col-lg-9>
<div class=bloccontainer>
'.$unoeuvre['titre'].'
</div>
</div>
 </tr>';
endforeach?>

</div>

</tbody>
</table>
</body>
</html>