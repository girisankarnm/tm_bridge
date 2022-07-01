const MAXIMUM_NUMBER_OF_RATE_SLAB = 15;  
  $(document).ready(function() { 
  });
  
  function insertSlabRow(id)
  {
    var rowCount = document.getElementById('tariff_slab_table_'+id).rows.length;
    if ( rowCount > MAXIMUM_NUMBER_OF_RATE_SLAB ) {        
        return;
    }

    //$("#tariff_slab_table_"+id).append('<tr><td>Slab '+ (rowCount -1) +'</td><td><input type="text" name="room_rate_'+ id +'[]" class="form-control form-control-sm a col-md-12" /></td><td><input type="text" name="adult_with_extra_bed_'+ id +'[]" class="form-control form-control-sm a col-md-12" /></td><td><input type="text" name="child_with_extra_bed_'+ id +'[]" class="form-control form-control-sm a col-md-12" /></td><td><input type="text" name="child_sharing_bed_'+ id +'[]" class="form-control form-control-sm a col-md-12" /></td><td><input type="text" name="single_occupancy_'+ id +'[]" class="form-control form-control-sm a col-md-12" /></td> <td><button id="remr" onclick="deleteSlabRow(this,'+id+'); return true;" style="border-radius: 50%"><i class="fa fa-minus"></i></button></td></tr>');
    $("#tariff_slab_table_"+id).append('<tr>' + 
    '<td>Slab '+ (rowCount -1) +'</td>' +
    '<td>' +
    '<input type="text" name="room_rate_'+ id + '[]" class="inputTextroomtable" required/>' +
    '</td>' +
    '<td>' +
    '<input type="text" name="adult_with_extra_bed_'+ id + '[]" class="inputTextroomtable" required />' +
    '</td>' +
    '<td>' +
    '<input type="text" name="child_with_extra_bed_'+ id + '[]" class="inputTextroomtable" required />' +
    '</td>' +
    '<td>' +
    '<input type="text" name="child_sharing_bed_'+ id + '[]" class="inputTextroomtable" required />' +
    '</td>' +
    '<td>' +
    '<input type="text" name="single_occupancy_'+ id + '[]" class="inputTextroomtable" required />' +
    '</td>' +
    '<td><button id="remr" onclick="deleteSlabRow(this,'+id+'); return true;" style="border-radius: 50%"><i class="fa fa-minus"></i></button></td>' +
    '</tr>');

  }

  function deleteSlabRow(row, id)
  {
      var i = row.parentNode.parentNode.rowIndex;
      document.getElementById('tariff_slab_table_'+id).deleteRow(i);
  }