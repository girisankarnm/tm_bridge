const MAXIMUM_NUMBER_OF_RATE_SLAB = 15;  
  $(document).ready(function() { 
  });
  
  function insertSlabRow(id, singleOccupancy, number_of_extra_beds, number_of_kids_on_sharing)
  {
    var rowCount = document.getElementById('tariff_slab_table_'+id).rows.length;
    if ( rowCount > MAXIMUM_NUMBER_OF_RATE_SLAB ) {
        return;
    }
    
    let single_occupancy_col = "";    
    single_occupancy_col = '<td> <input type="text" name="single_occupancy_'+ id + '[]" class="inputTextroomtable"';
    if(singleOccupancy != 1) {
      single_occupancy_col += 'required';
    }
    else {
      single_occupancy_col += 'disabled placeholder="No SGL"';
    }    
    single_occupancy_col += '/></td>';

    adult_with_extra_bed_col = "";
    child_with_extra_bed_col = "";
    if(number_of_extra_beds > 0) { 
      adult_with_extra_bed_col = ' required';
      child_with_extra_bed_col = ' required';
    }
    else
    {
      adult_with_extra_bed_col = ' disabled placeholder="No EBA"';
      child_with_extra_bed_col = ' disabled placeholder="No CWB"';
    }

    child_sharing_bed_col = "";
    if(number_of_kids_on_sharing > 0) { 
      child_sharing_bed_col = ' required';      
    }
    else
    {
      child_sharing_bed_col = ' disabled placeholder="No CNB"';      
    }
    

    //$("#tariff_slab_table_"+id).append('<tr><td>Slab '+ (rowCount -1) +'</td><td><input type="text" name="room_rate_'+ id +'[]" class="form-control form-control-sm a col-md-12" /></td><td><input type="text" name="adult_with_extra_bed_'+ id +'[]" class="form-control form-control-sm a col-md-12" /></td><td><input type="text" name="child_with_extra_bed_'+ id +'[]" class="form-control form-control-sm a col-md-12" /></td><td><input type="text" name="child_sharing_bed_'+ id +'[]" class="form-control form-control-sm a col-md-12" /></td><td><input type="text" name="single_occupancy_'+ id +'[]" class="form-control form-control-sm a col-md-12" /></td> <td><button id="remr" onclick="deleteSlabRow(this,'+id+'); return true;" style="border-radius: 50%"><i class="fa fa-minus"></i></button></td></tr>');
    $("#tariff_slab_table_"+id).append('<tr>' + 
    '<td>Slab '+ (rowCount -3) +'</td>' +
    '<td>' +
    '<input type="text" name="room_rate_'+ id + '[]" class="inputTextroomtable" required/>' +
    '</td>' +
    '<td>' +
    '<input type="text" name="adult_with_extra_bed_'+ id + '[]" class="inputTextroomtable"' + 
    adult_with_extra_bed_col +
    ' /></td>' +
    '<td>' +
    '<input type="text" name="child_with_extra_bed_'+ id + '[]" class="inputTextroomtable"' +
    child_with_extra_bed_col +     
    ' /></td>' +
    '<td>' +
    '<input type="text" name="child_sharing_bed_'+ id + '[]" class="inputTextroomtable"' + 
    child_sharing_bed_col +
    ' /></td>' +
      single_occupancy_col +
    '<td><button id="remr" onclick="deleteSlabRow(this,'+id+'); return true;" style="border-radius: 50%;border: 0px;background-color: #f9f9f9"><img src="images/minus.svg" alt="" ></button></td>' +
    '</tr>');
  }

  function deleteSlabRow(row, id)
  {
      var i = row.parentNode.parentNode.rowIndex;
      var totalRows = document.getElementById('tariff_slab_table_'+id).rows.length;
      document.getElementById('tariff_slab_table_'+id).deleteRow(i);
      for( j = 2; j < totalRows; j++){
          var table = document.getElementById('tariff_slab_table_'+id);
          var currentRow = j-1;
          table.rows[j].cells[0].innerHTML = 'Slab' +  currentRow;
      }
  }

  //insertSlabRow(<?php // $nationality_id; ?>, <?php //$room->same_tariff_for_single_occupancy ?> , <?php // $room->number_of_extra_beds ?>, <?php // $room->number_of_kids_on_sharing ?> );

  function submitRoomRates() {    

    var nationality_ids = document.getElementsByName('nationality_ids[]');
    let bValid = true;
    for (var i = 0; i <nationality_ids.length; i++) {
      var nationality = nationality_ids[i]; 
      columns = ['room_rate', 'adult_with_extra_bed', 'child_with_extra_bed', 'child_sharing_bed', 'single_occupancy'];

      columns.forEach(column => {
        
        var room_rates = document.getElementsByName( column + '_' + nationality.value + '[]');
        for (var j = 0; j < (room_rates.length - 1); j++) {
            //TODO: reset to deafult color
            var id = column + '_' + nationality.value + '_' + (j+1);            
            document.getElementById(id).style.borderColor = '#c3c3c3';

            if( parseInt(room_rates[j].value) < parseInt(room_rates[j+1].value)) {              
              //Error
              bValid = false;
              console.log("Error: Higher slab shoul have less amount, Nationality: " + nationality.value + " Row: " + (j+1) );
              var id = column + '_' + nationality.value + '_' + (j+1);
              //TODO: Fix RED color
              document.getElementById(id).style.borderColor = '#FF0000';
              //document.getElementById(id).style.border='double dashed';
            }
        }  
      });      
    }

    if (!bValid) {
      console.log("Error");
      toastr.error("Invalid tariff entered");
    }
    else {      
      $( "#tariff_step3").submit();
    }
  }

clonedNationality = [];
function autofill(input) {

  if($.inArray( $(input).attr('nationality_id') + "_" + $(input).attr('column') + "_" + $(input).attr('slab_number'), clonedNationality) >= 0 ) {
    return;
  }  

  //console.log("onInput" + $(input).attr('nationality_id')  + " : " +  $(input).attr('room_id') );
  var rows = document.getElementsByName($(input).attr('column') + '_'+ $(input).attr('nationality_id') + '[]');  
  for (var j = ( parseInt($(input).attr('slab_number')) + 1); j < rows.length; j++) {
    rows[j].value = input.value;
  }
  
  clonedNationality[clonedNationality.length] = $(input).attr('nationality_id') + "_" + $(input).attr('column') + "_" + $(input).attr('slab_number');
}