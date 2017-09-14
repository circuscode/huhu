<?php 

/**
 * The footer
 *
 * @package huhu
 * @since 0.1
 */
 
?>

<?php 

if(!is_single() and !is_page() ) { ?>
    <nav id="archive-nav" class="bottom-navigation">
    <?php 
    
    $wp_page_navi=wp_pagenavi(); 
    if($wp_page_navi) {
        echo $wp_page_navi;
    } else {
        echo '<div class="no_wp_pagenavi"></div>';
    }
    
    ?>
    </nav>
<?php }?>

<footer id="colophon" class="site-footer">

<!-- Null -->

</footer>

<?php wp_footer(); ?>

</div> <!-- Main Containter @ header.php -->

</body>
</html>