$(function () {
  var textInput = $("#text-input");
  var submitButton = $("#button-submit");
  var textContainer = $("#text-container");
  textContainer.hide();

  $("#image-file").change(function () {
    var file = this.files[0];
    if (file) {
      var reader = new FileReader();
      reader.onload = function (e) {
        var img = $("<img>");
        img.attr("src", e.target.result);
        img.attr("class", "img-thumbnail");
        $("#image-preview").empty().append(img);
      };
      reader.readAsDataURL(file);
    }
  });

  submitButton.click(function () {
    var text = textInput.val();
    var textElement = $('<div class="ui-widget-content">' + text + "</div>");
    textContainer.append(textElement);
    textContainer.show();

    textElement
      .draggable({
        containment: "parent",
        stop: function (event, ui) {
          textElement.attr("data-left", ui.position.left);
          textElement.attr("data-top", ui.position.top);
        },
      })
      .resizable({
        containment: "parent",
        autoHide: true,
        handles: "n, e, s, w",
        stop: function (event, ui) {
          textElement.attr("data-width", ui.size.width);
          textElement.attr("data-height", ui.size.height);
          var fontSize = Math.min(ui.size.width, ui.size.height) / 5;
          $("#text-container").css("font-size", fontSize + "px");
        },
      });
    textInput.val("");
  });

  $("#font-select").on("change", function () {
    $(".ui-widget-content").css("font-family", $(this).val());
  });

  $("#color-select").on("change", function () {
    $(".ui-widget-content").css("color", $(this).val());
  });
});
