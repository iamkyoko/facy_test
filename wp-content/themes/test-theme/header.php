<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentynineteen' ); ?></a>

		<header id="masthead" class="<?php echo is_singular() && twentynineteen_can_show_post_thumbnail() ? 'site-header featured-image' : 'site-header'; ?>">

			<div class="site-branding-container">
			<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
			</div>

			<ul class="inner">
				<li class="switch"><span>MAN</span><span>LADY</span></li>
				<li class="logo">
					<h1><svg data-v-3c88ca78="" viewBox="0 0 80 22" xmlns="http://www.w3.org/2000/svg"><g fill-rule="evenodd"><path d="M79.911.554l-7.37 14.153v6.646h-5.33v-6.497L59.693.554h5.331l4.836 8.931 4.72-8.93zM53.169 5.583c-.913-.504-1.816-.756-2.71-.756a5.23 5.23 0 0 0-2.81.786 5.535 5.535 0 0 0-1.996 2.166c-.485.92-.728 1.944-.728 3.071 0 1.128.243 2.151.728 3.071a5.533 5.533 0 0 0 1.995 2.166 5.222 5.222 0 0 0 2.812.786c.834 0 1.709-.217 2.622-.653a8.299 8.299 0 0 0 2.447-1.78l3.117 3.412a12.46 12.46 0 0 1-3.947 2.834c-1.526.702-3.035 1.053-4.53 1.053-2.02 0-3.846-.474-5.477-1.424a10.299 10.299 0 0 1-3.845-3.887c-.932-1.642-1.398-3.48-1.398-5.519 0-2.017.475-3.837 1.427-5.459a10.281 10.281 0 0 1 3.918-3.827c1.66-.93 3.52-1.395 5.579-1.395 1.514 0 3.01.322 4.486.964 1.475.644 2.728 1.519 3.758 2.627L55.53 7.616a7.666 7.666 0 0 0-2.36-2.033M22.64 17.674h8.827l-1.572-4.154-2.797-7.418-4.457 11.572zm10.226 3.68l-1.4-3.68h-8.825l-1.429 3.68h-5.476l8.769-20.8h5.476l8.566 20.8h-5.681zM0 .554v20.8h5.33v-7.507h9.148V9.515H5.33v-4.63h9.905l.029-4.33z"></path></g></svg></h1>
					<h3 class="lead">「つながり」でファッションを面白くするFACY(フェイシー)</h3></li>
				<li class="btns">
					<span>ログイン・新規会員登録</span>
					<span>FACYで出店する</span></li>
			</ul>
			<nav><ul>
				<li>ISSUE</li>
				<li>ITEM</li>
				<li>RANKING</li>
				<li>MAGAZINE</li>
				<li>🔍</li>
			</ul></nav>

			<?php if ( is_singular() && twentynineteen_can_show_post_thumbnail() ) : ?>
				<div class="site-featured-image">
					<?php
						twentynineteen_post_thumbnail();
						the_post();
						$discussion = ! is_page() && twentynineteen_can_show_post_thumbnail() ? twentynineteen_get_discussion_data() : null;

						$classes = 'entry-header';
						if ( ! empty( $discussion ) && absint( $discussion->responses ) > 0 ) {
							$classes = 'entry-header has-discussion';
						}
					?>
					<div class="<?php echo $classes; ?>">
						<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
					</div><!-- .entry-header -->
					<?php rewind_posts(); ?>
				</div>
			<?php endif; ?>
		</header><!-- #masthead -->

	<div id="content" class="site-content">
