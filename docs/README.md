Many users are used to get notified about all new contents by default, like in chat groups of popular messengers. Until they "mute" the chat/group/channel.
This module tries to achieve the same behavior for spaces in HumHub.

If this module is installed and activated, the notifications for new contents are switched on for every new space by default.
However, it does not change the settings for existing space memberships.

Since version 0.2 this also works for the space creator.

Users can switch off the notifications by navigating to the space, clicking on the gear symbol and selecting "Don't receive notifications for new content".

## Installation
**1. Create new folder:**  
Note: By default modules are located in `protected/modules`, however for modules that are not in the official Marketplace, a custom module loader path is now _recommended_ (not mandatory), see https://docs.humhub.org/docs/develop/environment#module-loader-path
- Create a new folder (e.g. "followallspacecontent") in `protected/modules` or your custom path

**2. Add the files:**  
- Manually: Download the zip file from GitHub, unpack it and upload the files to the folder (e.g. via FTP)  
- via Git: use `git clone https://github.com/felixhahnweilheim/modules-followallspacecontent.git` in the folder
   
**3. Enable the Module:**
in Administration > Modules
