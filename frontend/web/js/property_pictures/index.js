
    var preview;

    $.fn.fileinputBsVersion = "4.6.1"; // if not set, this will be auto-derived

// Initialize Property pictures on load (kartik file input - Widjet)
    $( document ).ready(function() {
    console.log( "ready!" );
    var propertyID = $('#property_id').val();
    $.get("index.php?r=property/uploadpreview",{ propertyID: propertyID}, function(response){
    var propertyID = $('#property_id').val();

    preview = response.data
    console.log(preview['initialPreview']);
    console.log( 'hello' );
    var footerTemplate = '<div class="file-thumbnail-footer" style ="height:94px">\n' +
    '  <input class="new-caption kv-input kv-new form-control input-sm form-control-sm text-center {TAG_CSS_NEW}" name="Caption1" value="" placeholder="Enter caption...">\n' +
    '  <input readonly    class="picture-{TAG_CSS_ID}  kv-input kv-init form-control input-sm form-control-sm text-center {TAG_CSS_INIT}" name="Caption2" value="{TAG_VALUE}" placeholder="Enter caption...">\n' +
    '   <div class="small" style="margin:15px 0 2px 0">{size}</div> {progress}\n{indicator}\n{actions}\n' +
    '</div>';
    var btns = '<button hidden  type="button" class="kv-cust-btn btn btn-sm btn-kv btn-outline-secondary {TAG_CSS_NEW}" title="Edit"{dataKey}>' +
    '<i class="bi-pencil-square"></i>' +
    '</button>' +
    '<button onclick="editPropertyCaption(this.id)" id="{TAG_CSS_ID}" type="button" class="kv-cust-btn btn btn-sm btn-kv btn-outline-secondary {TAG_CSS_INIT}" title="Edit Caption"{dataKey}>' +
    '<i class="bi-pencil-square"></i>' +
    '</button>'+'<button hidden type="button" class="kv-cust-btn-update btn btn-sm btn-kv btn-outline-secondary {TAG_CSS_NEW}" title="Update Caption"{dataKey}>' +
    '<i class="bi bi-save"></i>' +
    '</button>'+'<button hidden onclick="updateCaption({TAG_CSS_ID})" id="update-caption-{TAG_CSS_ID}"  type="button" class="kv-cust-btn-update btn btn-sm btn-kv btn-outline-secondary {TAG_CSS_INIT}" title="Update Caption"{dataKey}>' +
    '<i class="bi bi-save"></i>' +
    '</button>';

    $("#input-711").fileinput({
    uploadUrl: "index.php?r=property/uploadpictures",
    uploadAsync: false,
    minFileCount: 1,
    maxFileCount: 5,
    maxFileSize:2048,
    allowedFileExtensions: ["jpg", "png", "jpeg"],
    showBrowse: true,
    browseOnZoneClick: false,
    layoutTemplates: {footer: footerTemplate},
    otherActionButtons: btns,
    // configure other plugin settings
    initialPreviewAsData: true, // allows you to set a raw markup

    initialPreview:preview['initialPreview'],
    initialPreviewConfig:preview['initialPreviewConfig'],
    previewThumbTags: {
    '{TAG_VALUE}': '',        // no value
    '{TAG_CSS_NEW}': '',      // new thumbnail input
    '{TAG_CSS_INIT}': 'kv-hidden'  // hide the initial input
},
    initialPreviewThumbTags: preview['caption'],
    //     [
    //     {'{TAG_VALUE}': 'Hotel Exterior', '{TAG_CSS_NEW}': 'kv-hidden', '{TAG_CSS_INIT}': ''},
    //     {'{TAG_VALUE}': 'Hotel Interior', '{TAG_CSS_NEW}': 'kv-hidden', '{TAG_CSS_INIT}': ''},
    //     // {
    //     //     '{TAG_VALUE}': function() { // callback example
    //     //         return 'City-2.jpg';
    //     //     },
    //     //     '{TAG_CSS_NEW}': 'kv-hidden',
    //     //     '{TAG_CSS_INIT}': ''
    //     // }
    // ],
    initialPreviewFileType: 'image', // image is the default and can be overridden in config below
    overwriteInitial: false,
    showCaption: true,
    fileActionSettings: {
    // showRemove: true,
    // showUpload: false,
    // showZoom: true,
    showDrag: false,
},
    uploadExtraData: function() {
    // callback example

    var output = {}, index = 0;
    // output['propertyID'] = propertyID;
    $('.new-caption:visible').each(function() {
    $element = $(this);
    output[index] = $element.val();
    index++;
});
    output.propertyID = propertyID;
    return output;

    // var out = {}, key, i = 0;
    //
    // $('.new-caption:visible').each(function() {
    //     var $thumb = $(this).closest('.file-preview-frame'); // gets the thumbnail
    //     var fileId = $thumb.data('fileid'); // gets the file identifier for file thumb
    //     out[fileId] = $(this).val();
    // });
    // return out;
}
    // uploadExtraData: this.uploadExtraData
}).on('filebeforedelete', function() {
    return new Promise(function(resolve, reject) {
    $.confirm({
    title: 'Confirmation!',
    content: 'Are you sure you want to delete this file?',
    type: 'red',
    buttons: {
    ok: {
    btnClass: 'btn-primary text-white',
    keys: ['enter'],
    action: function(){
    resolve();
}
},
    cancel: function(){
    $.alert('File deletion was aborted! ');
}
}
});
});
}).on('filedeleted', function() {
    setTimeout(function() {
    $.alert('File deletion was successful! ');
}, 900);
}).on('fileuploaded', function(e, params) {
    console.log('file uploaded', e, params);
});
}).on('fileloaded', function(event, file, previewId, fileId, index, reader) {
    console.log("fileloaded");
});
    // console.log( preview['initialPreview'] );


});

    function editPropertyCaption(val){
    // alert($(".picture-"+val).val());
    $(".picture-"+val).prop('readonly', false);
    $("#update-caption-"+val).attr("hidden",false);
    $("#"+val).attr("hidden",true);
}

    function updateCaption(val){
    // alert($(".picture-"+val).val());
    let data = new FormData();
    let Caption  = $(".picture-"+val).val();

    data.append('pictureID', val);
    data.append('caption', Caption);
    $.ajax({
    type: "post",
    enctype: 'multipart/form-data',
    url: "index.php?r=property/updatecaption",
    data: data,
    processData: false,
    contentType: false,
    cache: false,
    timeout: 800000,
    success: function (response) {
    if (response.status == 0) {
    $("#update-caption-"+val).attr("hidden",true);
    $("#"+val).attr("hidden",false);
    $(".picture-"+val).prop('readonly', true);
    toastr.success(response.message);
}
},
    error: function (e) {
    // $("#overlay").fadeOut(300);

    console.log(e.responseText);
    toastr.error("Server error: " + e.responseText);
}
});
}

