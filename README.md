# ManiaLiveWrapper

**This plugin bridge is created by ManiacTwister - The full copyright to everything in plugins/ManiaLiveWrapper/ remains to the original authors of the ManiaLive controller.**

With this plugin you can run any ManiaLive plugin under XAseco.
This is especially needed, if you wan't to run a MatchMaking server with XAseco. This plugin shouldn't increase the needed ressources too much, but when, then send me a line and i will look into this issue.

**Note: This doesn't work with XAseco at the moment, but hopefully it will in the future. Meanwhile you can use this plugin with MPAseco.**

## Installation

**Step 1**

Edit the file manialive.xml to your needs. This file contains comments which describe the corresponding xml elements

**Step 2**

Edit the file ```plugins.xml``` and add ```<plugin>plugin.records_eyepiece.php</plugin>``` before ```</plugins>```

**Step 3**

Copy the file ```plugin.manialivewrapper.php``` and the directory ```ManiaLiveWrapper/``` "in your plugins/``` Folder

**Step 4 (optional)**

Install your ManiaLive plugins as usual in the directory ```plugins/ManiaLiveWrapper/libraries/ManiaLivePlugins/``` and add them to the ManiaLive config file located in ```plugins/ManiaLiveWrapper/config.ini```

**Step 5**

Restart XAseco
