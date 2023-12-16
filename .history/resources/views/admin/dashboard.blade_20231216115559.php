<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
      body {
          padding: 20px;
      }

      h1 {
          margin-bottom: 20px;
      }

      .btn-container {
          display: flex;
          flex-direction: column;
          gap: 10px;
      }

      .btn-container a {
          text-decoration: none;
      }

      .btn {
          width: 200px;
      }
  </style>
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container text-center">
        <h1>Welcome Admin</h1>
        <div class="btn-container">
           
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Create Task</button>
            <a href="{{route('admin.view.users')}}">
                <button type="button" class="btn btn-primary">View users</button>
            </a>
            <a href="{{route('admin.view.workprogress')}}">
                <button type="button" class="btn btn-primary">View Work Progress</button>
            </a>
            <a href="{{route('admin.task.assign')}}">
                <button type="button" class="btn btn-primary">Assign Task</button>
            </a>
        </div>
    </div>
    <form action="{{route('admin.task.submit')}}" method="POST">
        @csrf
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      
        @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Task Heading</label>
            <input style="width: 50%" type="text" name="heading" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Task Heading" required>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </form>
    @yield('admin-content')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>