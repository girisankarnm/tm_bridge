function printData(Val)
{
    var divToPrint=document.getElementById("tariff_print");
    var date = $('input[name="daterange"]').val();
    if (Val == 1){
        var page_name =  "Tariff";
    }else if(Val == 2){
        var page_name =  "Meals";
    }else if(Val == 3){
        var page_name =  "Dinner";
    }

    newWin= window.open("");

    newWin.document.write(`<html><head><title> ${page_name} Report for ${date}</title></head><body>`);
    newWin.document.write(`<style>.tariff_table { border-collapse: collapse;  margin: auto;
                width: 100% !important; }
            .tariff_table th, .tariff_table td { padding: 5px; border: solid 1px #777; }
            .tariff_table th { background-color: #586ADA; } .text-right {text-align: right !important;}</style>`);
    newWin.document.write( divToPrint.outerHTML );
    newWin.document.write('</body></html>');
    newWin.print();
    newWin.close();
}

function Print(Val){
    printData(Val);
}
