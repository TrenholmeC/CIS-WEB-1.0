# CIS Program Website
This project is currently a work in progress but feel free to give ideas and feedback!

This website is open to all to anyone in the CIS Program to contribute code, content and ideas to!

There are pages dedicated to the topics covered in the program as well as classes for each year and individual student profiles!

# Dependencies

## Required
* ``php8`` (PHP, version 8 or greater)
* ``ezyang/htmlpurifier`` (PHP library)

## Recommended
* ``apache2`` (HTTP Server)
    * ``libapache2-mod-php``
* ``composer`` (Managing PHP Libraries)

# How to Contribute Code

0. Request to join the repository
1. Make sure you have ``git`` and ``gh`` installed and you have authenticated with the github CLI:
https://cli.github.com/manual/gh_auth
2. Clone the repo while in the directory you want to save the project: ``git clone https://github.com/TrenholmeC/CIS-WEB-1.0.git``
3. A new directory named ``CIS-WEB-1.0`` should now be in the current working directory.
4. Start modifying, deleting and adding files!
5. Test the website in a local enviornment!! (See the next section in this read me)
6. After finishing all modifications and extensive testing in a local environment you can do a push to a new branch by following these commands:
    1. ``git add .`` stages all changes and prepares them to be pushed
    2. ``git checkout -b <branch>`` create and switch to a new branch called ``<branch>``, make the branch name specific to what you have changed or fixed!
    3. ``git commit -m "<msg>"`` adds a descriptive message, here you can write in delete what you have added and how you may have fixed certian bugs.
    4. ``git push -u origin <branch>`` push the changes to the branch created in the second command.
7. Step 5 is a good way to create your first branch but won't work well if you want to update the same branch before it has been merged, try researching the different git commands to become a git master!
8. Open a pull request and let people know there are changes to be merged!
9. If enough contributers vote on your pull request it will be able to be merged to the main branch.

# How to Run Locally

Enter the ``public`` folder for the project in a terminal and run ``php -S localhost:8000``.

The website should now be accessible at ``localhost:8000`` on your local machine.

# Requirements for a Production Enviornment

Ensure the document root is set to the ``public`` folder of the project and anything else is not visible.

For extra security ensure the ``private`` folder is not stored in ``/var/www/``

# Image Standards

The following are some standards to keep images consistent, maintainable and at a reasonable size.

All images should use lowercase file extensions and ``.jpg`` for the JPEG format.

## Profile Pictures

* 600x750 pixels
* PNG, JPEG or WEBP
* Under 50KB
* You can use image editing software such as GIMP to crop and reduce the quality of images to allow them to be compliant.

## Web Badges

* 88x31 pixels
* GIF format only
* Under 5KB

Not all web badges found online are in 88x31 pixel resolution, make sure to check before uploading.

Here are some websites that show of a collection of compliant web badges:
* [buttoncollection on neocities.org](https://buttoncollection.neocities.org/)
* [88x31.nl](https://88x31.nl/index2.html)

## Forum Signatures

* 350x19 pixels
* JPEG format only
* Under 10KB