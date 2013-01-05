<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'FFJ');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription; ?> |
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('style');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>

<div id="templatemo_body_wrapper">
	<div id="templatemo_wrapper">''
    	
        <div id="templatemo_header">
            <div id="site_title"><h1><?php echo $this->Html->link('O Evento', '/evento'); ?></h1></div>
            <div id="templatemo_menu">
                <ul>
                  <li><?php echo $this->Html->link('O Evento', '/evento'); ?></li>
                  <li><?php echo $this->Html->link('Como Chegar', '/comochegar'); ?></li>
                </ul>
            </div> <!-- end of templatemo_menu -->
        </div><!-- end of header -->
        
        <div id="templatemo_middle">
            <div id="mid_left">
                <div id="mid_title">10 de Janeiro em São Paulo</div>
                <p>O maior evento de software livre está de volta...</p>
				<p>Neste evento estarão presentes os melhores profissionais de software livre do Brasil, discutindo novas tendências e peculiaridades do mercado de trabalho.</p>
            </div>
            <?php echo $this->Html->image('templatemo_icon_01.png');?>
        </div> <!-- end of middle -->

        <div id="templatemo_main">

                <?php echo $this->Session->flash(); ?>

                <?php echo $this->fetch('content'); ?>
        </div>
		
       </div>
</div>
<!--Footer-->
<?php echo $this->element('credito', array('titulo'=>'Desenvolvido:', 'nome'=>'Fernando Nogueira')); ?>
</body>
</html>