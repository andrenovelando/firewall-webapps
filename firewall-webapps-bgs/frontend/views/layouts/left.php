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
                                'url' => ['/site/monitoring'],
                                
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
                                                [
                                                    'label' => 'Faceook', 
                                                    'icon' => 'fa fa-facebook-square', 
                                                    'url' => '#',
                                                    'items' => [
                                                         ['label' => 'ALL Contents', 'icon' => 'fa fa-circle-o', 'url' => ['/site/resultnetworkfb']],
                                                         ['label' => 'Radikalisme', 'icon' => 'fa fa-circle-o', 'url' => ['/site/resultnetworkfb']],
                                                         ['label' => 'Terorisme', 'icon' => 'fa fa-circle-o', 'url' => ['/site/resultnetworkfb']],
                                                         ['label' => 'Judi Online', 'icon' => 'fa fa-circle-o', 'url' => ['/site/resultnetworkfb']],
                                                         ['label' => 'Narkoba', 'icon' => 'fa fa-circle-o', 'url' => ['/site/resultnetworkfb']],
                                                         ['label' => 'Separatisme', 'icon' => 'fa fa-circle-o', 'url' => ['/site/resultnetworkfb']],
                                                         ['label' => 'Pornografi', 'icon' => 'fa fa-circle-o', 'url' => ['/site/resultnetworkfb']],
                                                         ['label' => 'Prostitusi', 'icon' => 'fa fa-circle-o', 'url' => ['/site/resultnetworkfb']],
                                                        
                                                     ]

                                                ],
                                                [
                                                    'label' => 'Twitter', 
                                                    'icon' => 'fa fa-twitter', 
                                                    'url' => '#',
                                                    'items' => [

                                                     ['label' => 'ALL Contents', 'icon' => 'fa fa-circle-o', 'url' => ['/site/resultnetworktwitter']],
                                                     ['label' => 'Radikalisme', 'icon' => 'fa fa-circle-o', 'url' => ['/site/resultnetworktwitter']],
                                                     ['label' => 'Terorisme', 'icon' => 'fa fa-circle-o', 'url' => ['/site/resultnetworktwitter']],
                                                     ['label' => 'Judi Online', 'icon' => 'fa fa-circle-o', 'url' => ['/site/resultnetworktwitter']],
                                                     ['label' => 'Narkoba', 'icon' => 'fa fa-circle-o', 'url' => ['/site/resultnetworktwitter']],
                                                     ['label' => 'Separatisme', 'icon' => 'fa fa-circle-o', 'url' => ['/site/resultnetworktwitter']],
                                                     ['label' => 'Pornografi', 'icon' => 'fa fa-circle-o', 'url' => ['/site/resultnetworktwitter']],
                                                     ['label' => 'Prostitusi', 'icon' => 'fa fa-circle-o', 'url' => ['/site/resultnetworktwitter']], 


                                                    ]
                                                ],
                                           
                                        ]
                                    ],
                                    [
                                        'label' => 'Tag Cloud', 
                                        'icon' => 'fa fa-tags', 
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'ALL', 'icon' => 'fa fa-circle-o', 'url' => ['/site/resulttagcloud']],
                                            ['label' => 'Radikalisme', 'icon' => 'fa fa-circle-o', 'url' => ['/site/resulttagcloud']],
                                            ['label' => 'Terorisme', 'icon' => 'fa fa-circle-o', 'url' => ['/site/resulttagcloud']],
                                            ['label' => 'Judi Online', 'icon' => 'fa fa-circle-o', 'url' => ['/site/resulttagcloud']],
                                            ['label' => 'Narkoba', 'icon' => 'fa fa-circle-o', 'url' => ['/site/resulttagcloud']],
                                            ['label' => 'Separatisme', 'icon' => 'fa fa-circle-o', 'url' => ['/site/resulttagcloud']],
                                            ['label' => 'Pornografi', 'icon' => 'fa fa-circle-o', 'url' => ['/site/resulttagcloud']],
                                            ['label' => 'Prostitusi', 'icon' => 'fa fa-circle-o', 'url' => ['/site/resulttagcloud']],

                                        ]


                                    ],

                                    
                                    [
                                        'label' => 'MAP', 
                                        'icon' => 'fa fa-map', 
                                        'url' => '#',
                                        'items' => [

                                        ['label' => 'ALL Konten', 'icon' => 'fa fa-circle-o', 'url' => ['/site/resultmapall']],
                                        ['label' => 'Radikalisme', 'icon' => 'fa fa-circle-o', 'url' => ['/site/resultmapradikalisme']],
                                        ['label' => 'Terorisme', 'icon' => 'fa fa-circle-o', 'url' => ['/site/resultmapterorisme']],
                                        ['label' => 'Judi Online', 'icon' => 'fa fa-circle-o', 'url' => ['/site/resultmapjudionline']],
                                        ['label' => 'Narkoba', 'icon' => 'fa fa-circle-o', 'url' => ['/site/resultmapnarkoba']],
                                        ['label' => 'Separatisme', 'icon' => 'fa fa-circle-o', 'url' => ['/site/resultmapseparatisme']],
                                        ['label' => 'Pornografi', 'icon' => 'fa fa-circle-o', 'url' => ['/site/resultmappornografi']],
                                        ['label' => 'Prostitusi', 'icon' => 'fa fa-circle-o', 'url' => ['/site/resultmapprostitusi']],
                                        ]
                                    ],
                                    
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
                            ['label' => 'Website', 'icon' => 'fa fa-firefox', 'url' => ['/web/index']],
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
