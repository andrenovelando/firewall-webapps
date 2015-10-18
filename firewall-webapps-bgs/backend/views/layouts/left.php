<?php
use common\models\LoginForm;
use common\models\User;
?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/avatar5.png" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>
                    <?php 
                        $mode = new LoginForm();
                        $mode->username = \Yii::$app->user->identity->username;
                        $user = new User();
                        if($user = $mode->getUser()){
                            echo $user->full_name;
                        }
                    ?>
                </p>
                <p>
                    <?php 
                        $mode = new LoginForm();
                        $mode->username = \Yii::$app->user->identity->username;
                        $user = new User();
                        if($user = $mode->getUser()){
                            echo '( ' . $user->role . ' )';
                        }
                    ?>
                </p>

<!--                <i class="fa fa-circle text-success"></i> Online</a>-->
            </div>
        </div>

        <!-- search form --
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Menu Navigation', 'options' => ['class' => 'header'],'visible' => !\Yii::$app->user->isGuest],
                    ['label' => 'User Management', 'icon' => 'fa fa-users', 'url' => ['/user/index'],'visible' => !\Yii::$app->user->isGuest],
                    ['label' => 'Task Management', 'icon' => 'fa fa-tasks', 'url' => ['/task/index'],'visible' => !\Yii::$app->user->isGuest],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                   /* [
                        'label' => 'Other',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'fa fa-circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'fa fa-circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],*/
                ],
            ]
        ) ?>

    </section>

</aside>
