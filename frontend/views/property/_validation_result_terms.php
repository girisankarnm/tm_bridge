<div class="validationBorder-error">
    <div style="margin-top: 5px;">
    <?php
        if($result != NULL)
        { ?>
            <img src="images/rectangle-cross.svg"  class="chckbox-class" > <span class="Validation-Heading-Error"><?= $name ?> : Validation Success</span>
            <ul class="margin-left-right-spacing">
                <li class="small-text">    <img src="images/circle-exclamation-mark.svg"  class="chckbox-class" > Terms and condition not accepted</li>
            </ul>
        <?php }
        else
        {?>
            <img src="images/rectangle-tick.svg" class="chckbox-class">  <span class="Validation-Heading"><?= $name ?> : Validation Success</span>
        <?php      }
        ?>
    </div>
</div>