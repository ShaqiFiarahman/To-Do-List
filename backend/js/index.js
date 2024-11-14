const toggleEdit = (id) => {
  if ($(`#todo-option-${id}`).is(":hidden")) {
    $(`#todo-option-${id}`).css("display", "flex");
  } else {
    $(`#todo-option-${id}`).css("display", "none");
  }
};

const toggleAddNew = () => {
  if ($("#add-new").is(":hidden")) {
    $("#add-new").css("display", "block");
  } else {
    $("#add-new").css("display", "none");
  }
};

const toggleEditNew = (id) => {
  if ($("#edit-new").is(":hidden")) {
    $("#edit-new").css("display", "block");
    $("#edit-new form").attr("action", `update.php?id=${id}`);
  } else {
    $("#edit-new").css("display", "none");
  }
};

const buttonHref = (url) => {
  window.location.href = `${url}`;
};
