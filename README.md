This is [Magmi][sfproject], the Magento Mass Importer, by [dweeves][dweeves]

----

_This is an unofficial SVN mirror, I am NOT the author of this software.  
 To get the unmodified svn mirror trunk, switch to the [**trunk**][ghtrunk] branch._

Magmi is a standalone, external application, that directly interfaces with your Magento Database.  
If used incorrectly it *will* munch your data. Work with Database backups.
From the authors' wiki:

    USE THIS PROJECT AT YOUR OWN RISK.

    DO NOT APPLY IT ON PRODUCTION UNTIL THOUROUGHLY TESTED ON A SAMPLE SITE.
    IF YOU DON'T UNDERSTAND WHAT YOU DO WITH MAGMI YOU BETTER ASK FOR A PROFESSIONAL'S HELP.

For documentation and examples, read the wiki at
[http://sourceforge.net/apps/mediawiki/magmi/][wiki]

----

**The upstream Subversion repository has changed.**  
Sadly it doesn't match the old one exactly, histories have diverged.
There was no easy way to fix this, without giving people a headache with forced resets,
while keeping a faithful svn history.  
Between killing (and re-adding) this mirror and losing changes from modified forks
or putting the new history ontop of the old one where trees diverged (and forcing hard resets on people), 
I decided to go with adding the new svn tree into the old repository in parallel.
And I used the opportunity to rewrite commiter information in the new history
to correctly attribute authors on Github where possible.

To summarize the changes:  
+ The master branch was killed for now and [**oldmaster**][oldmaster] points to the old svn trunk tree.  
+ The old subversion trunk, but based onto the new tree (with rewritten author information) is at [**oldsvn**][oldsvn].  
+ __The new subversion trunk is named [**trunk**][ghtrunk]__.  
  I couldn't do the same fix for the 0.8 branch, the new 0.8 has completely different history.  
+ Point your old 0.8 branch to refs/heads/ **old-0.8** and rename it locally if you checked it out.

I am truly sorry for the mess,  
-- nyov

----

Software is provided under the X11 (MIT) license.

[sfproject]: http://sourceforge.net/projects/magmi/
[dweeves]:   https://github.com/dweeves
[wiki]:      http://sourceforge.net/apps/mediawiki/magmi/

[ghtrunk]:   https://github.com/nyov/magmi/tree/trunk
[oldsvn]:    https://github.com/nyov/magmi/tree/oldsvn
[oldmaster]: https://github.com/nyov/magmi/tree/oldmaster
