



<div class="login-container d-f fd-c p-40 w-50">


<form action="<?php echo e(url('/userPanel/addActivity/')); ?>" method="POST" id="login-form">
    <?php echo csrf_field(); ?>


    <label for="type">Rodzaj treningu: </label>
    <select name="act_type" id="act_type" class="input_button">
        <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option data-slug="<?php echo e($type->slug); ?>" value="<?php echo e($type->id); ?>">
                <?php echo e($type->name); ?>

            </option>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>

    <label for="trening_start">Data treningu: </label>
    <input class="input_button" type="date" id="act_start" name="act_start" value="<?php echo e($date); ?>" min="2023-01-01" max="2099-12-31">


    <input type="text" name="act_name" id="act_name" placeholder="Nazwa treningu" class="input_button" required>
    <input type="text" name="act_value" id="act_value" placeholder="Wartość treningu [km|punkty|długości]" class="input_button" required>
    <input type="text" name="act_time" id="act_time" placeholder="Czas [min]" class="input_button" required>

    <textarea rows="6" cols="51" name="desc" id="desc" placeholder="Krótki opis treningu | Jak się dzisiaj czujesz?" class="" ></textarea>




    <button type="submit" class="button_form">Dodaj trening</button>



</form>

</div>
<?php /**PATH C:\Users\48794\Desktop\pracaDyplomowa\app\resources\views/components/activityForm.blade.php ENDPATH**/ ?>