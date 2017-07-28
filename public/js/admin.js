devise.define(["jquery", "ckeditorJquery", "datetimepicker", 'jquery-ui'], function ($) {

  $('.date-only').datetimepicker({
    format: 'Y-m-d',
    timepicker: false,
  });

  $('.datetime').datetimepicker({
    format: 'Y-m-d H:i:s',
    timepicker: true,
  });

  //
  // IMAGE MANAGER
  //
  $('form').on('click', '.image-browser', function () {
    var input = $(this);
    var mediaUrl = '/admin/media-manager?cropMode=Preserve&type=image';

    window.open(mediaUrl, 'Media Manager', "width=1024,height=768,location=no");

    document.onMediaManagerSelect = function (images) {
      input.val(images);
    };
  });

  $('form').on('click', '.file-browser', function () {
    var input = $(this);
    var mediaUrl = '/admin/media-manager?cropMode=Preserve&type=pdf';

    window.open(mediaUrl, 'Media Manager', "width=1024,height=768,location=no");

    document.onMediaManagerSelect = function (images) {
      input.val(images);
    };
  });

  var _config = {
    filebrowserBrowseUrl: '/admin/media-manager?type=image',
    filebrowserImageWindowWidth: '1024',
    filebrowserImageWindowHeight: '768',
    toolbar: [
      ['Source'],
      ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', 'Undo', 'Redo'],
      ['Image', 'Table', 'Link', 'Iframe', 'HorizontalRule'],
      '/',
      ['FontSize', 'Bold', 'Italic', 'Underline', 'Strike'],
      ['NumberedList', 'BulletedList', 'Outdent', 'Indent', 'Blockquote', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock']
    ],
    skin: 'dvsadmin'
  };

  _config.extraPlugins = 'iframe,iframedialog,justify';

  var cke = $('textarea.wysiwyg').ckeditor(_config).editor;

  function convertToSlug(Text) {
    return Text
      .toLowerCase()
      .replace(/[^\w ]+/g, '')
      .replace(/ +/g, '-')
      ;
  }

  $('.title').on('input', function () {
    var slug = convertToSlug($(this).val());

    $('.slug').val(slug);
  });

});
