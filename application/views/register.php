
  <section id="register" >
    <div class="container" class="Form my-4 mx-5">
      <div class="row gx-0">
      <div class="col-lg-6">
          <div class="col-lg-10 float-end">
            <img src="<?php echo base_url(); ?>/assets/courts2.jpg" class="img-fluid shadow" alt="loginImg">
          </div>
        </div>
        <div class="col-lg-6 px-5">
          <h1 class="font-weight-bold">Welcome!</h1>
          <h4>Create your new account</h4>
          <form>
            <div class="form-row">
              <div class="col-lg-7">
                <input placeholder="Name" class="form-control my-3 px-4">
              </div>
            </div>

            <div class="form-row">
              <div class="col-lg-7">
                <input type="email" placeholder="Email" class="form-control my-3 px-4">
              </div>
            </div>

            <div class="form-row">
              <div class="col-lg-7">
                <input type="password" placeholder="8-digit password" class="form-control my-3 px-4">
              </div>
            </div>

            <div class="form-row">
              <div class="col-lg-7">
                <input type="password" placeholder="confirm password" class="form-control my-3 px-4">
              </div>
            </div>

            <div class="form-row">
              <div class="col-lg-7">
                <select class="form-select my-3 px-4" name="idenity" id="identity" aria-label="Default select example">
                  <option selected>Select Identity</option>
                  <option value="1">Public</option>
                  <option value="2">USM Student</option>
                  <option value="3">USM Staff</option>
                </select>
              </div>
            </div>

            <div class="form-row">
              <div class="col-lg-7">
                <button type="button" class="btn1 mb-3 shadow">Create Account</button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </section>