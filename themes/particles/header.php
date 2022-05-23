<?php
    $theme_dir = get_template_directory_uri();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?= wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= get_the_title(); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Macondo&display=swap" rel="stylesheet">
</head>
<body <?= body_class();?>>
    <header>
        <div class="header-container">
            <div class="container">
                <a href="<?= site_url(); ?>" class="logo">
                    <img src="<?= $theme_dir.'/assets/m-icon-8.jpg'; ?>" alt="Logo da letra M">
                    <p>G.S.Malta</p>
                </a>

                <div class="menu-burger">
                    <span class="menu-part"></span>
                    <span class="menu-part"></span>
                    <span class="menu-part"></span>
                </div>

                <div class="wrapper-menu desktop">
					<?php 
						wp_nav_menu(
							array(
								'theme_location' => 'header-menu',
								'menu' => 'header-menu',
								'menu_class' => 'menu-desktop'
							)
						);
					?>
				</div>
            </div>
        </div>

        <div class="sidebar floating-bg">
            <?php 
                wp_nav_menu(
                    array(
                        'theme_location' => 'header-menu',
                        'menu' => 'header-menu',
                        'menu_class' => 'sidebar-mobile'
                    )
                );
            ?>
        </div>
        <span class="sidebar-background"></span>
    </header>
