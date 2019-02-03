# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [2.0.0] - 2019-02-03

### Added
- Added CHANGELOG.md.
- Add ProcessWire namespace to module files.
- Include trimmed down versions of RedBeanPHP library (rb-(mysql|postres|sqlite).php).
- New configuration settings, including selection of the database driver and option to
  disable automatic database connection setup for RedBeanPHP.

### Changed
- Update requirements, officially dropping support for PW2.x and PHP < 5.4.
- Overall improvements to module file, config setting handling, and PHPDoc comments.
