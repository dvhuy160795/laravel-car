
<div id="content_{{ $idTab }}" class="tab-content">
    <div class="col-md-12" id="list_content_intro">
        <div>
            <hr>
        </div>
        <div class="col-md-12 box_content" id="box_item_content_intro_1">
            <textarea name="item_content_intro_1" id="item_content_intro_1"></textarea>
            <script>CKEDITOR.replace('item_content_intro_1');</script>
        </div>
    </div>
    <div class="grid-width-100" style="padding: 3px">
        <input type="button" class="button" id="add_content" onclick="AdminController.fillItemContentIntro()" value="Thêm nội dung">
    </div> 
    
</div>
