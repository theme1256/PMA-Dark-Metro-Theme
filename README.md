# PMA-Dark-Metro-Theme
A dark metro-like theme for PHPMyAdmin.

![Screenshot](https://raw.githubusercontent.com/theme1256/PMA-Dark-Metro-Theme/master/screen.png)

# Installation

## Linux (Debian/Ubuntu)

    # Download it to your server using this command
	wget https://github.com/theme1256/PMA-Dark-Metro-Theme/archive/master.zip
    
    # Make sure you have unzip, it can be installed with this command
    sudo apt install unzip

    # Unzip the downloaded folder into the PMA themes folder
    sudo unzip PMA-Dark-Metro-Theme.zip -d /usr/share/phpmyadmin/themes

Not just reload the PHPMyAdmin site (maybe a couple of times) and it should be in the list of available themes.

# Changing the color-scheme

It is possible to change the the accent color of the color-scheme.

There are, so far, two available color-schemes:

* White
* Green

To change the color-scheme, edit the `layout.inc.php` file, specifically the 10th line defining the `$GLOBALS['cfg']['Scheme']` variable. Set it to one of the available. If set wrongly, it will fallback to white.

Remember that the first letter has to be upper-case.

# Credits

This theme is based of of the ["metro"-theme](https://github.com/phpmyadmin/themes/tree/master/metro) from the official PMA-theme-repository.

## Generating the icons
[FA2PNG](http://fa2png.io/) was used to create the images from the [Font Awesome](http://fontawesome.io/) icon set.