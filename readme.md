# Peasy Admin: qTranslate

This plugin adds qTranslate field to Peasy Admin.

# Dependencies

- Peasy Admin v1.1.0
- qTranslate-X

## Installation

You can install this plugin in two ways:


1. Install the plugin from [Wordpress Plugins](wp-plugin)
2. To install the plugin using Composer and [wpackagist](wpackagist), add the following line to composer.json:

	"wpackagist-plugin/peasy-admin-qtranslate": "^1.0.0"


[wp-plugin]: https://wordpress.org/plugins/peasy-admin-qtranslate/
[wpackagist]: https://wpackagist.org/search?q=peasy-admin-qtranslate&type=any&search=

## Usage

This plugin registers into fields under `translatable_text` function:

	$section->fields()
		->translatable_text( 'field_name', 'Field label' );

## Contributing

This project adheres to the [Open Code of Conduct][code-of-conduct]. By participating, you are expected to honor this code.

[code-of-conduct]: http://todogroup.org/opencodeofconduct/

### Bugs
If you have encountered a bug, please use [Github Issues][github-issues] to submit a an issue.

[github-issues]: https://github.com/appristas/peasy-admin-qtranslate/issues

### Submitting a Pull Request

Before submitting pull request please conform to [Wordpress PHP Coding Standards][wp-php-coding-standards]. Naming class names and file names are an exception to these guidelines until we can find a better solution.

1. Fork this repository
2. Create a new branch from master
2. Commit your changes
3. Push to the newly created branch
4. Submit a pull request
5. Sit back, relax, and wait for a response :smiley:

[wp-php-coding-standards]: https://make.wordpress.org/core/handbook/best-practices/coding-standards/php/

## License

This project is licensed under GPLv3. Please read the LICENSE file for details.
