<div class="validationBorder-error">
    <div style="margin-top: 5px;">
    <?php
        if($result != NULL)
        { ?>
            <img src="images/rectangle-cross.svg"  class="chckbox-class" > <span class="Validation-Heading-Error"><?= $name ?>: Failed</span>
            <ul class="margin-left-right-spacing-2">
                <li class="small-text">    <img src="images/circle-exclamation-mark.svg"  class="chckbox-class" > Terms and condition not accepted</li>
            </ul>
        <?php }
        else
        {?>
            <img src="images/rectangle-tick.svg" class="chckbox-class">  <span class="Validation-Heading"><?= $name ?>: OK</span>
        <?php      }
        ?>

        <div id="edit-flex">
            <div> </div>
            <div>
                <a href="<?= \yii\helpers\Url::to(['/slab/home', 'id' =>  1]) ?>" > <img  src="images/blue-edit.svg"  style="margin-right: 2px; vertical-align:text-top" > <span style="color: blue"> edit  <?= $name ?>  </span></a>
            </div>
        </div>

    </div>
</div>