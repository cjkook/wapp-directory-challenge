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
      url: "response.php?action=list",
      // url: "./app/models/User.php?action=list",
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
          action +=
            "<a href='#' target='_blank' class='btn btn-warning btn-xs' data-toggle='modal' data-target='#edit_model'>Edit</a>";
          action +=
            "<a href='#' target='_blank' class='btn btn-danger btn-xs'>Delete</a>";
          tr.append(action);
          $("#directory_body").append(tr);
        });
      },
    });
  }

  //initialize method on load
  function init() {
    createTable();
    let addModal = $("<div>", { id: "add-modal", class: "modal" });
    addModal
      .append($("<div>", { class: "modal-content" }))
      .append("<h4>", "test");
    let addButton = $("<button>");
  }
  init();
});
