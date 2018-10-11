[hr]
[center][color=red][size=16pt][b]ENHANCED PM SYSTEM v2.0[/b][/size][/color]
[url=http://www.simplemachines.org/community/index.php?action=profile;u=253913][b]By Dougiefresh[/b][/url] - [url=http://custom.simplemachines.org/mods/index.php?mod=3736]Link to Mod[/url]
[/center]
[hr]

[color=blue][b][size=12pt][u]Introduction[/u][/size][/b][/color]
This mod makes some changes to the PM system, seperating the PM conversations from the PM list.  It forces all users to conversation mode and makes users click on the message they want to view.  This keeps the forum from marking the latest message as read if you glance over the message list and click on something else and want to read a message that isn't the latest message received.

It adds an Outbox to the mix and seperates unread PMs from those that have been read.  It changes the "labels" into "folders" and removes the contents of the PM from the email notification.  It will allow users to edit PMs that they have sent out, as long as NO RECIPIENT has read it.  It also allows users to unsend and delete any unread PMs to other users.

This mod adds settings in the "Features and Options" page.  By default, this mod forces the view for personal messages to Conversation mode, but there is a new switch permitting the users to select a different mode other than Conversation mode.  The "PM Remove Inbox Label" and "Copy to Outbox" options are removed from the Personal Messages Settings page and set as default.

Version 2.0 sports an enhanced PM search system, which allows you to search Sent Items and the Outbox for PMs you specify.  It also allows the user to search them by username, just like the core functionality provided for the Inbox.  You are allowed to move PMs to folders for Inbox PMs, and allowed to delete PMs from all folders.

As a anti-spam measure, this mod can block new members from sending PMs during the 24-hour period after their account is activated.  Please note that members activated before this mod is installed will not be affected by this anti-spam measure, as the activation time is not recorded in the database prior to this mod.

[color=blue][b][size=12pt][u]Related Discussions[/u][/size][/b][/color]
o [DONE] [url=http://www.simplemachines.org/community/index.php?topic=420396.0]PM Separate List and View Request[/url]
o [DONE] [url=http://www.simplemachines.org/community/index.php?topic=427762.0]Always PM Conversation and Save a Copy[/url]
o [DONE] [url=http://www.simplemachines.org/community/index.php?topic=295253.0]Move Personal Messages[/url]
o [DONE] [url=http://www.simplemachines.org/community/index.php?topic=426840.0]Private Message Email Notification[/url]
o [DONE] [url=http://www.simplemachines.org/community/index.php?topic=128571.0]PM outbox/sent like phpbb[/url]
o [DONE] [url=http://www.simplemachines.org/community/index.php?topic=29990.0]Unsend PM[/url]
o [DONE] [url=http://www.simplemachines.org/community/index.php?topic=403840.0]Outbox with editable PMs[/url]
o [DONE] [url=http://www.simplemachines.org/community/index.php?topic=333117.0]Require Subject for PMs[/url]
o [DONE] [url=http://www.simplemachines.org/community/index.php?topic=460098.0]Block PM on the first day[/url]
o [DONE] [b]NEW FOR v2.0:[/b] [url=http://www.simplemachines.org/community/index.php?topic=498600.0]Search by Sent PMs[/url]
o [DONE] [b]NEW FOR v2.0:[/b] [url=http://www.simplemachines.org/community/index.php?topic=521508.msg3713864#msg3713864]Perform Actions on Searched-For PMs[/url]
o [DONE] [b]NEW FOR V2.0:[/b] [url=http://www.simplemachines.org/community/index.php?topic=478886.0]"User xx has blocked your personal message."[/url]

[color=blue][b][size=12pt][u]Permission Notices[/u][/size][/b][/color]
o [url=http://www.simplemachines.org/community/index.php?action=profile;u=261314]MLM[/url] gave permission to use his changes from [url=http://www.simplemachines.org/community/index.php?topic=427762.0]Always PM Conversation and Save a copy[/url] discussion.
o [url=http://www.simplemachines.org/community/index.php?action=profile;u=73143]floydpink[/url] gave permission to use his changes from [url=http://www.simplemachines.org/community/index.php?topic=295253.0]Move Personal Messages[/url] discussion.

[color=blue][b][size=12pt][u]Mail Icons[/u][/size][/b][/color]
o [url=http://code.google.com/p/ultimate-gnome/]Ultimate Gnome[/url] iconset (released under a GPL license) found at [url=http://www.iconfinder.com/search/?q=mail+iconset%3AUltimateGnome]IconFinder.com[/url]

[color=blue][b][size=12pt][u]Compatibility Notes[/u][/size][/b][/color]
This mod was tested on SMF 2.0.8, and may work on SMF 2.0 and later.  SMF 1.x is not and will not be supported!

The [url=http://custom.simplemachines.org/mods/index.php?mod=1974]PM Attachments[/url] mod should be installed first to avoid any conflict with this mod.

[color=blue][b][size=12pt][u]Questions and Answers[/u][/size][/b][/color]
[b]Q:[/b] Will this mod ever include PM attachment support?
[b]A:[/b] No, there is a [url=http://custom.simplemachines.org/mods/index.php?mod=1974]PM Attachments[/url] mod already developed that supports this.  The exception is editing PMs with attachments, which this mod will eventually support fully.

[b]Q:[/b] Why can't I edit the attachments on a PM?
[b]A:[/b] At present time, it is not possible to list and/or remove files attached to the PM while editing the PM.  Future versions of this mod will resolve this issue.

[b]Q:[/b] Why can't I move messages from the Outbox and/or Sent Items folder?
[b]A:[/b] At present time, it is not possible to mass-move messages from the Outbox or Sent Items folder.  Future versions of this mod may resolve this issue.

[color=blue][b][size=12pt][u]Translators[/u][/size][/b][/color]
o [url=http://www.simplemachines.org/community/index.php?action=profile;u=94593]FragaCampos[/url] - Portuguese_pt and Portuguese_pt-UTf8 translation

[hr]
[color=blue][b][size=12pt][u]Changelog[/u][/size][/b][/color]
[u][b]v2.0 - July 9th, 2014[/b][/u]
o If user is on recipient's PM ignore list, it is shown upon entering the reply page.
o Fix for duplicate buttons showing up for PMs in Core theme.
o Added ability to mass-delete of PMs in the Outbox.
o Added support for searching Sent Items and Outbox folders for PMs
o Search results now indicates whether the PMs found have been read or not.
o Copied PM display code for use by complete search result template...
o Added ability to mass-delete from all folders during searches.
o Added ability to mass-move messages from the Inbox and Folders during searches.
o Added ability to search Sent Items and Outbox PMs by username.
o Minor reorganization of template code to avoid duplication of necessary functions.

[u][b]v1.6 - July 2nd, 2014[/b][/u]
o Fix for incorrect Unsend/Edit buttons showing up for PMs.
o Fix for reporting message sent correctly, instead of message edited
o Fixes for "Disappearing & Lost PM problem", reported by [url=http://www.simplemachines.org/community/index.php?action=profile;u=94593]FragaCampos[/url]
o Mod Updating capability removed because of problems rising from using upgrades...

[u][b]v1.5 - June 30th, 2014[/b][/u] -> [url=http://www.simplemachines.org/community/index.php?topic=521508.msg3714554#msg3714554]Read here[/url]
[u][b]v1.4 - June 29th, 2014[/b][/u] -> [url=http://www.simplemachines.org/community/index.php?topic=521508.msg3714181#msg3714181]Read Here[/url]
[u][b]v1.3 - June 22nd, 2014[/b][/u] -> [url=http://www.simplemachines.org/community/index.php?topic=521508.msg3711546#msg3711546]Read Here[/url]
[u][b]v1.2 - June 8th, 2014[/b][/u] -> [url=http://www.simplemachines.org/community/index.php?topic=521508.msg3705451#msg3705451]Read Here[/url]
[u][b]v1.1 - June 1st, 2014[/b][/u] -> [url=http://www.simplemachines.org/community/index.php?topic=521508.msg3702626#msg3702626]Read Here[/url]
[u][b]v1.0 - April 9th, 2014[/b][/u] -> Initial Release of the Mod

[hr]
[url=http://creativecommons.org/licenses/by/3.0][img]http://i.creativecommons.org/l/by/3.0/80x15.png[/img][/url]
This work is licensed under a [url=http://creativecommons.org/licenses/by/3.0]Creative Commons Attribution 3.0 Unported License[/url]
