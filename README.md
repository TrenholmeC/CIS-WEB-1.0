# How to Contribute
1. Make sure you have git and gh installed and you have authenticated with the github CLI:
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
A simple way to run the website localy is to use the Webstorm IDE from Jetbrains, pressing "play" in any html file will automatically spin up a temporary http server.

Running a simple HTTP server is also super simple using the python package!
Once you change your working directory to the directory of the git project run this command:
``python -m http.server 8000`` (may be ``python3`` instead of ``python`` on some machines).
Now you can access the website on ``http://localhost:8000``

Running a http server is curcial for the website to be able to load dependencies such as js, css and font files.

# Image Standards
The following are some standards to keep images consistent, maintainable and at a reasonable size.
## Web Badges
All web bages should be in 88x31 pixel resolution (preferably in .gif format but not required).

Not all web badges found online are in 88x31 pixel resolution, make sure to check before uploading.

Here are some websites that show of a collection of compliant web badges:
* [buttoncollection on neocities.org](https://buttoncollection.neocities.org/)
* [88x31.nl](https://88x31.nl/index2.html)
## Profile Pictures
All profile pictures should be 1100x1350 pixels and under 100KB.

You can use image editing software such as GIMP to crop and reduce the quality of images to allow them to be compliant.