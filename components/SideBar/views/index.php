<?php

use app\components\SideBar\View;
use app\models\system\Menu;

/**
 * @var Menu[] $menu
 * @var View $this
 */
?>

<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <?php foreach ($menu as $item): ?>
            <?php if (empty($item->menus)): ?>
                <?php echo $this->createLink($item); ?>
            <?php else: ?>
                <?php echo $this->createList($item); ?>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</aside>