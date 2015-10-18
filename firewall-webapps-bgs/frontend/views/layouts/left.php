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

                <!--<a href="#"><i class="fa fa-circle text-success"></i> Online</a>-->
            </div>
        </div>

        <!-- search form -->
        
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Menu Navigation', 'options' => ['class' => 'header'], 'visible' => !\Yii::$app->user->isGuest],
                    [
                        'label' => 'Task', 
                        'icon' => 'fa fa-tasks', 
                        'url' => ['/task/index'],
                        'visible' => !\Yii::$app->user->isGuest
                        ],
                        
                            [
                                'label' => 'Monitoring', 
                                'icon' => 'fa fa-desktop', 
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Crawling', 'icon' => 'fa fa-hand-grab-o', 'url' => ['/site/crawling']],
                                    ['label' => 'Cleaning', 'icon' => 'fa fa-filter', 'url' => ['/site/cleaning']],
                                    ['label' => 'Classification', 'icon' => 'fa fa-clone', 'url' => ['/site/classification']],
                                    [
                                        'label' => 'Analysis', 
                                        'icon' => 'fa fa-line-chart', 
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Sentiment', 'icon' => 'fa fa-star-o', 'url' => '#'],
                                            ['label' => 'Socmed', 'icon' => 'fa fa-weixin', 'url' => '#'],
                                            ['label' => 'Tag CLoud', 'icon' => 'fa fa-tags', 'url' => '#'],
                                            ['label' => 'Map', 'icon' => 'fa fa-map-o', 'url' => '#'],
                                        ],
                                    ],
                                ],
                            ],
                        
                        
                    
                    [
                        'label' => 'Result', 
                        'icon' => 'fa fa-book', 
                        'url' => '#',
                        'items' => [
                            ['label' => 'Classification', 'icon' => 'fa fa-clone', 'url' => ['/site/resultklasifikasi']],
                            [
                                'label' => 'Analysis', 
                                'icon' => 'fa fa-line-chart', 
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Sentiment', 'icon' => 'fa  fa-star-o', 'url' => ['/site/resultsentiment']],
                                    [
                                        'label' => 'Socmed', 
                                        'icon' => 'fa fa-weixin', 
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Facebook', 'icon' => 'fa fa-facebook-square', 'url' => ['/site/resultnetworkfb']],
                                            ['label' => 'Twitter', 'icon' => 'fa fa-twitter', 'url' => ['/site/resultnetworktwitter']], 
                                        ]
                                    ],
                                    ['label' => 'Tag CLoud', 'icon' => 'fa fa-tags', 'url' => ['/site/resulttagcloud']],
                                    ['label' => 'Map', 'icon' => 'fa fa-map-o', 'url' => ['/site/resultmap']],
                                ]
                            ],
                        ],
                        'visible' => !\Yii::$app->user->isGuest
                    ],
                    [
                        'label' => 'Report', 
                        'icon' => 'fa fa-calendar-check-o', 
                        'url' => '#',
                        'items' => [
                            ['label' => 'Website', 'icon' => 'fa fa-firefox', 'url' => ['/site/reportweb']],
                            ['label' => 'Facebook', 'icon' => 'fa fa-facebook-square', 'url' => '#'],
                            ['label' => 'Twitter', 'icon' => 'fa fa-twitter', 'url' => '#'],
                        ],
                        'visible' => !\Yii::$app->user->isGuest
                    ],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                ],
            ]
        ) ?>

    </section>

</aside>
