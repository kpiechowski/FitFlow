

<div class="login-container d-f fd-c p-40 w-50">

    <?php if(session('loginError')): ?>

        <div class="error-msg d-f jc-c ai-c w-100"> <?php echo e(session('loginError')); ?> </div>

    <?php endif; ?>



<h2 class="login-form-title">Zaloguj się</h2>

<form action="<?php echo e(url('authenticate')); ?>" method="POST" id="login-form">
    <?php echo csrf_field(); ?>

    <input type="text" name="email" id="email" placeholder="email" class="input_button" required>
    <input type="password" name="haslo" id="haslo" placeholder="hasło" class="input_button" required>

    <div class="d-f jc-sb ai-c w-100">
        <div class="d-f ai-c jc-s"><input type="checkbox" name="remember" id=remember>&nbsp;Zapamiętaj mnie</div>
        <a href="/">Resetuj hasło</a>
    </div>

    <div class="w-100 mt-20 register_box d-f ai-c jc-c">
        Nie masz jeszcze konta?&nbsp;<a href="/register">Zarejestruj się</a>
    </div>

    <?php if(session('loginError')): ?>
        <div class="login-error-msg">
            <?php echo e(session('loginError')); ?>

        </div>
    <?php endif; ?>

    <button type="submit" class="button_form">Zaloguj</button>



</form>

</div>
<?php /**PATH C:\Users\48794\Desktop\pracaDyplomowa\app\resources\views/components/loginForm.blade.php ENDPATH**/ ?>