#User story - recipes and article editor

##Subject: Admin

As an admin, I want to be able to input the recipes and get a reliable output. I also want to be able to easily input articles and descriptions with
markdown. I also want to have these only available to users with admin status. 

To do this, I will need a form for inputting the recipe information. This will need to include image uploads, descriptions, ingredients, serving sizes,
the quick overview (a series of instructions that have been pared down to show that this is an easier process than a traditional recipe makes it out to be)
equipment needed, a nutrition information image (obtainable through several sites), cook to cook tips and notes, and links to other recipes that are similar.

The full set of information is already available and simply needs to be redone in Angular. 

I also need to build an article editor that will parse markdown into html, input photos, format text automatically, and upload it to its own api so I can
use Angular to output it to the website. The api will also include an automatic date that will auto populate an archive list.

I will then need to build an authorization checker so that the pages will only be accessable by admins.