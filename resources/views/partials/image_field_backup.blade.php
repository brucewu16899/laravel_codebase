
<div class="form-group col-sm-12 col-lg-3">
    <label for="image">新闻封面</label>
    <a id="cms-image-file" data-input="image" data-preview="cms-image-preview" class="btn btn-primary">
        <i class="fa fa-picture-o"></i> Choose
    </a>
</div>
<div class="form-group col-sm-12 col-lg-3">
    @if(isset($news))
        <input id="image" class="form-control" type="text" name="path" readonly value="{{$news->path}}">
    @else
        <input id="image" class="form-control" type="text" name="path" readonly>
    @endif
</div>


<div class="form-group col-sm-12 col-lg-6">
    @if(isset($news))
        <img id="cms-image-preview" src="{{$news->path}}" alt="新闻封面预览" style="width:200px; height:200px; line-height: 200px;text-align:center;">
    @else
        <img src="" id="cms-image-preview" alt="新闻封面预览" style="width:200px; height:200px; line-height: 200px;text-align:center;">
    @endif
</div>
