<?php
// insert comments here
?>
<div id="page" class="container-16 clearfix">
    <div id="header" class="grid-16 box">
        <?php print render($page['header']); ?>
        header
    </div>
    <div id="main-content" class="<?php print ns('grid-16', $page['sidebar_first'], 4); ?>  <?php print ns('push-4', !$page['sidebar_first'], 4); ?>">
        <div id="masthead" class="alpha <?php print ns('grid-16', $page['sidebar_first'], 4); ?> box omega">
            <?php print render($page['masthead']); ?>
            masthead
        </div>
        <div id="main" class="alpha <?php print ns('grid-16', $page['sidebar_first'], 4); ?> box omega">
            <div id="content" class="region clearfix">
                <?php print render($page['content']); ?>
                content
            </div>
        </div>
    </div>

    <?php if ($page['sidebar_first']): ?>
        <div id="sidebar" class="grid-4 box pull-12">
            <?php print render($page['sidebar_first']); ?>
        </div>
    <?php endif; ?>

    <?php if ($page['footer']): ?>
        <div id="footer" class="grid-16 box">
            <?php print render($page['footer']); ?>
            footer
        </div>
    <?php endif; ?>

    <?php if ($page['footer_bottom']): ?>
        <div id="footer_bottom" class="grid-16 box">
            <?php print render($page['footer_bottom']); ?>
            footer bottom
        </div>
    <?php endif; ?>

</div>