// Property room pictures
    $( "#property-room" ).change(function() {
    $(".room-file-upload").show();

    var roomID = $('#property-room :selected').val();

    //
    // var $el4 = $('#input-room-file'), initPlugin = function() {
    //     $el4.fileinput({previewClass:''});
    // };
    //
    // // initialize plugin
    // initPlugin();

    // $el4.fileinput('clear');
    $.get("index.php?r=property/roomimagepreview",{ roomID: roomID}, function(response){
    var preview = response.data
    console.log(preview);
    console.log(roomID);
    var footerTemplate = '<div class="file-thumbnail-footer" style ="height:94px">\n' +
    '  <input class="new-caption-room kv-input kv-new form-control input-sm form-control-sm text-center {TAG_CSS_NEW}" name="Caption1" value="" placeholder="Enter caption...">\n' +
    '  <input  readonly class="room-pic-caption-{TAG_CSS_ID} kv-input kv-init form-control input-sm form-control-sm text-center {TAG_CSS_INIT}" name="Caption2" value="{TAG_VALUE}" placeholder="Enter caption...">\n' +
    '   <div class="small" style="margin:15px 0 2px 0">{size}</div> {progress}\n{indicator}\n{actions}\n' +
    '</div>';
    var btns = '<button hidden  type="button" class="kv-cust-btn btn btn-sm btn-kv btn-outline-secondary {TAG_CSS_NEW}" title="Edit"{dataKey}>' +
    '<i class="bi-pencil-square"></i>' +
    '</button>' +
    '<button onclick="editRoomCaption({TAG_CSS_ID},this.id)" id="editRoomCaption{TAG_CSS_ID}" type="button" class="kv-cust-btn btn btn-sm btn-kv btn-outline-secondary {TAG_CSS_INIT}" title="Edit Caption"{dataKey}>' +
    '<i class="bi-pencil-square"></i>' +
    '</button>'+'<button hidden type="button" class="kv-cust-btn-update btn btn-sm btn-kv btn-outline-secondary {TAG_CSS_NEW}" title="Update Caption"{dataKey}>' +
    '<i class="bi bi-save"></i>' +
    '</button>'+'<button hidden onclick="updateRoomCaption({TAG_CSS_ID})" id="update-room-caption-{TAG_CSS_ID}"  type="button" class="kv-cust-btn-update btn btn-sm btn-kv btn-outline-secondary {TAG_CSS_INIT}" title="Update Caption"{dataKey}>' +
    '<i class="bi bi-save"></i>' +
    '</button>';
    var $el4 = $('#input-room-file'), initPlugin = function() {
    // $el4.fileinput('clearFileStack');
    $el4.fileinput('destroy').fileinput({
    uploadUrl: "index.php?r=property/uploadroompictures",
    uploadAsync: false,
    minFileCount: 1,
    maxFileCount: 5,
    maxFileSize:2048,
    allowedFileExtensions: ["jpg", "png", "jpeg"],
    showBrowse: true,
    browseOnZoneClick: false,
    layoutTemplates: {footer: footerTemplate},
    otherActionButtons: btns,

    initialPreviewAsData: true, // allows you to set a raw markup

    initialPreview: preview['initialPreview'],
    initialPreviewConfig: preview['initialPreviewConfig'],
    previewThumbTags: {
    '{TAG_VALUE}': '',        // no value
    '{TAG_CSS_NEW}': '',      // new thumbnail input
    '{TAG_CSS_INIT}': 'kv-hidden'  // hide the initial input
},
    initialPreviewThumbTags: preview['caption'],
    initialPreviewFileType: 'image', // image is the default and can be overridden in config below
    overwriteInitial: false,
    showCaption: true,
    fileActionSettings: {
    // showRemove: true,
    // showUpload: false,
    // showZoom: true,
    showDrag: false,
},
    uploadExtraData: function () {
    // callback example

    var output = {}, index = 0;
    // output['propertyID'] = propertyID;
    $('.new-caption-room:visible').each(function () {
    $element = $(this);
    output[index] = $element.val();
    index++;
});
    output.roomID = roomID;
    return output;
}

}).on('filebeforedelete', function() {
    return new Promise(function(resolve, reject) {
    $.confirm({
    title: 'Confirmation!',
    content: 'Are you sure you want to delete this file?',
    type: 'red',
    buttons: {
    ok: {
    btnClass: 'btn-primary text-white',
    keys: ['enter'],
    action: function(){
    resolve();
}
},
    cancel: function(){
    $.alert('File deletion was aborted! ');
}
}
});
});
}).on('filedeleted', function() {
    setTimeout(function() {
    $.alert('File deletion was successful! ');
}, 900);
}).on('fileuploaded', function (e, params) {
    console.log('file uploaded', e, params);
});
}
    // $('#input-id').fileinput('clearFileStack');
    // $el4.fileinput('clear');

    initPlugin();

});

});

    function editRoomCaption(val,ID){

    $(".room-pic-caption-"+val).prop('readonly', false);
    $("#update-room-caption-"+val).attr("hidden",false);
    $("#"+ID).attr("hidden",true);
}
    function updateRoomCaption(val){
    // alert($(".picture-"+val).val());
    let data = new FormData();
    let Caption  = $(".room-pic-caption-"+val).val();

    data.append('pictureID', val);
    data.append('caption', Caption);
    $.ajax({
    type: "post",
    enctype: 'multipart/form-data',
    url: "index.php?r=property/updateroomcaption",
    data: data,
    processData: false,
    contentType: false,
    cache: false,
    timeout: 800000,
    success: function (response) {
    if (response.status == 0) {
    $("#update-room-caption-"+val).attr("hidden",true);
    $("#editRoomCaption"+val).attr("hidden",false);
    $(".room-pic-caption-"+val).prop('readonly', true);
    toastr.success(response.message);
}
},
    error: function (e) {
    // $("#overlay").fadeOut(300);

    console.log(e.responseText);
    toastr.error("Server error: " + e.responseText);
}
});
}

