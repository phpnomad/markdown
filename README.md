# phpnomad/markdown

[![Latest Version](https://img.shields.io/packagist/v/phpnomad/markdown.svg)](https://packagist.org/packages/phpnomad/markdown)
[![Total Downloads](https://img.shields.io/packagist/dt/phpnomad/markdown.svg)](https://packagist.org/packages/phpnomad/markdown)
[![PHP Version](https://img.shields.io/packagist/php-v/phpnomad/markdown.svg)](https://packagist.org/packages/phpnomad/markdown)
[![License](https://img.shields.io/packagist/l/phpnomad/markdown.svg)](https://packagist.org/packages/phpnomad/markdown)

`phpnomad/markdown` defines the contracts PHPNomad applications use to convert between markdown and HTML. It ships two interfaces and a small exception hierarchy, with no concrete logic of its own. Like the rest of PHPNomad, it keeps your consumer code pointed at an abstraction so the underlying library stays swappable. The drop-in implementation lives in `phpnomad/league-markdown-integration`, which bridges these contracts to League CommonMark and league/html-to-markdown.

## Installation

```bash
composer require phpnomad/markdown
```

On its own this package provides no conversion logic, so you also need an implementation package bound to the interfaces in your container. `phpnomad/league-markdown-integration` is the canonical one.

## Overview

- `CanConvertMarkdownToHtml` declares `toHtml(string $markdown): string` for turning markdown source into an HTML string, throwing `ConvertToHtmlException` on failure.
- `CanConvertHtmlToMarkdown` declares `toMarkdown(string $html): string` for the reverse direction, throwing `ConvertToMarkdownException` on failure.
- `MarkdownException` is the base exception that both conversion failures extend, so a single catch block can handle any markdown conversion error in your application.
- Because both conversion directions are separate interfaces, a binding can implement one, the other, or both. A read-only renderer never has to pull in HTML-to-markdown machinery it will not use.
- Consumers type-hint against the interfaces rather than any concrete class. Swapping the implementation is a container binding change, not a refactor.

## Documentation

Full documentation lives at [phpnomad.com](https://phpnomad.com).

## License

MIT. See [LICENSE](LICENSE).
