$(document).ready(function () {
  $(".hamburguer").click(function () {
    $(this).toggleClass("hamburguer-active");
    $(".nav-list-mobile").toggleClass("active");
  });
});
