$(document).ready(function () {
  // LOGIN SUBMIT BUTTON
  $("#submit").click(function () {
    alert("Handler for .click() called.");
  });

  // ADD USER
  $("#add-user").click(() => {
    alert("User added.");
  });

  // EDIT USER
  $("#edit-user").click(() => {
    // GET ENTRY BY ID
    // UPDATE DB
    // REFRESH TABLE
  });

  /* Handling get users */
  function createTable() {
    $.ajax({
      type: "GET",
      // url: "response.php?action=list",
      url: "models/User.php?action=list",
      success: function (response) {
        response = JSON.parse(response);
        console.log(response);
        var tr;
        $("#directory_body").html("");
        $.each(response, function (index, emp) {
          tr = $("<tr/>");
          tr.append("<td>" + emp.user_id + "</td>"); // id
          tr.append("<td>" + emp.username + "</td>"); // username
          tr.append("<td>" + emp.displayname + "</td>"); // display name
          tr.append("<td>" + emp.email + "</td>"); // email
          tr.append(
            "<td>" +
              (emp.emailchangenotices == "t" ? "true" : "false") +
              "</td>"
          ); // email notices
          tr.append("<td>" + emp.password + "</td>"); // password
          tr.append("<td>" + emp.roles + "</td>"); // roles
          tr.append("<td>" + emp.userdetails + "</td>"); // details
          tr.append("<td>" + emp.createdatetime + "</td>"); // create time

          var action = "<td><div class='btn-group' data-toggle='buttons'>";
          action += `<a href='#' class='btn btn-warning btn-xs' data-id=${emp.user_id} data-toggle='modal' data-target='#edit_model'>Edit</a>`;
          action += `<a href='#' class='btn btn-danger btn-xs' data-id=${emp.user_id}>Delete</a>`;
          tr.append(action);
          $("#directory_body").append(tr);
        });
      },
    });
  }

  //initialize method on load
  function init() {
    let cardArea = `<div id="card-area" class="container"></div>`;
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
    loginCard()
    $("body").append(directoryArea);
    
    createTable();
  }

  function loginCard() {
    let form = `<div id="login" class="container-card">
    <div class="col s12">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">User Login</span>
          <div class="row">
      
            <div class="col s12">
              <form id="loginform" method="post">
                <span class="row">
                  <div class="input-field col s12">
                    <input id="user" type="email">
                    <label for="user">Username</label>
                  </div>
                </span>
                <span class="row">
                  <div class="input-field col s12">
                    <input id="password" type="password" class="validate">
                    <label for="password">Password</label>
                  </div>
                </span>
              </form>
            </div>
            <div class="col s3 offset-s9">
              <a class="waves-effect waves-light btn" id="submit" type="submit" name="action">Login<i class="material-icons right">send</i></a>
            </div>
            </div>
                </div>
                  <div class="card-action">
                    <a href="#">Change Password</a>
                    <a href="#">This is a link</a>
                  </div>
                </div>
            </div> 
          </div>`;
    $("body").append(form);
  }

  function addForm() {
    // $("#login").hide();
    let form = `<div class="row">
    <form class="col s4">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder" id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input disabled value="I am not editable" id="disabled" type="text" class="validate">
          <label for="disabled">Disabled</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          This is an inline input field:
          <div class="input-field inline">
            <input id="email_inline" type="email" class="validate">
            <label for="email_inline">Email</label>
            <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
          </div>
        </div>
      </div>
    </form>
  </div>`;

    // $("#card-area").append(form);
  }

  init();
  addForm();
});
