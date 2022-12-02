<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
   <div class="col-3 text-center d-flex justify-content-center w-100 mt-5">
   <div>
   <div class="mb-4 mt-3">
     <h1>Sign in</h1>
  </div>
   <form action="{{route('a-store')}}" method="POST" enctype="multipart/form-data">
    @csrf
  <!-- Email input -->
  <div class="form-outline shadow-none mb-3 text-start">
    <input type="text" name="name" id="form2Example1" class="form-control" />
    <label class="form-label" for="form2Example1 text-start">Name </label>
  </div>
  <div class="form-outline shadow-none mb-3 text-start">
    <input type="email" name="email" id="form2Example2" class="form-control" />
    <label class="form-label" for="form2Example2 text-start">Email address</label>
  </div>
  <!-- Password input -->
  <div class="form-outline shadow-none mb-3 text-start">
    <input type="password" name="password" id="form2Example4" class="form-control" />
    <label class="form-label" for="form2Example4">Password</label>
  </div>
  <div class="form-outline shadow-none mb-3 text-start">
    <input type="password" name="password" id="form2Example3" class="form-control" />
    <label class="form-label" for="form2Example3">Password</label>
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31"> Remember me </label>
      </div>
    </div>

    <div class="col">
      <!-- Simple link -->
      <a href="#!">Forgot password?</a>
    </div>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Not a member? <a href="#!">Register</a></p>
    <p>or sign up with:</p>
    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-facebook-f"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-google"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-twitter"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-github"></i>
    </button>
  </div>
</form>
   </div>
   </div>
</body>
</html>