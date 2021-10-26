$(document).ready(function () {
  //initialize method on load
  function init() {
    let cardArea = `
    <div class="container">
    <div id="card-area">
    <div class="row">

      <div id="add-user-form" class="col s4">
      </div>
      <div id="login-form" class="col s4">
      </div>
      <div id="edit-user-form" class="col s4">
      </div>

    </div></div></div>`;
    let directoryArea = `<section id="directory-area" class="container">

    <table id="directory" class="table striped" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Username</th>
          <th>Email</th>
          <th>Email Notices</th>
          <th>Password</th>
          <th>Roles</th>
          <th>Details</th>
          <th>Date Created</th>
        </tr>
      </thead>
      <tbody id="directory_body">
      </tbody>
    </table>
    
      <ul>
        <!-- <li><?php echo $user->getUser(); ?></li>
        <li><?php echo $user->getRoles(); ?></li>-->
      </ul>
      <section>`;
    $("body").append(cardArea);
    loginCard();
    addForm();
    editForm();
    $("body").append(directoryArea);

    // BUTTON EVENTS
    // LOGIN SUBMIT BUTTON
    $("#login-form").on("submit", function (e) {
      e.preventDefault();

      let username = e.target[0].value;
      let password = e.target[1].value;
      let formData = {username: username, password: password}
      userLogin(formData);
    });

    // ADD SUBMIT BUTTON
    $("#add-form").on("submit", function (e) {
      e.preventDefault();
      console.log(e);
    });

    // EDIT SUBMIT BUTTON
    $("#edit-form").on("submit", function (e) {
      e.preventDefault();
      console.log(e);
    });

    createTable();
  }

  init();
});
