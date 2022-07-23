function add_option(x){
    // alert(x);
    url = "index.php?r=clientrequestedoption/addoption&key="+x;
    popupWindow = window.open(url,'popUpWindow','height=340,width=520,left=50,top=50,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes')

}

function edit_request(key, property_id){
// alert(key);
// alert(property_id);

    url = "index.php?r=editrequest/createrequest&key="+key+"&property_id="+property_id;
    popupWindow = window.open(url,'popUpWindow','height=500,width=550,bottom=50,resizable=yes,scrollbars=yes,')

}