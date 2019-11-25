# Lab 10 Instructions

First, go to https://docs.google.com/spreadsheets/d/10EdnWl6_GhZ3jV2MIkTBomtF6LfxBQEQjiamykZEHiI/edit?usp=sharing and find the hash for your group.

Now, complete index.php to crack the hash and find the password!

There is an array available called `$wordlist` that contains over 5000 passwords. The password corresponding to your hash will be in that array.

Hint: You can get the md5 hash of a string by using the built in `$md5` function: https://www.php.net/manual/en/function.md5.php

eg `md5('homer')` returns dfa8327f5bfa4c672a04f9b38e348a70

There is no function that reverses this! To find the password you'll need to try all the possibilities.

Hint: Your password will be a Simpsons character.

Once you find your password insert it at the bottom of this file.

PASSWORD: sherriandterri