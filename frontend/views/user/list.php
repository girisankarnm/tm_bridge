<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\ActiveForm;
$this->title = 'User List';
rmrevin\yii\fontawesome\AssetBundle::register($this);
frontend\assets\CommonAsset::register($this);
?>
<style>
    #users th,#users td {
        border: 1px solid #9cacad;
        text-align: left;
    }
    #users {
        color: #636363;
        /*background: #2a3f54;*/
        font-family: "Helvetica Neue",Roboto,Arial,"Droid Sans",sans-serif;
        font-size: 13px;
    }
    a:hover {
        background-color: #1dd5ff;
    }
    i:hover {
        background-color: #1dd5ff;
    }
    table td {
        text-align: left !important;
        vertical-align: middle !important;
    }
</style>
<script>
    function showConfirmMessage(action, userName, id){

        var message = "";
        switch(action) {
        case 1:
            message = "Are you sure to change status of";
            break;
        case 2:
            message = "Are you sure to reset password for";
            break;
        case 3:
            message = "Are you sure to delete";
            break;
        default:
            return;
        }
    
        $('#message_text').html(message);        
        $('#action_id').val(action);
        $('#user_id').val(id);
        $("#actionUserName").html(userName);        
        $('#deleteModal').modal('show');
        return false;
    }

    function dismissConfirmMessage() {
        //$("#deleteGroupName").html("");
        $('#deleteModal').modal('hide');
    }
    $(function () {
        $('.t').tooltip()
    });
</script>

<?php if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <?php echo Yii::$app->session->getFlash('success') ?>
    </div>
<?php endif; ?>
<?php if (Yii::$app->session->hasFlash('error')): ?>
    <div class="alert alert-danger alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <?php echo Yii::$app->session->getFlash('error') ?>
    </div>
<?php endif; ?>


<div class="row">
    <div class="col-md-12">
        <?= Html::a('<button id="add_user" type="submit" class="btn btn-sm btn-save  float-right">Add New User</button>', ['/user/add']) ?>        
    </div>
</div><br>
<table id="users" class="table table-md responsive">
    <thead>
    <th>Name</th>
    <th>Email</th>
    <th>Phone Number</th>
    <th>Status</th>
    <th>Actions</th>
    </thead>

    <?php  foreach ($users as $user) { ?>
        <tr>
            <td><?php echo $user->first_name . " " . $user->last_name?> <?= ($user->id == Yii::$app->user->getId() ) ? '<span style="color: white; padding: 2px; background-color: #04AA6D;font-size: 10px "> It\'s Me</span>' : "" ?> </td>
            <td><?php echo $user->email ?> </td>
            <td><?php echo $user->phone ?> </td>
            <td><?php if ($user->status == 10){ echo  'Active';}
                elseif ($user->status == 9) { echo  'Inactive'; }
                elseif ($user->status == 0) { echo  'Deleted'; } 
                elseif ($user->status == 8) { echo  'Disabled'; }
                else  { echo  'NA'; }
                ?> </td>
            <td>
                <?= Html::a('<i class="fa fa-edit text-success p-1 t" title="Edit"></i>', Url::toRoute(['/user/add', 'id' => $user->id ])) ?>
                <?= Html::a('<i class="fa fa-money text-info p-1 t" title="Enable/Disable"></i>', null,  ['onclick' => 'return showConfirmMessage(1, "'.$user->first_name.'",'.$user->id.')']) ?>
                <?= Html::a('<i class="fa fa-building text-warning p-1 t" title="Reset Password"></i>', null, ['onclick' => 'return showConfirmMessage(2, "'.$user->first_name.'",'.$user->id.')']) ?>
                <?= Html::a('<i class="fa fa-trash text-danger p-1 t" title="Delete" disabled></i>', null, ['onclick' => 'return showConfirmMessage(3,"'.$user->first_name.'",'.$user->id.')']) ?>
            </td>
        </tr>
    <?php } ?>
</table>

<!-- Modal -->
<div class="modal fade" id="deleteModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Confirm?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php $form = ActiveForm::begin(['method' => 'post', 'action' => ['user/manage']] ) ?>
      <input type="hidden" id="user_id" name="user_id" value="0" >
      <input type="hidden" id="action_id" name="action_id" value="0" >
      <div class="modal-body">
      <span id="message_text"></span> <strong><span id="actionUserName"></span></strong> ?
        <br/><br/>
            <p class="text-red">PS: This operation can't be undone!</p>
      </div>
      <div class="modal-footer">
        <button type="button" onclick="dismissConfirmMessage()" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="sumbit" class="btn btn-primary">Understood</button>
      </div>
      <?php ActiveForm::end(); ?>
    </div>
  </div>
</div>