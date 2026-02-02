# Admin Style

Provides visual enhancements to the WordPress admin interface.

## Installation

### Composer

Install the plugin via Composer from your project root:

```bash
composer require creode-mosaic/admin-style
```

### Setup Custom Repository

You need to add the Creode packagist repository to the site as the packages are not publicly accessible through packagist.org. Add the following lines just above the `"require"` statement within your project's `composer.json` file:

```json
"repositories": [
    {
        "type": "composer",
        "url": "https://packages.creode.dev"
    }
],
```

**Tip:** If you need assistance or further details about the repositories settings within Composer you can find additional information in their [documentation](https://getcomposer.org/doc/05-repositories.md).