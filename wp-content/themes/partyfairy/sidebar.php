            <div class="col-lg-2">
              <div class="filter-section">
                <div class="close-filter d-block d-lg-none">X</div>
                <div class="filters-clear">
                  <div class="filters-clear--head"><span class="font-14"><strong>Active Filters</strong> </span><span class="-clearall font-12">Clear All</span></div>
                  <div><span class="font-14">Hello Kity</span></div>
                </div>
                <div class="pf-accordion">


                  <div class="card">
                    <div class="card-header">
                      <h5 class="mb-0">
                        <button class="btn btn-link font-13" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">Category</button>
                      </h5>
                    </div>
                    <div class="collapse" id="collapse1">
                      <div class="card-body">
                        <ul>


                         <?php 
                         $wcatTerms1 = get_terms('product_cat', array('hide_empty' => 0, 'parent' =>$term_id)); 
                         if($wcatTerms1) :
                          foreach($wcatTerms1 as $subkey => $wcatTerm1) :

                           ?>



                           <?php 
                           $wcatTerms2 = get_terms('product_cat', array('hide_empty' => 0, 'parent' =>$wcatTerm1->term_id)); 
                           foreach($wcatTerms2 as $subkey => $wcatTerm2) :

                             ?>
                             <label class="font-12 label-checkbox" for="category-<?php echo $subkey ?>"><?php echo $wcatTerm2->name; ?>
                             <input id="category-<?php echo $subkey ?>" name="category[]" type="checkbox" aria-label="filter checkbox" value="<?php echo $wcatTerm2->term_id?>" ><span class="checkmark"></span>
                           </label>
                         </li>

                       <?php endforeach ;  ?>
                     <?php endforeach ;  
                   endif;
                   ?>




                 </ul>
               </div>
             </div>
           </div>


           <div class="card">
            <div class="card-header">
              <h5 class="mb-0">
                <button class="btn btn-link font-13" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">Occasions</button>
              </h5>
            </div>
            <div class="collapse" id="collapse2">
              <div class="card-body">
                <ul>



                 <?php 
                 $wcatTerms1 = get_terms('product_cat', array('hide_empty' => 0, 'parent' =>46)); 
                 if($wcatTerms1) :
                  foreach($wcatTerms1 as $subkey => $wcatTerm1) :

                    ?>

                    <label class="font-12 label-checkbox" for="occasions<?php echo $subkey ?>"><?php echo $wcatTerm1->name; ?>
                    <input id="occasions-<?php echo $subkey ?>" name="occasions[]" type="checkbox" aria-label="filter checkbox" value="<?php echo $wcatTerm1->term_id?>" ><span class="checkmark"></span>
                  </label>
                </li>

              <?php endforeach ;  
            endif;
            ?>


          </ul>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <h5 class="mb-0">
          <button class="btn btn-link font-13" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">Colors</button>
        </h5>
      </div>
      <div class="collapse" id="collapse3">
        <div class="card-body">
          <ul class="color-list">
            <li><img src="assets/imgs/multicolor.jpg"></li>
            <li><img src="assets/imgs/multicolor.jpg"></li>
            <li><img src="assets/imgs/multicolor.jpg"></li>
            <li><img src="assets/imgs/multicolor.jpg"></li>
            <li><img src="assets/imgs/multicolor.jpg"></li>
            <li><img src="assets/imgs/multicolor.jpg"></li>
            <li><img src="assets/imgs/multicolor.jpg"></li>
            <li><img src="assets/imgs/multicolor.jpg"></li>
            <li><img src="assets/imgs/multicolor.jpg"></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <h5 class="mb-0">
          <button class="btn btn-link font-13" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">Price</button>
        </h5>
      </div>
      <div class="collapse" id="collapse4">
        <div class="card-body">
          <ul class="price-drag">
            <li>price</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="card">
     <?php if ( is_active_sidebar( 'partyfairy-side-bar' ) ) : ?>
      <?php dynamic_sidebar( 'partyfairy-side-bar' ); ?>
    <?php endif; ?>
  </div>

</div>
</div>
</div>


