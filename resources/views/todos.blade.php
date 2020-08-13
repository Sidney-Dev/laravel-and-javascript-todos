<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/todos.css">
  <title>Todo List</title>
</head>
<body>

  <div class="container">

    <header class="text-center text-light my-4">
      <h1 class="mb-4">Todo List</h1>
      <form class="search">
        <input class="form-control m-auto" type="text" name="search" placeholder="search todos" />
      </form>
    </header>

    <ul class="list-group todos mx-auto text-light">

    </ul>

    <form class="add text-center my-4">
      <label class="text-light">Add a new todo...</label>
      <input class="form-control m-auto" type="text" name="add" />
    </form>

  </div>
  

  <script src="js/app.js"></script>
  <script src="assets/js/todos.js"></script>
</body>
</html>