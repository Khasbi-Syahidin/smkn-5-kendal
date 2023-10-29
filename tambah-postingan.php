<?php
include 'koneksi.php';

if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $content = $_POST['content'];
    $query = "INSERT INTO postingan (title, content) VALUES ('$title', '$content')";
    $result = mysqli_query($koneksi, $query);
    if ($result) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <div class="container mt-5">
    <form method="post"> <!-- Mengubah method="$_POST" menjadi "post" -->
        <div class="mb-3">
        <label for="title" class="form-label">Title Postingan</label>
        <input type="text" class="form-control" id="title" placeholder="Apel Pagi" name="title">
      </div>
      <div class="mb-3 mt">
        <label for="content" class="form-label">Content Postingan</label>
        <textarea class="form-control" id="content" rows="3" name="content"></textarea>
      </div>
      </form>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
