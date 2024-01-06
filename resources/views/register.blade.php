@include('includes.header')
<form method="POST" action="/register">
@csrf <!-- {{ csrf_field() }} -->
  <div class="form-group">
    <label for="exampleInputEmail1">* Email address</label>
    <input type="email" required name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
    @if($errors->has('email'))
        <div class="alert alert-danger">{{ $errors->first('email') }}</div>
    @endif
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">* Name</label>
    <input name="name" type="text" required class="form-control" id="exampleInputEmail1" placeholder="name">
    @if($errors->has('name'))
        <div class="alert alert-danger">{{ $errors->first('name') }}</div>
    @endif
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">* Telephone</label>
    <input type="text" name="telephone" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    @if($errors->has('telephone'))
        <div class="alert alert-danger">{{ $errors->first('telephone') }}</div>
    @endif
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">* Address 1</label>
    <textarea required name="address_1" class="form-control"></textarea>
    @if($errors->has('address_1'))
        <div class="alert alert-danger">{{ $errors->first('address_1') }}</div>
    @endif
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">* Address 2</label>
    <textarea required name="address_2" class="form-control"></textarea>
    @if($errors->has('address_2'))
        <div class="alert alert-danger">{{ $errors->first('address_2') }}</div>
    @endif
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">* City</label>
    <input type="text" name="city" required class="form-control"/>
    @if($errors->has('city'))
        <div class="alert alert-danger">{{ $errors->first('city') }}</div>
    @endif
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">* State/Province</label>
    <input type="text" name="state_province" required class="form-control"/>
    @if($errors->has('state_province'))
        <div class="alert alert-danger">{{ $errors->first('state_province') }}</div>
    @endif
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">* Zip/Postal Code</label>
    <input type="text" name="zip_postal_code" required class="form-control"/>
    @if($errors->has('zip_postal_code'))
        <div class="alert alert-danger">{{ $errors->first('zip_postal_code') }}</div>
    @endif
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">* Username</label>
    <input type="text" name="username" required class="form-control"/>
    @if($errors->has('username'))
        <div class="alert alert-danger">{{ $errors->first('username') }}</div>
    @endif
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">* Password</label>
    <input type="password" name="password" required class="form-control"/>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">* Confirm Password</label>
    <input type="password" name="password_confirmation" required class="form-control"/>
  </div>
  @if($errors->has('password'))
        <div class="alert alert-danger">{{ $errors->first('password') }}</div>
    @endif
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@include('includes.footer')