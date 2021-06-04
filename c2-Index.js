$(document).ready(function () {
  $(".user-level-access").change(function () {
    var text = $(this).val();
    if (text == "staff") {
      $(".data-reject,.data-lock,.data-activate").remove();
    } else if (text == "user") {
      $(
        ".data-edit,.data-delete,.data-reject,.data-lock,.data-activate"
      ).remove();
    } else if (text == "guest") {
      $(
        ".tab2_item,.tab2_policy,.tab3_contract,.contract-create,.data-create,.policy-create,.data-edit,.data-delete,.data-reject,.data-lock,.data-activate"
      ).remove();
    }
    $(this).prop("disabled","disabled");
  });

  $(".data-create").click(function () {
    $(".create-data_t").show();
  });
  $(".policy-create").click(function () {
    $(".create-policy_t").show();
  });
  $(".contract-create").click(function () {
    $(".create-contract_t").show();
  });
  $(".cancel-form").click(function () {
    $(this).parents().find(".create-record-form").hide();
  });

  // Data Form Upload
  $("#form-data_t").on("submit", function (e) {
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: "c2-doCreateRecord.php",
      data: new FormData(this),
      dataType: "json",
      contentType: false,
      cache: false,
      processData: false,
      beforeSend: function () {
        $(".create-form-save, .cancel-form").attr("disabled", "disabled");
        $("#form-data_t").css("opacity", ".5");
      },
      success: function (response) {
        //console.log(response);
        if (response.status == 1) {
          $("#form-data_t")[0].reset();
        }
        $("#form-data_t").css("opacity", "");
        $(".create-form-save,.cancel-form").removeAttr("disabled");
      },
    });
  });

  // Policy Form Upload
  $("#form-policy_t").on("submit", function (e) {
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: "c2-doCreatePolicyRecord.php",
      data: new FormData(this),
      dataType: "json",
      contentType: false,
      cache: false,
      processData: false,
      beforeSend: function () {
        $(".create-form-save, .cancel-form").attr("disabled", "disabled");
        $("#form-policy_t").css("opacity", ".5");
      },
      success: function (response) {
        //console.log(response);
        if (response.status == 1) {
          $("#form-policy_t")[0].reset();
        }
        $("#form-policy_t").css("opacity", "");
        $(".create-form-save,.cancel-form").removeAttr("disabled");
      },
    });
  });

  $("#form-contract_t").on("submit", function (e) {
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: "c2-doCreateContractRecord.php",
      data: new FormData(this),
      dataType: "json",
      contentType: false,
      cache: false,
      processData: false,
      beforeSend: function () {
        $(".create-form-save, .cancel-form").attr("disabled", "disabled");
        $("#form-contract_t").css("opacity", ".5");
      },
      success: function (response) {
        //console.log(response);
        if (response.status == 1) {
          $("#form-contract_t")[0].reset();
        }
        $("#form-contract_t").css("opacity", "");
        $(".create-form-save,.cancel-form").removeAttr("disabled");
      },
    });
  });
});

function viewDataTable(tableName) {
  $.ajax({
    url: "c2-viewTableMode.php",
    method: "POST",
    data: { data: tableName },
    success: function (data) {
      $(".resultArea-data_t").empty();
      $(".resultArea-policy_t").empty();
      $(".resultArea-contract_t").empty();
      if (tableName == "data_t") {
        $(".resultArea-data_t").append(data);
      } else if (tableName == "policy_t") {
        $(".resultArea-policy_t").append(data);
      } else {
        $(".resultArea-contract_t").append(data);
      }
    },
    error: function (error) {},
  });
}

function editDataTableView(tableName) {
  $.ajax({
    url: "c2-editTableMode.php",
    method: "POST",
    data: { data: tableName },
    success: function (data) {
      $(".resultArea-data_t").empty();
      $(".resultArea-policy_t").empty();
      $(".resultArea-contract_t").empty();
      if (tableName == "data_t") {
        $(".resultArea-data_t").append(data);
      } else if (tableName == "policy_t") {
        $(".resultArea-policy_t").append(data);
      } else {
        $(".resultArea-contract_t").append(data);
      }
    },
    error: function (error) {},
  });
}

