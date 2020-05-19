/*$(function(){
   //URL取得し、＃以降の文字列を取り出す
   var url   = location.href;
   params    = url.split("#");
   //ブラウザで更新した時しっかりそのページを更新
   if(params[1] == null){
      page = "top";
   }else{
      page = params[1];
   }

   $.ajax({
      url:page+".php",
      datatype:"html"
   }).done(function(data){
      $("#content").html(data);
   });

   $("#logo a").on("click", function(){
      $("#loading").css({"display":"block"});
      $.ajax({
         url:"top.php",
         datatype:"html"
      }).done(function(data){
         $("#loading").delay(900).fadeOut(400);
         setTimeout(function(){
            $("#content").html(data);
         },900);
      });
   })

   $("#exp_company").on("click", function(){
      $("#loading").css({"display":"block"});
      $.ajax({
         url:"company.php",
         datatype:"html"
      }).done(function(data){
         $("#loading").delay(900).fadeOut(400);
         setTimeout(function(){
            $("#content").html(data);
         },900);
      });
   });

   $("#recruit").on("click", function(){
      $("#loading").css({"display":"block"});
      $.ajax({
         url:"recruit.php",
         datatype:"html"
      }).done(function(data){
         $("#loading").delay(900).fadeOut(400);
         setTimeout(function(){
            $("#content").html(data);
         },900);
      });
   });

   $("#policy").on("click", function(){
      $("#loading").css({"display":"block"});
      $.ajax({
         url:"policy.php",
         datatype:"html"
      }).done(function(data){
         $("#loading").delay(900).fadeOut(400);
         setTimeout(function(){
            $("#content").html(data);
         },900);
      });
   });

   $("#seminar").on("click", function(){
      $("#loading").css({"display":"block"});
      $.ajax({
         url:"seminar.php",
         datatype:"html"
      }).done(function(data){
         $("#loading").delay(900).fadeOut(400);
         setTimeout(function(){
            $("#content").html(data);
         },900);
      });
   });

   $("#syain").on("click", function(){
      $("#loading").css({"display":"block"});
      $.ajax({
         url:"syain.php",
         datatype:"html"
      }).done(function(data){
         $("#loading").delay(900).fadeOut(400);
         setTimeout(function(){
            $("#content").html(data);
         },900);
      });
   });

});*/