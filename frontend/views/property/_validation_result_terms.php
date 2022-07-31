<div class="validationBorder-error">
    <div id="h-validation">
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
 </div>
            <div  style="margin-top: 5px;" >
                <?php if ( ($property->country_id && $property->legal_status_id) != 1) {  ?>
                   <span style="margin-right: 12px; vertical-align:text-top" > Please fill all other forms before T & C   </span>
                <?php } else { ?>                    
                    <a href="<?= \yii\helpers\Url::to(['/property/'.$action, 'id' => $property->id]) ?>" > <img  src="images/blue-edit.svg"  style="margin-right: 2px; vertical-align:text-top" > <span style="color: blue">   </span></a>
                <?php }  ?>
            </div>

        <?php } ?>

    </div>
</div>
</div>