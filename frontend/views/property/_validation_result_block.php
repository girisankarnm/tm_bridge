<div class="validationBorder-error">
    <div style="margin-top: 5px;">
        <?php
            if($result == NULL)
            { ?>
                <img src="images/rectangle-tick.svg" class="chckbox-class">  <span class="Validation-Heading"><?= $name ?> : OK</span>
            <?php      }
            if($result != NULL)
            { ?>
                <img src="images/rectangle-cross.svg"  class="chckbox-class" > <span class="Validation-Heading-Error"><?= $name ?> : Failed</span>
                 <ul class="margin-left-right-spacing">
             <?php
                foreach($result as $attribute => $error)
                {
                    if(is_array($error))
                    {
                        foreach($error as $e)
                        {?>
                                <li class="small-text">    <img src="images/circle-exclamation-mark.svg"  class="chckbox-class" >   <?=$e?></li>
                      <?php }
                    }
                }
                ?>
        </ul>
                <?php
            }
           ?>
    </div>
</div>