<?php

class View extends Database{

  public function listGroup(){
    $records = $this->retrieveGroup()[0];
    $records2 = $this->retrieveGroup()[1];
    foreach ($records as $data) {
        ?>
        <li class="dropdown">
          <a id="category-button<?php echo $data['product_group_id'] ?>" class="dropdown-toggle" data-toggle="dropdown" href="#<?php echo $data['product_group_id'] ?>"><?php echo $data['product_group'] ?></a>
          <ul class="dropdown-menu" id="category-list<?php echo $data['product_group_id'] ?>">
            <?php
                foreach ($records2 as $data2) {
                  if ($data['product_group_id'] == $data2['product_group_id']) {
                  ?>
                    <li> <a href="#"><?php echo $data2['product_category']; ?></a> </li>
                  <?php
                  }
                }
             ?>
          </ul>
        </li>
        <?php
    }
  }

}


 ?>