function deleteDataTableView(tableName) {
  $.ajax({
    url: "c2-deleteTableMode.php",
    method: "POST",
    data: { data: tableName },
    success: function (data) {
      $(".resultArea-data_t").empty();
      $(".resultArea-policy_t").empty();
      $(".resultArea-contract_t").empty();
      if (tableName == "data_t") {
        $(".resultArea-data_t").append(data);
      } else if (tableName == "policy_t") {
        $(".resultArea-policy_t").append(data);
      } else {
        $(".resultArea-contract_t").append(data);
      }
    },
    error: function (error) {},
  });
}

function rejectApproveTableView(tableName) {
  $.ajax({
    url: "c2-rejectTableMode.php",
    method: "POST",
    data: { data: tableName },
    success: function (data) {
      $(".resultArea-data_t").empty();
      $(".resultArea-policy_t").empty();
      $(".resultArea-contract_t").empty();
      if (tableName == "data_t") {
        $(".resultArea-data_t").append(data);
      } else if (tableName == "policy_t") {
        $(".resultArea-policy_t").append(data);
      } else {
        $(".resultArea-contract_t").append(data);
      }
    },
    error: function (error) {},
  });
}

function lockUnlockTableView(tableName) {
  $.ajax({
    url: "c2-lockTableMode.php",
    method: "POST",
    data: { data: tableName },
    success: function (data) {
      $(".resultArea-data_t").empty();
      $(".resultArea-policy_t").empty();
      $(".resultArea-contract_t").empty();
      if (tableName == "data_t") {
        $(".resultArea-data_t").append(data);
      } else if (tableName == "policy_t") {
        $(".resultArea-policy_t").append(data);
      } else {
        $(".resultArea-contract_t").append(data);
      }
    },
    error: function (error) {},
  });
}

function activateDeactivateTableView(tableName) {
  $.ajax({
    url: "c2-activateTableMode.php",
    method: "POST",
    data: { data: tableName },
    success: function (data) {
      $(".resultArea-data_t").empty();
      $(".resultArea-policy_t").empty();
      $(".resultArea-contract_t").empty();
      if (tableName == "data_t") {
        $(".resultArea-data_t").append(data);
      } else if (tableName == "policy_t") {
        $(".resultArea-policy_t").append(data);
      } else {
        $(".resultArea-contract_t").append(data);
      }
    },
    error: function (error) {},
  });
}

function editRow(e) {
  var getParentRow = $(e).parent().parent();
  var ids = $(e).prop("id");
  console.log(getParentRow);
  $(e).hide();
  $(getParentRow)
    .find("td")
    .each(function (item) {
      if (!$(this).hasClass("ignore-cell")) {
        var $th = $(this).closest("table").find("th").eq($(this).index());
        var text = $(this).text();
        if (
          $th.text() == "data_id" ||
          $th.text() == "policy_Id" ||
          $th.text() == "contract_id"
        ) {
        } else {
          if (!isValidDate(text)) {
            var element =
              '<input class="form-control" type="text" value="' + text + '">';
            $(this).empty();
            $(this).append(element);
          }
        }
      } else {
        if ($(this).find(".save-btn").length) {
          $(this).parent().find(".save-btn").show();
          $(this).parent().find(".cancel-btn").show();
        } else {
          var buttonElement =
            '<button class="btn btn-primary save-btn" onclick="saveBtn(this)" id=' +
            ids +
            '>Save</button><br><button class="btn btn-danger cancel-btn" onclick="cancelBtn(this)">Cancel</button>';
          $(this).append(buttonElement);
        }
      }
    });
}

function isValidDate(s) {
  if (s.indexOf("/") != -1) {
    var bits = s.split("/");
    var d = new Date(bits[2] + "/" + bits[1] + "/" + bits[0]);
    return !!(
      d &&
      d.getMonth() + 1 == bits[1] &&
      d.getDate() == Number(bits[0])
    );
  }
  if (s.indexOf("-") != -1) {
    var bits = s.split("-");
    var d = new Date(bits[1] + "/" + bits[2] + "/" + bits[0]);
    return !!d;
  }
}

