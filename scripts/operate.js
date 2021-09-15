$.getJSON("/scripts/points.json")
  .done(function (json) {
    console.log(json.pointslist);
    jQuery(function ($) {

      $(".button1").on("click", function () {
        var scores = [];
        $(".point input").each(function () {
          scores.push($(this).val());
        });
        for (let i = 0; i < scores.length; i++) {
          console.log(scores[i] + "\n");
          if (scores[i] != 0) {
            json.pointslist[i] = scores[i]
          }
        }
        alert("変更完了");
        console.log(json.pointslist);
      });
    });

    $(document).ready(function () {
      var outs = 0;
      $(".outputs").each(function(){
        $(this).text(json.pointslist[outs]);
        outs += 1;
      });
    });
  });