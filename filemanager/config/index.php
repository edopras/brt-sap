<!doctype html>
<html>
<head>
 <title>TinyMCE ResponsiveFileManager</title>
 <script type="text/javascript" src="tinymce/tinymce.min.js"></script>
</head>
<body>

<form action="" method="post">
 <textarea></textarea>
</form>

<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste responsivefilemanager"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image responsivefilemanager",
    image_advtab: true,
 external_filemanager_path:"filemanager/",
    filemanager_title:"Responsive Filemanager",
    //external_plugins: {"filemanager" : "filemanager/plugin.min.js"}
});
</script>
</body>
</html>