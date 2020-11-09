$(document).ready(function() {
    $('.select2-multiple').select2({
        tags: true,
        tokenSeparators: [',']
    });
    var editor_config = {
      path_absolute : "/",
      selector: "textarea.my-editor",
      plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern"
      ],
      toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
      relative_urls: false,
      file_browser_callback : function(field_name, url, type, win) {
        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
  
        var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
        if (type == 'image') {
          cmsURL = cmsURL + "&type=Images";
        } else {
          cmsURL = cmsURL + "&type=Files";
        }
  
        tinyMCE.activeEditor.windowManager.open({
          file : cmsURL,
          title : 'Filemanager',
          width : x * 0.8,
          height : y * 0.8,
          resizable : "yes",
          close_previous : "no"
        });
      }
    };
  
    tinymce.init(editor_config);

    let total_photos_counter = 0;
    Dropzone.options.myDropzone = {
        uploadMultiple: true,
        parallelUploads: 2,
        maxFilesize: 16,
        previewTemplate: document.querySelector('#preview').innerHTML,
        addRemoveLinks: true,
        dictRemoveFile: 'Remove file',
        dictFileTooBig: 'Image is larger than 16MB',
        timeout: 10000,
     
        init: function () {
            this.on("removedfile", function (file) {
                $.post({
                    url: '/images-delete',
                    data: {id: file.name, _token: $('[name="_token"]').val()},
                    dataType: 'json',
                    success: function (data) {
                        total_photos_counter--;
                        $("#counter").text("# " + total_photos_counter);
                    }
                });
            });
        },
        success: function (file, done) {
            total_photos_counter++;
            $("#counter").text("# " + total_photos_counter);
        }
    };

  });

