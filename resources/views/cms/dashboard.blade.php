@extends('cms.templates.main-template')

@section('title')
    DashBoard
@stop

@section('content')
    <h1>TinyMCE Getting Started Guide</h1>
    <form method="post">
        <textarea id="mytextarea" class="form-control"></textarea>
    </form>

    <script type="text/javascript">
        tinymce.init({
            selector: "#mytextarea",
            theme: "modern",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern imagetools"
            ],
            toolbar1: "insertfile undo redo | styleselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
            toolbar2: "preview forecolor backcolor | fontselect | fontsizeselect",
            fontsize_formats: "8pt 10pt 13pt 15pt 17pt 24pt 36pt"
        });
    </script>
@stop
