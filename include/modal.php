

  <!--Login modal-->

  <!-- Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Login</h5>
          <button type="button" class="btnClose" data-bs-dismiss="modal">
            <h4>X</h4>
          </button>
        </div>
        <div class="modal-body">
          <div class="input-group flex-nowrap mb-2">
            <span class="input-group-text" id="addon-wrapping"><i class="fa fa-user"></i></span>
            <input type="email" class="form-control" placeholder="Email or Username" aria-describedby="addon-wrapping">
          </div>

          <div class="input-group flex-nowrap mb-2">
            <span class="input-group-text" id="addon-wrapping"><i class="fa fa-key"></i></span>
            <input type="password" class="form-control" placeholder="Password" aria-describedby="addon-wrapping">
          </div>

          <div class="form-group mt-3">
            <input type="submit" value="Login" class=" form-control btn btn-primary">

          </div>

          <p class="pTag">already registered on JosebekTech?</p>

          <div class="form-group">
            <input type="submit" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#registerModal"
              value="Register" class=" form-control btn btn-secondary">
          </div>

        </div>

      </div>
    </div>
  </div>

  <!--Registration modal-->

  <!-- Modal -->
  <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
          <button type="button" class="btnClose" data-bs-dismiss="modal">
            <h4>X</h4>
          </button>
        </div>
        <div class="modal-body">
          <div class="input-group flex-nowrap mb-2">
            <span class="input-group-text" id="addon-wrapping"><i class="fa fa-envelope"></i></span>
            <input type="email" class="form-control" placeholder="Email or Username" aria-describedby="addon-wrapping">
          </div>

          <div class="input-group flex-nowrap mb-2">
            <span class="input-group-text" id="addon-wrapping"><i class="fa fa-user"></i></span>
            <input type="text" class="form-control" placeholder="Name" aria-describedby="addon-wrapping">
          </div>


          <div class="input-group flex-nowrap mb-2">
            <span class="input-group-text" id="addon-wrapping"><i class="fa fa-key"></i></span>
            <input type="password" class="form-control" placeholder="Password" aria-describedby="addon-wrapping">
          </div>

          <div class="input-group flex-nowrap mb-2">
            <span class="input-group-text" id="addon-wrapping"><i class="fa fa-key"></i></span>
            <input type="password" class="form-control" placeholder="Confirm Password"
              aria-describedby="addon-wrapping">
          </div>

          <div class="form-group mt-3">
            <input type="submit" value="Register" class=" form-control btn btn-primary">
          </div>

          <p class="pTag mb-3"> By registering, you agree to the privacy policy and terms of service.</p>

          <p class="pTag">already registered on JosebekTech?</p>

          <div class="form-group">
            <input type="submit" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#loginModal"
              value="Login" class=" form-control btn btn-secondary">
          </div>

        </div>

      </div>
    </div>
  </div>
