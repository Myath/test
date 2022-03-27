<form method="post" action="{{ route("creat") }}">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="name">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="email">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>