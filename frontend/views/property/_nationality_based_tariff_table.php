<?php foreach ($property->tariffNationalityGroupNames as $group) { ?>
    <tr>
        <td>
            <div class="form-control ">
                <?= $group->name ?>
            </div>
        </td>
        <td>
            <div class="form-control pointer-none">
                <?php foreach ($group->tariffNationalityTables as $tablecountry) {
                    echo $tablecountry->country->name. ", ";
                }
                ?>
            </div>

        </td>
        <td>
            <div class="d-flex action-items form-group align-items-center">
                <div class="edit-icon item mr-2">
                    <img src="<?= Yii::$app->request->baseUrl . 'images/edit-icon.svg' ?>"
                         alt="" class="img-fluid" onclick="showNationalityEditForm(<?= $group->id ?>, '<?= $group->name?>')">
                </div>
                <div class="delete-icon item">
                    <img src="<?= Yii::$app->request->baseUrl . 'images/delete-icon.svg' ?>"
                         alt="" class="img-fluid" onclick="showNationalityDeleteConfirm(<?= $group->id ?>, '<?= $group->name?>',)">
                </div>
            </div>
        </td>
    </tr>
<?php } ?>
