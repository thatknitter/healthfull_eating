bower-django
~~~~~~~~~~~~

Django static assets installable via bower

Installation
~~~~~~~~~~~~

Install it with ``bower install django --save`` and then use Grunt to copy admin and gis into assets root

Compability to django verions
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

As far as this is just copy of static files from django package, use same version as your django version

Example in bower.json:

.. code-block:: json
   
   ...
   "dependencies": {
    "django": "latest",
   }
   
"latest" will be always the same version as currently stable relesaed django version (now 1.6.2)
I'm started since django 1.6.2 and not added old django's staticfiles. If you need old ones 1.5.x and earlier - let me know.
