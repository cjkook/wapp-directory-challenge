function loginCard() {
  let form = `
  <div class="col s12">
    <div class="card blue-grey darken-1">
      <div class="card-content white-text">
        <span class="card-title">User Login</span>
        <div class="row">
    
          <div class="col s12">
            <form id="login-form" method="post">
              <span class="row">
                <div class="input-field col s12">
                  <input type="text" name="username">
                  <label for="user">Username</label>
                </div>
              </span>
              <span class="row">
                <div class="input-field col s12">
                  <input type="password" class="validate">
                  <label for="password">Password</label>
                </div>
              </span>
              <div class="col s3 offset-s9">
                <button class="waves-effect waves-light btn" type="submit" name="action">Login</button>
              </div>
            </form>
          </div>
        </div>`;
  $("#login-form").html(form);
  // $("#login-form").hide();
}

function addForm() {
  let form = `
<div class="row">
<div class="card green darken-3">
      <div class="card-content white-text">
        <span class="card-title">User Creation</span>
        <div class="row">
  <form id="add-form" class="col s12">
    <div class="row">
      <div class="input-field col s6">
        <input placeholder="" type="text" class="validate">
        <label for="first_name">First Name</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input type="password" class="validate">
        <label for="addPassword">Password</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input type="email" class="validate">
        <label for="email">Email</label>
      </div>
    </div>
    <div class="col s3 offset-s9">
      <button class="waves-effect waves-light btn" type="submit" name="action">Login</button>
    </div>
  </form>
  </div>
</div>`;

  $("#add-user-form").html(form);
  // $("#add-user-form").hide();
}

function editForm() {
  let form = `
<div class="row">
<div class="card blue-grey darken-3">
      <div class="card-content white-text">
        <span class="card-title">User Modify</span>
        <div class="row">
  <form id="edit-form" class="col s12">
    <div class="row">
      <div class="input-field col s6">
        <input placeholder="" id="editFirstName" type="text" class="validate">
        <label for="editFirstName">First Name</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input id="editPassword" type="password" class="validate">
        <label for="editPassword">Password</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input id="editEmail" type="email" class="validate">
        <label for="editEmail">Email</label>
      </div>
    </div>
    <div class="col s3 offset-s9">
      <button class="waves-effect waves-light btn" type="submit" name="action">Login</button>
    </div>
    
  </form>
  </div>
</div>`;

  $("#edit-user-form").html(form);
  // $("#edit-user-form").hide();
}
