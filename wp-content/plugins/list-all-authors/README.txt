=== List-all-authors ===
Contributors: Andrea Heinrich
Donate link: http://www.song-line.de/2008/05/25/plugin-list-all-authors/
Tags: Tags: author list, list, sidebar, admin, users
Requires at least: 1.5
Tested up to: 2.5
Stable tag: 1.0


== Change Log ==
1.0 initial release




== Description ==

Bei Wordpress gibt es das Tag "wp-list-authors", mit dem sich eine Liste aller Autoren aufrufen lässt. Dieses Liste beinhaltet jedoch nur Autoren, die bereits einen Beitrag verfasst haben. 

Wer in einem Multi-User-Blog eine Liste aller User erstellen möchte, also auch solcher, die noch keinen Beitrag verfasst haben, kann dies mit dem Plugin "List all authors".

== Installation ==

1. Plugin runterladen, extrahieren und in den Ordner wp-content/plugins hochladen.
2. Plugin aktivieren.
3. Die Liste von Autoren an der gewünschten Stelle (Sidebar oder besondere Seite) mit folgender Funktion aufrufen: 

<?php if (function_exists('wp_all_authors')) { ?><?php wp_all_authors('show_fullname=0&optioncount=1&hide_empty=0&exclude_admin=0'); ?><?php } ?>

Diese Funktion beinhaltet folgende Parameter:

optioncount=1   Anzahl der Artikel wird angezeigt. Falls dies nicht gewünscht ist, statt der 1 eine 0 setzen.

hide_empty=0  Auch User ohne Beiträge werden angezeigt. Falls nur User mit Beiträgen angezeigt werden sollen, hier eine 1 setzen.

exclude_admin=0  Der Administrator wird in der Liste angezeigt. Falls dies nicht gewünscht ist, statt der 0 eine 1 setzen.

Es können alle Parameter der Wordpress-Funktion <a href="http://codex.wordpress.org/Template_Tags/wp_list_authors"target="_blank">wp-list-authors</a> genutzt werden.

Fertig!
Das Plugin steht kostenfrei zur Verfügung. Falls es Dir gefällt, schenk mir einen Kommentar.



For the english-speaking friends:

I got it! My first wordpress-plugin runs!

== Description ==

Wordpress has the tag "wp-list-authors" to get a list of all authors. This list includes only those authors who already published a post. 

Anyone who wants to have a list of users with AND without posts, for exmple in multi-user-blogs, can have it now with my plugin.

== Installation ==

1. Download Plugin, unzip it and upload it to the to the root of your Wordpress "plugins" folder (should be file wp-content/plugins).
2. Acivate it on the admin panel. 
3. You get the list of authors wherever you want (sidebar or separate page) by using the function wp_all_authors.

<?php if (function_exists('wp_all_authors')) { ?><?php wp_all_authors('show_fullname=0&optioncount=1&hide_empty=0&exclude_admin=0'); ?><?php } ?>

This function includes:

optioncount=1   The number of posts of each author is shown. If you don't want this, write 0 instead of 1. 

hide_empty=0  Users without posts are shown. If you only want to show users with posts, use an 1 instead of 0:

exclude_admin=0  The administrator of the blog is shown. If you don't want this, use the 1 instead of 0.

You can use all parameters of wordpress-function <a href="http://codex.wordpress.org/Template_Tags/wp_list_authors"target="_blank">wp-list-authors</a>.

That's it!
The plugin is for free use. If you like it, don't give money, but a comment ;-)

Enjoy!