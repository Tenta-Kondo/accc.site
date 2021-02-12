$(function () {

  var duration = 300,
    defaultColor = "#3498DB",
    changeColor = "#ae5e9b",
    defaultBorderWidth = "0px",
    changeBorderWidth = "12px";

  $(".nav-list li").on({
    mouseover: function () {

      $(this).stop(true).animate(
        {
          borderWidth: changeBorderWidth,
          color: changeColor,
          backgroundColor: "white",
        },
        duration
      );
    },
    mouseout: function () {
      $(this).stop(true).animate(
        {
          borderWidth: defaultBorderWidth,
          color: "white",
          backgroundColor: defaultColor,
        },
        duration
      );
    },
  });