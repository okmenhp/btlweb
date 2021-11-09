<div class="body container">
    <div class="d-flex justify-content-between">
        <h4>Bài viết mới</h4>
        <p>Tin tức / Bài viết mới</p>
    </div>
    <div class="mid-body">
        <form action="" method="post">
            <div class="selection">
                <div class="title d-flex ">
                    <p class="">Tiêu đề: </p>
                    <input type="text" style="width: 40em">
                </div>
                <div class="type d-flex ">
                    <p class="">Ưu tiên: </p>
                    <input type="text" style="width: 4em">
                </div>
                <div class="tag d-flex ">
                    <p class="">Thẻ: </p>
                    <input type="text" style="width: 40em">
                </div>
            </div>

            <div class="content">
                <textarea name="editor1"></textarea>
            </div>
        </form>
    </div>
</div>
<script>
    CKEDITOR.replace( 'editor1', {
        filebrowserUploadUrl: "{{route('admin.articles.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    } );
</script>