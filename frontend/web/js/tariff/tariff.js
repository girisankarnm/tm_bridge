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