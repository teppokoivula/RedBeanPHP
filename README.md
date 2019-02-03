# RedBeanPHP ProcessWire Module

This module loads and initializes RedBeanPHP – an easy to use ORM for PHP. RedBeanPHP is particularly
easy to get started with for two reasons: first of all there are no config files, and second of all
it has the ability to create the database schema for you on the fly.

The main task of this module is loading the RedBeanPHP library and initializing it with the database
creentials found from ProcessWire's $config settings. Module config contains some settings, and the
module exposes some often used RedBeanPHP methods, but that's it.

## Requirements

The master branch of this module requires ProcessWire 3.0+. If you're running an earlier version of
ProcessWire, you probably should consider updating it – but if that's not an option, check out the
legacy branch instead:

https://github.com/teppokoivula/RedBeanPHP/tree/legacy

## RedBeanPHP ORM

> RedBeanPHP is an easy to use ORM for PHP. It's a Zero Config ORM lib that 'automagically' builds
> your database schema.
> — https://redbeanphp.com/index.php

RedBeanPHP has two operating modes, "fluid" and "frozen". When in fluid mode, RedBeanPHP can create
the database schema for you. While this may not be desirable in production, it can be quite useful
during the development phase.

One interesting aspect with RedBeanPHP is that it contains no Query Builder, instead relying on raw
SQL with parameter binding. While some may see this as a shortcoming, the reason for this particular
design decision is keeping things simple.

Learning the basics of RedBeanPHP takes minutes, but grasping how to define relations between beans
(objects), how to define models, etc. can take a while longer. The docs at redbeanphp.com are quite
detailed, so definitely check them out if you're interested in hearing more.

RedBeanPHP is copyright (c) 2018 Gabor de Mooij and the RedBeanPHP community, dual licensed under
New BSD and GPLv2. You may choose the license that fits best for your project.

## ORM and ProcessWire

ProcessWire has a very effective way of modeling and managing data built-in, so most of the time
you'll find a separate ORM nothing but a distraction. For cases in which you may prefer to drop out
of the typical workflow, though, an ORM such as RedBeanPHP is an easy and light-weight solution.

Some examples of situations in which RedBeanPHP may come in handy:

* Working with (possibly large) sets of existing data
* Working with SQLite or PostgreSQL databases
* Working with multiple databases all at once
* Rapid prototyping (using code only)

.. and so on. The main point here is that situations can vary, and if you feel that a separate ORM
is the best option for your particular use case, then by all means go for it.