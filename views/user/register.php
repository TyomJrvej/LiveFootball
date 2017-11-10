<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right">
                    <div class="signup-form"><!--sign up form-->
                        <h2>Регистрация на сайте</h2>
                        <?php if ($result): ?>
                            <p style="color: green;">Вы зарегистрированы!</p>
                            <a href="/user/login"><button class="btn btn-default">Вход</button></a>
                        <?php else: ?>
                            <?php if (isset($errors) && is_array($errors)): ?>
                                <ul>
                                    <?php foreach ($errors as $error): ?>
                                        <li style="color: red;"> - <?php echo $error; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        <form action="#" method="post">
                            <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>"/>
                            <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/>
                            <input type="password" name="password" placeholder="Пароль" value=""/>
                            <input type="password" name="confirm_password" placeholder="Повторите пароль" value=""/>
                            <br>
                            <input type="submit" name="submit" class="btn btn-default" value="Регистрация" />
                        </form>
                    </div><!--/sign up form-->

                <?php endif; ?>
                <br/>
                <br/>
            </div>
        </div>
    </div>
</section>
</div>
<?php include ROOT . '/views/layouts/footer.php'; ?>
