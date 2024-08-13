# UX Icons Alias Bundle

This bundle provides an alias system for [Symfony UX Icons](https://ux.symfony.com/icons).

It adds a Twig function on top of the `IconRendererInterface` introduced in version 2.19 of [symfony/ux-icons](https://github.com/symfony/ux-icons).

## Installation

Make sure Composer is installed globally, as explained in the [installation chapter](https://getcomposer.org/doc/00-intro.md) of the Composer documentation.

### Applications Using Symfony Flex

Open a terminal, navigate to your project directory, and run the following command:

```
composer require xbirdfr/ux-icons-alias-bundle
```

### Applications Not Using Symfony Flex

#### Step 1: Download the Bundle

Open a terminal, navigate to your project directory, and run the following command to download the latest stable version of this bundle:

```
composer require xbirdfr/ux-icons-alias-bundle
```

#### Step 2: Enable the Bundle

Then, enable the bundle by adding it to the list of registered bundles in your project's `config/bundles.php` file:

```
// config/bundles.php

return [
    // ...
    Xbird\UxIconsAliasBundle\UxIconsAliasBundle::class => ['all' => true],
];
```

## Usage

### Step 1: Create the Configuration File

Create the `ux_icons_alias.yaml` file in the `config/packages` directory:

```yaml
# config/packages/ux_icons_alias.yaml
ux_icons_alias:
  alias: []
```

### Step 2: Create an Alias

Create your first alias by adding a "key: icon-name" pair to the `alias` array:

```yaml
# config/packages/ux_icons_alias.yaml
ux_icons_alias:
  alias:
    home: material-symbols:home
```

### Step 3: Use Your New Alias

In a Twig template, use the `ux_icon_alias` function to display your aliased icon:

```twig
{# In a Twig template #}
<div>
    {{ ux_icon_alias('home') }}
</div>
<div>
    {{ ux_icon_alias('home', {class: 'w-4 h-4'}) }}
</div>
```

### One More Thing

This bundle is built on top of the [symfony/ux-icons](https://github.com/symfony/ux-icons) bundle.

When called, the bundle checks if the alias exists in the configuration. If it does, the corresponding value is passed to `ux-icons`. If the alias does not exist, the alias name itself is passed to `ux-icons`.
