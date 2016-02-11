
<!-- MEDICATION LIST PAGE "/medicationentryform"-->

<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<script type="text/javascript" src="/sites/all/themes/boilerplate/js/controller.js"></script>
<div id="page">

  <header class="header" id="header" role="banner">




    <?php print render($page['header']); ?>

  </header>

  <div id="main">

    <div id="content" class="column" role="main">
      <?php print render($page['highlighted']); ?>
      <?php print $breadcrumb; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['']); ?>

<div id="medentry-container">
  <h1>Welcome to Emory Healthcare</h1>
  <h3>Edit your patient's Medication</h3>

    MEDS GO HERE MySQL

    <h3>Vitals:</h3>
    <div id='phys-vitals'>
      <div>
        DOB:
      </div>
      <div>
        Age:
      </div>
      <div>
        Height:
      </div>
      <div>
        Weight:
      </div>
      <div>
        HR:
      </div>
      <div>
      BP- Systolic:</br>
          Diastolic:
      </div>
      <div>    
      Blood Glucose:
      </div>
      <div>
        Oxymetry:
      </div>
      <div>
        Current Medication:
      </div>
      <div>
        Primary Physician:
      </div>
      <div>
        Last Check-up:
      </div>
    </div>

</div>

      <?php print $feed_icons; ?>
    </div>

    <div id="navigation">

      <?php if ($main_menu): ?>
        <nav id="main-menu" role="navigation" tabindex="-1">
          <?php
          // This code snippet is hard to modify. We recommend turning off the
          // "Main menu" on your sub-theme's settings form, deleting this PHP
          // code block, and, instead, using the "Menu block" module.
          // @see https://drupal.org/project/menu_block
          print theme('links__system_main_menu', array(
            'links' => $main_menu,
            'attributes' => array(
              'class' => array('links', 'inline', 'clearfix'),
            ),
            'heading' => array(
              'text' => t('Main menu'),
              'level' => 'h2',
              'class' => array('element-invisible'),
            ),
          )); ?>
        </nav>
      <?php endif; ?>

      <?php print render($page['navigation']); ?>

    </div>


  </div>

<!--     <div id="benefits-left">
       <?php
         $block = block_load('block', '1');
         $block_loaded = _block_get_renderable_array(_block_render_blocks(array($block)));
         print drupal_render($block_loaded);        
       ?>
     </div> -->

  <?php print render($page['footer']); ?>

</div>

<?php print render($page['bottom']); ?>

<?php print $page['hello']; ?>
