<aside class="sidebar">
            <section class="widget widget-category widget-category_mod-a wow bounceInLeft" data-wow-duration="2s">
              <h3 class="widget-title ui-title-block ui-title-block_small"><i class="icon fa fa-bars"></i>Sister concern</h3>
              <div class="block_content">
                <ul class="list-categories list list-links">
                <?php foreach($category_list->result() as $catl):?>
                    <li class="list-categories__item"> 
                    <a class="list-sidebar__link" href="<?php echo base_url('products/gallery/'.$catl->caegory_title);?>"> 
                    <span class="list-categories__name"><?php echo $catl->cat_name;?></span></a> </li>
                <?php endforeach;?>
                </ul>
              </div>
            </section>
     
          </aside>