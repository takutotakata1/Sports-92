
jQuery(function($){
  $(".button1").on("click", function () {
    var scores = [];
    $(".point input").each(function(){
      scores.push($(this).val());
    });
    for (let i = 0; i < scores.length; i++) {
      console.log(scores[i]+"\n");
    }
    var outs = 0;
    var onesum = 0;
    var twosum = 0;
    var threesum = 0;
    var foursum = 0;
    $(".ouputs").each(function(){
      if(scores[outs]!=0){
        $(this).text(scores[outs]);
      }
      // if(outs>3){
      //   var num = Number(scores[outs]);
      //   if(outs%4==0){
      //     onesum += num;
      //   } else if(outs%4==1){
      //     twosum += num;
      //   } else if(outs%4==2){
      //     threesum += num; 
      //   } else if(outs%4==3){
      //     foursum += num;
      //   }
      // }
      outs+=1;
    });
    alert("変更完了");
    $(".midashi").text("12");
  });
});