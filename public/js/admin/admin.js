jQuery(function($){
    $("#menu-admin li").click(function(){
        $("#menu-admin li.selected").removeClass("selected");
        $(this).addClass('selected');
        console.log(1);
        $('#prod_wrapper .tab-content').addClass("hidden");
        console.log(1);
        $("#content_" + $(this).attr('id')).removeClass("hidden");
        console.log(1);
    });


    
});

var AdminController = {
    setSelected : function () {
        console.log($('#menu-admin li.select-tab').index());
//        $(el).addClass('selected');;
    },
    
    autoLoadEl : function (el, elDisplay, itemValue = ""){
        var $avatarUser = $('#'+elDisplay);
        var reader = new FileReader();
        console.log(elDisplay);
        reader.onload = function (e) {
            $avatarUser.attr('src', e.target.result);
        }
        reader.readAsDataURL(el.files[0]);
    },
    
    fillItemContentIntro : function () {
        console.log(parseInt($("#list_content_intro div.box_content:last-child").attr("id").replace("box_item_content_intro_","")));
        var index = parseInt($("#list_content_intro div.box_content:last-child").attr("id").replace("box_item_content_intro_","")) + 1;
        var html = "";
        html += "<div class='col-md-12 box_content' id='box_item_content_intro_"+index+"'><div><hr></div>" ;
        html += "<textarea name='item_content_intro_"+index+"' id='item_content_intro_"+index+"'></textarea>"
        html += "<script>CKEDITOR.replace('item_content_intro_"+index+"');</script>"
        html +="</div>";
        $("#list_content_intro").append(html);
    }
};


