<!DOCTYPE html>
<html lang="en">
<head>
    <title>To do list</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Tasks</h2>
    <a href="{{route('logout')}}">Logout</a>
    <a href="{{route('createTask')}}">Create task</a>
    <p>List of task</p>
    <table class="table">
        <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Due date</th>
            <th>Priority level</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

      @foreach($items as $item)
          <tr>
              <td>{{$item->title}}</td>
              <td>{{$item->description}}</td>
              <td>{{$item->due_date}}</td>
              <td>{{$item->priority_level}}</td>
              <td><a href="{{route('editTask',$item->id)}}">Edit</a></td>
              <td><a href="{{route('deleteTask',$item->id)}}">Delete</a></td>
          </tr>
      @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
