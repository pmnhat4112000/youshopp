 //-----------------
         $(".search__input").keyup(function(){
            var strKey = $("#key").val();
            if(strKey.trim() == "")
                $(".smart-search").attr("style","display:none");
            else{
                $(".smart-search").attr("style","display:block");
                //---
                //su dung ajax de lay du lieu
                $.get("index.php?controller=search&action=ajaxSearch&key="+strKey,function(data){
                    //clear cac the li ben trong the ul
                    $(".smart-search ul").empty();
                    //them su lieu vua lay duoc bang ajax vao the ul
                    $(".smart-search ul").append(data);
                });
                //---
            }
         });
         //-----------------
         //
               



            
    
    