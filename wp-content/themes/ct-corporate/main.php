<?php
/**
 * The template for displaying archive pages.
 * 
 * Template Name: Main Page
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package CT Corporate
 */

get_header();
// Boxed or Fullwidth
$boxedornot = ct_corporate_boxedornot();

$sidebar_layout = get_theme_mod('layout_picker');

$sidebar_class = ct_corporate_check_sidebar();
if ($sidebar_class == 'pull-left'):
    $content_class = 'pull-right';
elseif ($sidebar_class == 'pull-right'):
    $content_class = 'pull-left';
elseif ($sidebar_class == 'no-sidebar'):
    $content_class = 'no-sidebar';
endif;
?>

<?php if ($boxedornot == 'fullwidth') { ?>
    <!-- Start the container. If full width layout is selected in the Customizer.-->
    <div class="home container full-width-container">
<?php } ?>


<?php if (!empty($sidebar_layout)){ ?>
    <div id="primary" class="content-area <?php echo esc_attr($content_class); ?>">
    <?php } else { ?>
    <div id="primary" class="content-area">
<?php } ?>
    <main id="main" class="site-main hello" role="main">

            <?php get_template_part('template-parts/content-home', 'none'); ?>

    </main>
    <!-- End the #main -->
    </div>
    <!-- End the #primary -->

<?php if ($sidebar_class != 'no-sidebar'): ?>


    <div id="secondary" class="widget-area clearfix <?php echo $sidebar_class; ?>" role="complementary">
        <?php if (is_active_sidebar('sidebar-1')) {
            dynamic_sidebar('sidebar-1');
        } ?>
    </div>

<?php endif; ?>
    <!-- End the Sidebar -->

<?php if ($boxedornot == 'fullwidth') { ?>
    </div>
    <!-- End the container -->
<?php } ?>

<?php get_footer(); ?>