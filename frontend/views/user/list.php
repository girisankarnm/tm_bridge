<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\ActiveForm;
$this->title = 'User List';
rmrevin\yii\fontawesome\AssetBundle::register($this);
frontend\assets\CommonAsset::register($this);
?>
<!-- load the third party plugin assets (jquery-confirm) -->
<link href="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css" rel="stylesheet" type="text/css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script>
    $(function () {
        $('.t').tooltip()
    });
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


        $.confirm({
            title: 'Confirmation!',
            content: ''+message+' '+userName,
            type: 'red',
            buttons: {
                ok: {
                    btnClass: 'btn-primary text-white',
                    keys: ['enter'],
                    action: function(){
                        $('#action_id').val(action);
                        $('#user_id').val(id);
                        $('#user-action').submit();
                    }
                },
                cancel: function(){
                    $.alert('Action aborted!');
                }
            }
        });


        // $('#message_text').html(message);
        // $('#action_id').val(action);
        // $('#user_id').val(id);
        // $("#actionUserName").html(userName);
        // $('#deleteModal').modal('show');
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


<div class="$content">
    <div class="container-fluid" style="background-color: white">
        <div class="card-title">
           User
        </div>
        <div class="card-body" style="border: .12rem solid #dedede; border-radius: 6px;">
            <div class="row">
                <div class="col-md-12">
                    <?= Html::a('<button id="add_user" type="submit" class="btn button-primary btn-nationality text-white  float-right">Add New User</button>', ['/user/add']) ?>
                </div>
            </div><br>
            <?php  foreach ($users as $user) { ?>
                <div class="shadow p-3 mb-5 bg-white rounded">
                    <div class="card-body" style="display: flex; flex-direction: column;">
                        <div style="font-weight: 600"> <img src="images/user-rounded.svg" alt="user-rounded.svg" style="height: 30px">
                            <?php echo $user->first_name . " " . $user->last_name?> <?= ($user->id == Yii::$app->user->getId() ) ? '<span style="color: white; padding: 2px; background-color: #04AA6D;font-size: 10px "> It\'s Me</span>' : "" ?>
                        </div>
                        <div style="display: flex;flex-direction: row; ">
                            <div style="display: flex;flex-direction: row;flex: 2;justify-content: space-around;">
                                <div style="margin-top: auto; margin-left: 20px"><img src="images/mail.svg" alt="mail.svg">
                                    <?php echo $user->email ?>
                                </div>
                                <div style="margin-top: auto"><img src="images/phone.svg" alt="phone.svg" style="height: 20px">
                                    <?php echo $user->phone ?>
                                </div>
                                <div style="margin-top: auto; margin-right: 30px">
                                    <?php if ($user->user_type == 1){ echo  'Hotelier';}
                                    else  { echo  'Operator'; }
                                    ?>
                                </div>
                            </div>
                            <div style="display: flex;flex-direction: row;flex: 1;justify-content: space-around;"></div>
                            <div style="display: flex;flex-direction: row;flex: 1;justify-content: space-between;">
                                <div style="color: green; font-weight: 600; margin-top: auto; padding-right: 30px; "><img src="images/tick-mark.svg" alt="tick-mark.svg">
                                    <?php if ($user->status == 10){ echo  'Active';}
                                    elseif ($user->status == 9) { echo  'Inactive'; }
                                    elseif ($user->status == 0) { echo  'Deleted'; }
                                    elseif ($user->status == 8) { echo  'Disabled'; }
                                    else  { echo  'NA'; }
                                    ?>
                                </div>
                                <?= Html::a('<img src="images/edit-1-icon.svg"  alt="edit-1-icon.svg" style="height: 25px;"></i>', Url::toRoute(['/user/add', 'id' => $user->id ]),["title"=>"Edit",'class'=>'t']) ?>

                                <?php if ($user->status == 10) : ?>
                                <?= Html::a('<img  src="images/testIcons/disable-user.png"  alt="building-blue.svg" style="height: 25px;cursor: pointer"></i>', null,  ['onclick' => 'return showConfirmMessage(1, "'.$user->first_name.'",'.$user->id.')',"title"=>"Disable User",'class'=>'t']) ?>
                                <?php elseif($user->status == 8) : ?>
                                    <?= Html::a('<img src="images/testIcons/enable-user.png"  alt="building-blue.svg" style="height: 25px;cursor: pointer"></i>', null,  ['onclick' => 'return showConfirmMessage(1, "'.$user->first_name.'",'.$user->id.')',"title"=>"Enable User",'class'=>'t']) ?>
                                <?php endif; ?>
                                <?= Html::a('<img src="images/reset_password.svg"  alt="reset_password.svg" style="height: 25px;cursor: pointer"></i>', null, ['onclick' => 'return showConfirmMessage(2, "'.$user->first_name.'",'.$user->id.')',"title"=>"Reset Password",'class'=>'t']) ?>
                                <?= Html::a('<img src="images/delete-1-icon.svg" alt="delete-1-icon.svg"  style="height: 25px;cursor: pointer" disabled></i>', null, ['onclick' => 'return showConfirmMessage(3,"'.$user->first_name.'",'.$user->id.')',"title"=>"Delete",'class'=>'t']) ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>





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
      <?php $form = ActiveForm::begin(['method' => 'post', 'id'=>"user-action", 'action' => ['user/manage']] ) ?>
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
