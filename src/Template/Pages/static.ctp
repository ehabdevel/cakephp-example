<?php

/**
 * @var \App\View\AppView $this
 * 
 *  This a new Static page.
 * Created for the project "Registration & Access levels Challenge".
 */
//use Cake\Cache\Cache;
//use Cake\Core\Configure;

$this->layout = false;
?>
<!DOCTYPE html>
<html>
    <head>
    <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
        <?php echo 'Static page'; ?>
        </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('home.css') ?>
        <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
    </head>
    <body class="home">

        <header class="row">
            <div class="header-title">
                <h1>Welcome! this is a Static page restricted to logged in users only, redirect the user if not logged in.</h1>
            </div>
        </header>

        <div class="row">
            <div class="columns large-12">
                <div class="mijmenu">
                    <ul>
                        <li class="challenge"><b>Registration & Access levels Challenge Menu:-></b></li>
                        <li class="challenge"><?= $this->Html->link(__('Home'), ['controller' => 'Pages', 'action' => 'display', 'huis']) ?></li>
                        <li class="challenge"><?= $this->Html->link(__('Static page'), ['controller' => 'Pages', 'action' => 'static']) ?></li>
                        <li class="challenge"><?= $this->Html->link(__('Users page'), ['controller' => 'users', 'action' => 'index']) ?></li>
                    <?php if($loggedIn) : ?>
                        <li class="challenge"><?= $this->Html->link(__('Logout'), ['controller' => 'users', 'action' => 'logout']) ?></li>
                    <?php else : ?>
                        <li class="challenge"><?= $this->Html->link(__('Login'), ['controller' => 'users', 'action' => 'login']) ?></li>
                        <li class="challenge"><?= $this->Html->link(__('Register'), ['controller' => 'users', 'action' => 'add']) ?></li>
                    <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="columns large-12 text-center">
                <h3 class="more">Welcome! this is a Static page restricted to logged in users only, redirect the user if not logged in</h3>
                <p>
                    Welcome! this is a Static page restricted to logged in users only, redirect the user if not logged in.<br />
                    Welcome! this is a Static page restricted to logged in users only, redirect the user if not logged in.<br />
                    Welcome! this is a Static page restricted to logged in users only, redirect the user if not logged in.<br />
                    Welcome! this is a Static page restricted to logged in users only, redirect the user if not logged in.<br />
                    Welcome! this is a Static page restricted to logged in users only, redirect the user if not logged in.<br />
                    Welcome! this is a Static page restricted to logged in users only, redirect the user if not logged in.<br />
                    Welcome! this is a Static page restricted to logged in users only, redirect the user if not logged in.<br />
                    Welcome! this is a Static page restricted to logged in users only, redirect the user if not logged in.<br />
                    Welcome! this is a Static page restricted to logged in users only, redirect the user if not logged in.
                </p>
            </div>
            <hr/>
        </div>
    </body>
</html>
