<?php
include "./functions.php";

$data = selectAllFromTodo($conn);
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
        <form class="row" method="POST" action="./insert.php">
            <div class="col-8">
                <div class="mb-3">
                    <input name="todo" type="text" class="form-control">
                </div>
            </div>
            <div class="col-4">
                <button type="submit" class="btn btn-primary">
                    Submit
                </button>
            </div>
        </form>
        <div class="row">
            <ul class="list-group">
                <?php foreach($data as $item): ?>
                    <li class="list-group-item">
                        <?= $item['todo'] ?>

                        <a href="./delete.php?id=<?= $item['id']?>" class="btn btn-danger" style="float: right;">
                            Delete
                        </a>
                        <a href="./updatePage.php?id=<?= $item['id']?>" class="btn btn-success" style="float: right;">
                            Update
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>