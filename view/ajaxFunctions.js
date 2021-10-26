let phpFile = 'business/User.php'

/* Handling get users */
function createTable() {
  $.ajax({
    type: "GET",
    // url: "response.php?action=list",
    url: `${phpFile}?action=list`,
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
          "<td>" + (emp.emailchangenotices == "t" ? "true" : "false") + "</td>"
        ); // email notices
        tr.append("<td>" + emp.pwd + "</td>"); // password
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

// USER LOGIN
// User submits username and password.
function userLogin(data) {
  console.log(data);
  $.ajax({
    type: "POST",
    url: `${phpFile}?action=login&username=${data.username}&password=${data.password}`,
    success: function(response) {
      response = JSON.parse(response);
      console.log(response);
    }
  });
}
