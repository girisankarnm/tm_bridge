<div class="row mt-1 ml-1 border border-2">            
    <div class="col-md-6">
        <p>
        <span style="background-color: #e2eb11d1;"> 
         Property - <?= $name ?>: <?= ($result == NULL) ? "OK" : "Failed"  ?></span></br> 
           <?php           
            if($result != NULL)
            {                
                foreach($result as $attribute => $error)
                {
                    if(is_array($error))
                    {
                        foreach($error as $e) {
                            echo $e.'<br/>';
                        }
                    }
                    else
                        echo $e.'<br/>';;
                }
            }
            else
            {
                //echo $name. " validation success";
            }
           ?>
        </p>
    </div>
</div>