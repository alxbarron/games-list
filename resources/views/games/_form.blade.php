<form class="" action="{{ action('GameController@store') }}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="game-type">Type</label>
    <select class="form-control" name="type" id="game-type">
      <option value="" selected>Select option...</option>
      <option value="Single player">Single player</option>
      <option value="Multiplayer">Multiplayer</option>
    </select>
  </div>

  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" id="name">
  </div>

  <div class="form-group">
    <label for="gender">Gender</label>
    <select class="form-control" name="gender" id="gender">
      <option value="" selected>Select option...</option>
      <option value="Shooter">Shooter</option>
      <option value="Platform">Platform</option>
      <option value="Rol">Rol</option>
      <option value="Simulator">Simulator</option>
      <option value="Sports">Sports</option>
    </select>
  </div>

  <div class="form-group">
    <label for="year">Launch Year</label>
    <select class="form-control" name="year" id="year">
      <option value="" selected>Select option...</option>
      <option value="2012">2012</option>
      <option value="2013">2013</option>
      <option value="2013">2014</option>
      <option value="2013">2015</option>
      <option value="2013">2016</option>
      <option value="2013">2017</option>
      <option value="2013">2018</option>
    </select>
  </div>

  <div class="form-group">
    <label for="developer">Developer</label>
    <input type="text" class="form-control" name="developer" id="developer">
  </div>

  <div class="form-group">
    <label for="price">Price</label>
    <input type="text" class="form-control" name="price" id="price">
  </div>

  <div class="form-group">
    <label for="qty">Quantity</label>
    <input type="text" class="form-control" name="qty" id="qty">
  </div>

  <div class="form-group">
    <label for="cover">Portada</label>
    <input type="file" class="form-control" name="cover" id="cover">
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-primary">Save</button>
  </div>

</form>
