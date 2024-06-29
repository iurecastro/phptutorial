<form method="post">
    <div>Please Chosse your preferred method of contact:</div>
    
    <?php foreach($contacts as $key => $value) : ?>        
    <div>
        <input type="radio" name="contact" id="contact_<?php echo $key;?>" value="<?php echo $key;?>"/>
        <label for="contact_<?php echo $key;?>"><?php echo $value;?></label>
    </div>
    <?php endforeach ?>

    <div>
        <small class="error"><?php echo $errors['contact'] ?? '' ?></small>
    </div>

    <div>
        <button type="submit">Submit</buton>
    </div>


</form>