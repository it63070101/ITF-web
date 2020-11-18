<!DOCTYPE html>
<html>
<head>
  <title>Comment Form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <style type="text/css">
    body {
      background-color: rgba(0, 0, 0, 0.125);
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="col-12 col-lg-8 offset-lg-2">
      <div class="card my-4 shadow-sm rounded-lg py-4 px-3">
        <div class="card-body">
          <h1 class="mb-4">Form</h1>
          <form action = "insert.php" method = "post" id="CommentForm" >
            <div class="form-group">
              <label>Name:</label>
              <input type="text" name = "name" id="idName" placeholder="Enter Name" class="form-control">
            </div>
            <div class="form-group">
              <label>Comment:</label>
              <textarea class="form-control" rows="10" cols="20" name = "comment" id="idComment" placeholder="Enter Comment"></textarea>
            </div>
            <div class="form-group">
              <label>Link:</label>
              <input type="text" class="form-control" name = "link" id="idLink" placeholder="Enter Link">
            </div>
            <input type="submit" id="commentBtn" class="btn btn-primary">
          </form> 
        </div>
      </div>
    </div>
  </div>
</body>
</html>
