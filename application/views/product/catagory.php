<select name="catagory" id="" class="form-control" placeholder="Enter Catagory" required>
<option>Select a category</option>

    <?php
        foreach ($catagory_data as $key ) {
            echo '<option value = "'.$key->id.'" >'.$key->catagory_name.'</option>';
        }
    ?>

</select>