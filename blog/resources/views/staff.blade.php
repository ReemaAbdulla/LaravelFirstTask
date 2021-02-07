<!DOCTYPE html>
<html>
<head>
  <title></title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">Active</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#">Disabled</a>
    </li>
  </ul>
</nav>
<div class="container p-3 my-3 bg-primary text-white">
  <h1>My First Bootstrap Page</h1>
  <p>This container has a blue background color and a white text, and some extra padding and margins.</p>
</div>





  <table class="table table-dark table-striped" style="width:50%">
 
  <thead>
    <tr>
      <th >Name</th>
      <th >Image</th>
      <th >Age</th>
      <th >Github</th>
    </tr>


    @foreach($employees1 as $key=>$value)
      <tr>
        
        <td>{{$value['name']}} </td>
        <td><img src="{{$value['image']}}"  alt=""> </td>
        <td>{{$value['age']}} </td>
        <td><a href="{{$value['github']}}">{{$value['github']}}</a> </td>



      </tr>
      @endforeach
  
    
   
  </tbody>
</table>

</body>
</html>