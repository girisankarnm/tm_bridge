<div class="validationBorder-error">
    <div class="flex-row" style="margin-top: 5px;">
        <?php
            if($result == NULL)
            { ?>
                <img src="images/rectangle-tick.svg" class="chckbox-class">  <span class="Validation-Heading"><?= $name ?>: OK</span>
            <?php      }
            if($result != NULL)
            { ?>
                <img src="images/rectangle-cross.svg"  class="chckbox-class" > <span class="Validation-Heading-Error"><?= $name ?>: Pending</span>
                 <ul class="margin-left-right-spacing-2">
             <?php
                foreach($result as $attribute => $error)
                {
                    if(is_array($error))
                    {
                        foreach($error as $e)
                        {?>
                                <li class="small-text"><img src="images/circle-exclamation-mark.svg"  class="chckbox-class" ><?=$e?></li>
                      <?php }
                    }
                }
                ?>
        </ul>
                <?php
            }
           ?>



            <div  class="d-flex flex-row-reverse ">
                <a href="<?= \yii\helpers\Url::to(['/property/'.$action, 'id' => $id]) ?>" > <img  src="images/blue-edit.svg" class="margin-12px"></a>
            </div>

    </div>
</div>