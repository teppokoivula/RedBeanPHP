# RedBeanPHP ProcessWire Module

This module is a loader for the RedBeanPHP ORM, a simple, easy-to-use object
mapper. RedBeanPHP is particularly easy to get started with for two apparent
reasons: there are no config files, and it can (if you so choose) create the
database schema for you on-the-fly.

The main task of this module is loading the RedBeanPHP library and passing it
your database credentials from $config. Module config contains some settings,
and the module exposes some often used RedBeanPHP methods, but that's it.

## RedBeanPHP ORM

RedBeanPHP is, first and foremost, a tool for developers. The docs make this
quite obvious: "it does not focus primarily on performance, maintainability,
object orientedness, correctness or proper design. No, RedBeanPHP's purpose
is to boost your productivity." (http://redbeanphp.com/quick_tour)

When in fluid mode, RedBeanPHP can create the schema for you. While this may
not be desirable in production, it can be handy during development. Learning
the basics of RedBeanPHP takes minutes, but grasping how to define relations
between beans (objects), how to define models, etc. can take a while longer.

One interesting aspect with RedBeanPHP is that it contains no Query Builder,
instead relying on raw SQL (with parameter binding). While some may see this
as a shortcoming, it's actually about keeping things simple.

For more details about RedBeanPHP, visit http://redbeanphp.com/. RedBeanPHP
is copyright (c) 2015 Gabor de Mooij and the RedBeanPHP community, licensed
under New BSD and GPLv2 (dual license).

## ORM and ProcessWire

ProcessWire has a very effective way of modeling and managing data, so most
of the time you'll find a separate ORM nothing but a distraction. There are
still cases where you might prefer to drop out of the typical workflow, and
for those cases RedBeanPHP is an easy and light-weight solution:

* Working with (possibly large) existing sets of data
* Working with SQLite or PostgreSQL databases
* Working with multiple databases at once
* Rapid prototyping (using code only)

.. and so on, the main point being that situations can vary and if you feel
that a separate ORM is the best option, then by all means go for it!