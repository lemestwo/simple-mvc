$(document).ready(function () {
  $("form#formUser").submit(function (e) {

    e.preventDefault();

    $.ajax({
      url: $(this).attr("action"),
      data: $(this).serialize(),
      type: "POST",
      success: function (e) {
        alert('Success!')
      },
      error: function (e) {
        alert('Error!')
      }
    });
  });
});

function deleteFunc(id) {
  $.ajax({
    url: '/simple-mvc/public/user/' + id + '/delete',
    type: "GET",
    success: function (e) {
      alert('Success!');
      location.reload();
    },
    error: function (e) {
      alert('Error!')
    }
  });
}