[![Build Status](https://api.travis-ci.org/modess/git-pretty-stats.png)](https://api.travis-ci.org/modess/git-pretty-stats.png)

You know those cool graphs and statistics you can get for a repository on github? The things is that (unfortunately) not all git repositories are hosted on github for various reasons. This is the tool for rendering graphs for your repository that can be hosted anywhere, and it looks great.

## Features (v0.2.1)

* Handles multiple repositories
* Handles bare repositories
* Statistics
  - Total commits
  - Total contributors
  - Average commits per contributor
  - First commit date
  - Latest commit date
  - Active for (X days)
  - Average commits per day
* Graphs
  - Commits by date
  - Commits by hour of day
  - Commits by day of week
  - Commits by contributor

## Requirements

* PHP 5.3
* Git

## Installation

Start by clone this repository and setup your web server

Install dependencies using [Composer](http://getcomposer.org/), e.g. `php composer.phar install`

Clone the repositories you want to statistics and graphs for in to the **repositories** folder.

    cd repositories
    git clone <repository-url>

You can clone as many as you want to in to this folder.

>  To manually set the repositories path, copy `config.example.php` to `config.php`. Then change the value of `repositoriesPath` in the config file relative to the folder where your desired git repositories are located.

Now go to your web browser and go to the URL where you've set everything up.

*Disclaimer: the tool has been tested to work on repositories up to 10 000 commits. If your repository have a higher number of commits than that you might experience issues.*

## Contribute

1. Check for [open issues](https://github.com/modess/git-pretty-stats/issues) or open a fresh issue to start a discussion around a feature idea or a bug.
2. Fork the [git-pretty-stats](https://github.com/modess/git-pretty-stats) repository on Github to start making your changes.
3. Write test(s) which shows that the bug was fixed or that the feature works as expected.
4. Send a pull request. Make sure to add yourself to CONTRIBUTORS.md.

If there is some certain statistics or graph that you are missing and would like to be added? [Create an issue](https://github.com/modess/git-pretty-stats/issues/new) and request it!

## Screenshots

For more screenshots visit the [project homepage](http://www.codingswag.com/git-pretty-stats).

![](http://www.codingswag.com/wp-content/uploads/2013/06/Screenshot-2013-07-10-at-14.38.34.png)

![](http://www.codingswag.com/wp-content/uploads/2013/06/Screenshot-2013-07-10-at-14.38.43.png)

## Powered by

* [Gitter](https://github.com/klaussilveira/gitter)
* [Silex](https://github.com/fabpot/Silex)
* [Carbon](https://github.com/briannesbitt/Carbon)
* [Twig](https://github.com/fabpot/Twig)
* [Flat UI](https://github.com/designmodo/Flat-UI)
* [Highcharts JS](https://github.com/highslide-software/highcharts.com)
* [Handlebars.JS](https://github.com/wycats/handlebars.js)
* [Font Awesome](https://github.com/FortAwesome/Font-Awesome)

## TODO

* Cache for large repositories
* More graphs/statistics
* Additions / deletions for contributors

