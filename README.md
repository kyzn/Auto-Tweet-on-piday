Auto Tweet on #piday
===============

Of all the things I need to do, I'm uploading a small script that would tweet "3/14/15 9:26:53 #piday" on, well, 3/14/15 9:26:53 (because of geeky reasons)

#Instructions
1. Create a Twitter application at [Twitter Apps](http://apps.twitter.com). Go to permissions, and acquire permission to write. Name, description is not important at all.
2. Copy Twitter tokens to pie.php.
3. Copy pi.php, pie.php, and Abraham's twitteroauth.php & OAuth.php to the same folder (eg. ~/piday)
4. Add the following to your cron jobs
```
# piday autotweet 
26 9 14 3 * sleep 53; php ~/piday/pi.php >/dev/null 2>&1
```
This would send tweet exacty on the intended second (of your computer time, of course). Although second is not visible on Twitter Web client, it is (hopefully) stored somewhere.

5. After Pi Day is over, you can destroy the app, clear your crontab, and go get some pie.
