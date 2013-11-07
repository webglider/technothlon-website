<?php
if(!defined('xDEC')) exit;
class Error_404 extends Pages
{

    function startOutput($var)
    {
        parent::__head__($var);
        parent::__title__(' | Page not found');
        require_once(CONTENT.'home/head.php');
        parent::__body__($var);
        require_once(CONTENT.'home/header.php');
        ?>
        <div class="center-text container">
            <h3><span class="dark">404.</span> That's an error.</h3>
            <p>The requested URL <span class="dark"><?php echo $_SERVER['REQUEST_URI']; ?></span> was not found on this server.<br>
                That’s all we know.</p>
        </div>
        <?php
        parent::end_body();
    }
}

set(PAGE_OBJECT, new Error_404());