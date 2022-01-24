<div class="row">
    <div class="col">
    <?php
        echo 'Using For Loop <br />';
        for($i = 1; $i <= 10; $i++)
        {
            echo "$i <br />";
        }
    
    ?>
    </div>
    <div class="col">
    <?php
         echo 'Using While Loop <br />';
         $i = 11;
         while($i <= 20)
         {
             echo "$i <br />";
             $i++;
         }
    ?>
    </div>
</div>