function cancelBtn(e) {
  var getParentRow = $(e).parent().parent();
  $(e).hide();
  $(e).parent().find(".save-btn").hide();
  console.log(getParentRow);
  $(getParentRow)
    .find("td")
    .each(function (item) {
      if (!$(this).hasClass("ignore-cell")) {
        if ($(this).find("input").length) {
          var text = $(this).find("input").val();
          $(this).empty();
          $(this).append(text);
        }
      } else {
        $(this).find(".edit-row").show();
      }
    });
}

function saveBtn(e) {
  var conditionalFilter = $(e).prop("id");
  var trElement = $(e).parent().parent();
  var updateQuery = "UPDATE {0} SET ";
  $(trElement)
    .find("td")
    .each(function (item) {
      if (!$(this).hasClass("ignore-cell")) {
        if ($(this).find("input").length) {
          var $th = $(this).closest("table").find("th").eq($(this).index());
          var text = $(this).find("input").val();
          if (Math.floor(text) == text && $.isNumeric(text)) {
            updateQuery = updateQuery + "@`" + $th.text() + "` = " + text + " ";
          } else {
            updateQuery =
              updateQuery + "@`" + $th.text() + "` = '" + text + "' ";
          }
        } else {
          //Assuming these are date fields
          var $th = $(this).closest("table").find("th").eq($(this).index());
          if (
            $th.text() != "data_id" &&
            $th.text() != "policy_Id" &&
            $th.text() != "contract_id"
          ) {
            updateQuery = updateQuery + "@`" + $th.text() + "` = undefined";
          }
        }
      }
    });
  var parts = conditionalFilter.match(/([^@]*)@(.*)/);
  var tableName = parts[1];
  var otherQuery = parts[2];
  otherQuery = otherQuery.replace(/\@/g, " AND ");
  otherQuery = otherQuery.replace(/\;/g, " = ");
  updateQuery = updateQuery.replace(/\{0}/g, tableName);
  updateQuery = updateQuery.replace(/\@/g, ", ");
  updateQuery = updateQuery.replace("SET ,", "SET");
  var query = updateQuery + " WHERE " + otherQuery;
  console.log(query);
  $.ajax({
    url: "c2-doEdit.php",
    type: "POST",
    data: { data: query },
    success: function (data) {
      location.reload();
    },
  });
}

function deleteRow(e) {
  var sqlQuery = $(e).prop("id");
  $.ajax({
    url: "c2-doDelete.php",
    method: "POST",
    data: { data: sqlQuery },
    success: function (data) {
      location.reload();
    },
  });
}

function commonOperations(e) {
  var id = $(e).prop("id");
  var operation = $(e).text().toLowerCase();
  if (operation == "approve") {
    operate = "Approved";
    statTable = "`datastatus_t`";
    statColumn = "`dataStatus_title`";
  } else if (operation == "reject") {
    operate = "Unapproved";
    statTable = "`datastatus_t`";
    statColumn = "`dataStatus_title`";
  } else if (operation == "lock") {
    operate = "Locked";
    statTable = "`datastatus_t`";
    statColumn = "`dataStatus_title`";
  } else if (operation == "unlock") {
    operate = "Released/Unlocked";
    statTable = "`datastatus_t`";
    statColumn = "`dataStatus_title`";
  } else if (operation == "activate") {
    operate = "Active";
    statTable = "`datastatus_t`";
    statColumn = "`dataStatus_title`";
  } else if (operation == "deactivate") {
    operate = "Passive";
    statTable = "`datastatus_t`";
    statColumn = "`dataStatus_title`";
  }
  var operateQuery = statColumn + " = '" + operate + "'";
  $.ajax({
    url: "c2-doApproveReject.php",
    method: "POST",
    data: { data: id, operation: operateQuery, statusTable: statTable },
    success: function (data) {
      location.reload();
    },
  });
}
