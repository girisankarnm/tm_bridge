$("#basicdetails-website").keydown(function(e) {
    var oldvalue=$(this).val();
    var field=this;
    setTimeout(function () {
        if(field.value.indexOf('https://') !== 0) {
            $(field).val(oldvalue);
        }
    }, 1);
});