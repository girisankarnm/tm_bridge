<div class="validationBorder-error">
    <div style="margin-top: 5px;">
    <?php
        if($result != NULL)
        { ?>
            <img src="images/rectangle-cross.svg"  class="chckbox-class" > <span class="Validation-Heading-Error"><?= $name ?>: Pending</span>
            <ul class="margin-left-right-spacing-2">
                <li class="small-text"><img src="images/circle-exclamation-mark.svg"  class="chckbox-class" > 
                    Terms and conditions not accepted. 
                </li>
            </ul>
        <?php }
        else
        {?>
            <img src="images/rectangle-tick.svg" class="chckbox-class">  <span class="Validation-Heading"><?= $name ?>: OK</span>
        <?php      }
        ?>

        <?php if($result != NULL) { ?>
        <div id="edit-flex">
            <div> </div>
            <div>
                <?php if ( ($property->country_id && $property->legal_status_id) != 1) {  ?>
                    Please fill all other forms before T & C                    
                <?php } else { ?>                    
                    <a href="<?= \yii\helpers\Url::to(['/property/'.$action, 'id' => $property->id]) ?>" > <img  src="images/blue-edit.svg"  style="margin-right: 2px; vertical-align:text-top" > <span style="color: blue"> edit  <?= $name ?>  </span></a>
                <?php }  ?>
            </div>
        </div>
        <?php } ?>

    </div>
</div>