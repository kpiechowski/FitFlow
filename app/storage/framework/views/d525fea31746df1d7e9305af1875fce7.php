



<div class="login-container d-f fd-c p-40 w-50">

    <?php if(session('loginError')): ?>

    <div class="error-msg d-f jc-c ai-c w-100"> <?php echo e(session('loginError')); ?> </div>

<?php endif; ?>

<h2 class="login-form-title">Zarejestruj się</h2>

<form action="<?php echo e(url('registerUser')); ?>" method="POST" id="login-form">
    <?php echo csrf_field(); ?>

    <input type="text" name="name" id="name" placeholder="Name" class="input_button" required>
    <input type="text" name="email" id="email" placeholder="Email" class="input_button" required>
    <input type="password" name="haslo" id="haslo" placeholder="Password" class="input_button" required>
    <input type="password" name="haslo2" id="haslo2" placeholder="Repeat password" class="input_button" required>

    

    <div class="w-100 register_box d-f ai-c jc-c">
        Masz już konto?&nbsp;<a href="/login">Zaloguj się</a>
    </div>



    <button type="submit" class="button_form">Zarejestruj</button>



</form>

</div>
<?php /**PATH C:\Users\48794\Desktop\pracaDyplomowa\app\resources\views/components/RegisterForm.blade.php ENDPATH**/ ?>