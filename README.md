# How to Contribute
1. Make sure you have git and gh installed and you have authenticated with the github CLI:
https://cli.github.com/manual/gh_auth
2. Clone the repo while in the directory you want to save the project: ``git clone https://github.com/TrenholmeC/CIS-WEB-1.0.git``
3. A new directory named ``CIS-WEB-1.0`` should now be in the current working directory
4. Start modifying, deleting and adding files!
5. After finishing all modifications you can do a push to a new branch by following these commands:
    1. ``git add .`` stages all changes and prepares them to be pushed
    2. ``git checkout -b <branch>`` create and switch to a new branch called ``<branch>``, make the branch name specific to what you have changed or fixed!
    3. ``git commit -m "<msg>"`` adds a descriptive message, here you can write in delete what you have added and how you may have fixed certian bugs.
    4. ``git push -u origin <branch>`` push the changes to the branch created in the second command, afterwards it can be merged to the main branch and deployed on the web server.
6. Step 5 is a good way to create your first branch but won't work well if you want to update the same branch before it has been merged, try researching the different git commands to become a git master!
7. Open a pull request and let people know there is stuff to be merged!