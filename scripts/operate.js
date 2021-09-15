
var scores = [];
jQuery(function($){
  $(".button1").on("click", function () {
    var sum = 0;
    $(".point input").each(function(){
      scores.push($(this).val());
    });
    for (let i = 0; i < scores.length; i++) {
      console.log(scores[i]+"\n");
    }
    alert("変更完了");
  });
});