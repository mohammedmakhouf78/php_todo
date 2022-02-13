<?php
include "./functions.php";
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $data = selectById($conn,$id);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Todo</title>
  </head>
  <body>

  <div class="container">
        <form class="row" method="POST" action="./update.php">
            <input type="hidden" name="id" value="<?= $data['id'] ?>">
            <div class="col-8">
                <div class="mb-3">
                    <input name="todo" type="text" class="form-control" value="<?= $data['todo'] ?>">
                </div>
            </div>
            <div class="col-4">
                <button type="submit" class="btn btn-primary">
                    Submit
                </button>
            </div>
        </form>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>