# Statamic CircleCI

A simple addon for Statamic v3, to trigger CircleCI workflows/deployments from the CP.

## Installation 

`composer require davidsneal/statamic-circleci`

## Configuration

(optional) Publish the addon's default configuration file.

`php artisan vendor:publish --provider="Davidsneal\StatamicCircleCi\ServiceProvider"`

Set the required environment variables.

```
LN_CIRCLECI_BRANCH=
LN_CIRCLECI_PROJECT=
LN_CIRCLECI_TOKEN=
LN_CIRCLECI_USERNAME=
LN_CIRCLECI_VCS=github
```

## Usage

You can access the feature from the CP menu under Tools.

![menu](https://github.com/davidsneal/statamic-circleci/blob/master/img/menu.png?raw=true)

This is the default component view, again you can change every item of text, including the confirmation modal.

![main](https://github.com/davidsneal/statamic-circleci/blob/master/img/main-screen.png?raw=true)

![confirmation](https://github.com/davidsneal/statamic-circleci/blob/master/img/confirmation.png?raw=true)

## Permissions

This addon adds a permission you can assign to groups as required.

![permission](https://github.com/davidsneal/statamic-circleci/blob/master/img/permission.png?raw=true)
