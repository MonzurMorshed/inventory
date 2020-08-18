<form method="post" action="<?php echo base_url();?>product/product/entry_product" enctype='multipart/form-data'>
                      <div class="form-group">
                          <label>Product Name</label>
                          <input name="name" id="" class="form-control" placeholder="Enter Name" required/>
                      </div>
                      <div class="form-group">
                          <label>Category</label>
                          <select name="catagory" id="" class="form-control" placeholder="Enter Catagory" required>
                            <option>Select a category</option>

                                <?php
                                    foreach ($catagory_data as $key ) {
                                        echo '<option value = "'.$key->id.'" >'.$key->catagory_name.'</option>';
                                    }
                                ?>

                            </select>
                      </div>
                      <div class="form-group">
                          <label>Product Image</label>
                          <input name="image" type="file"/>
                      </div>
                      <div class="form-group">
                          <label>Buying Price</label>
                          <input name="b_price" id="b_price" class="form-control" placeholder="Enter Buying Price" required/>
                      </div>
                      <div class="form-group">
                          <label>Selling Price</label>
                          <input name="s_price" id="s_price" class="form-control" placeholder="Enter Selling Price" required/>
                      </div>
                      <div class="form-group">
                          <label>Stock Information</label>
                          <select name="stock" class="form-control" required>
                            <option id="" class="form-control" value="1"/>In Stock</option>
                            <option id="" class="form-control" value="0"/>Out of Stock</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>State of the product</label>
                          <select name="damaged_product" class="form-control" required>
                            <option id="" class="form-control" value="1"/>Active</option>
                            <option id="" class="form-control" value="0"/>Damage</option>
                          </select>
                          
                      </div>
                      <div class="form-group">
                          <label></label>
                          <input name="datepicker" id="datepicker1" class="form-control" placeholder="Enter date of entry" required/>
                      </div>
                      <div class="form-group">
                          <button name="sbmt" type="submit" class="btn btn-invert"  >Submit</button>
                      </div>
                  </form>