
<!-- SIGN UP PAGE "/signup"-->


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

<div id="signup-container">
  <h1>Welcome to Emory Healthcare</h1>
  <h3>Please Sign-Up for a portal account</h3>

  ID#: <input class="signup-input" type="text" name="username" id="username" ng-model="username" value="" placeholder="Patient ID"> 
  </br>
  First Name: <input class="signup-input" type="text" name="first-name" id="firstName" ng-model="firstName" value="" placeholder="First Name">
  </br>
  Last Name: <input class="signup-input" type="text" name="last-name" id="lastName" ng-model="lastName" value="" placeholder="Last Name">
  </br>
  Date of Birth: <input class="signup-input" type="date" name="bday" id="bday" ng-model="bday" value="">
  </br>
  SSN#: <input class="signup-input" type="text" name="ssn" id="ssn" ng-model="ssn" value="" placeholder="SSN#">
  </br>
  Street Address: <input class="signup-input" type="text" name="address" id="address" ng-model="address" value="" placeholder="Street Address">
  </br>
  City: <input class="signup-input" type="text" name="city" id="city" ng-model="city" value="" placeholder="City">
  </br>
  State:<select>
    <option value="AL">Alabama</option>
    <option value="AK">Alaska</option>
    <option value="AZ">Arizona</option>
    <option value="AR">Arkansas</option>
    <option value="CA">California</option>
    <option value="CO">Colorado</option>
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="DC">District Of Columbia</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="HI">Hawaii</option>
    <option value="ID">Idaho</option>
    <option value="IL">Illinois</option>
    <option value="IN">Indiana</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NV">Nevada</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NM">New Mexico</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="ND">North Dakota</option>
    <option value="OH">Ohio</option>
    <option value="OK">Oklahoma</option>
    <option value="OR">Oregon</option>
    <option value="PA">Pennsylvania</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="SD">South Dakota</option>
    <option value="TN">Tennessee</option>
    <option value="TX">Texas</option>
    <option value="UT">Utah</option>
    <option value="VT">Vermont</option>
    <option value="VA">Virginia</option>
    <option value="WA">Washington</option>
    <option value="WV">West Virginia</option>
    <option value="WI">Wisconsin</option>
    <option value="WY">Wyoming</option>
  </select>  
  </br>
  Zip Code: <input class="signup-input" type="text" name="zip" id="zip" ng-model="zip" value="" placeholder="Zip Code">   
  </br>
  E-mail: <input class="signup-input" type="email" name="email" id="email" ng-model="email" value="" placeholder="E-mail Address">
  </br>
  Phone Number: <input class="signup-input" type="tel" name="phone" id="phoneNumber" ng-model="phone" value="" placeholder="Phone Number">
  </br>
  <button type="button" ng-click="submit()">Submit</button>



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
