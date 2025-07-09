<?php if (isset($errors['email'])) :?>
                <p class="text-red-500 text-xs mt-2"><?= $errors['email']?></p>
                <?php endif;?>


                <?php if (isset($errors['password'])) :?>
                <p class="text-red-500 text-xs mt-2"><?= $errors['password']?></p>
                <?php endif;?>