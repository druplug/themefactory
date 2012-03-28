<?php
// insert comments here
?>
<div id="page" class="container-16 clearfix">
    <div id="header" class="grid-16 box">
        <?php print render($page['header']); ?>
        header
    </div>
    <div id="main-content" class="grid-12">
        <div id="masthead" class="alpha grid-12 box omega">
            <?php print render($page['masthead']); ?>
            masthead
        </div>
        <div id="main" class="alpha grid-12 box omega">
            <div id="content" class="region clearfix">
                <?php print render($page['content']); ?>
                content
            </div>
        </div>
    </div>

    <div id="sidebar" class="grid-4 box">
        <?php print render($page['sidebar']); ?>
        sidebar
    </div>

    <div id="footer" class="grid-16 box">
        <?php print render($page['footer']); ?>
        footer
    </div>
    <div id="footer_bottom" class="grid-16 box">
        <?php print render($page['footer_bottom']); ?>
        footer bottom
    </div>
</div>
