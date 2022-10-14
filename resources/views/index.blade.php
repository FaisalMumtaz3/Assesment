<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
    <link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet" />
    <title>Assesment</title>
</head>
<body>
    @if($errors->any())
        <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        </div><br/>
@endif
    <div class="container">
        <form method="POST" action="{{ url('/saveClientRecord') }}"
        enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" class="form-control" placeholder="Enter Name">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control"  placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label for="designation">Designation</label>
                <input type="text" name="designation" class="form-control" placeholder="Enter Designation">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
    <br><br>
    <div class="container">
        <table class="table table-striped" border="1">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Designation</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($record as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->designation}}</td>
                  </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</body>
</html>
