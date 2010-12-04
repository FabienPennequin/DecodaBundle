Installation
============

1. Add the Decoda PHP to your project as git submodule:

        $ git submodule add https://github.com/milesj/php-decoda.git src/vendor/decoda

2. Add this bundle to your project as git submodule:

        $ git submodule add https://github.com/FabienPennequin/DecodaBundle.git src/Bundle/DecodaBundle

3. Add this bundle to your application's kernel:

        // application/ApplicationKernel.php
        public function registerBundles()
        {
            return array(
                // ...
                new Bundle\DecodaBundle\DecodaBundle(),
                // ...
            );
        }

4. Configure the `decoda` helper in your config:

        # application/config/config.yml
        decoda.config:
            file:   %kernel.root_dir%/../src/vendor/decoda/decoda.php

        # application/config/config.xml
        <decoda:config
            file="%kernel.root_dir%/../src/vendor/decoda/decoda.php"
        />

Usage
-----

        <!-- inside a php template -->
        <?php echo $view['decoda']->parse('[b]test[/b]') ?>

        <!-- inside a twig template -->
        {{ _view.decoda.parse('[b]test[/b]')|raw }}
