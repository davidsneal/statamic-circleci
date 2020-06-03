# Statamic CircleCI

A simple addon for Statamic v3, to trigger CircleCI workflows/deployments from the CP.

## Installation 

`composer require davidsneal/statamic-circleci`

## Configuration

Publish the addon's default configuration file and JS.

`php artisan vendor:publish --provider="Davidsneal\StatamicCircleCi\ServiceProvider"`

You shall need to create a personal access token in the [CircleCI Dashboard](https://app.circleci.com/settings/user/tokens), then set it along with the other required environment variables.

![menu](https://github.com/davidsneal/statamic-circleci/blob/master/img/circleci-token.png?raw=true)

```
CIRCLECI_BRANCH=
CIRCLECI_PROJECT=
CIRCLECI_TOKEN=
CIRCLECI_USERNAME=
CIRCLECI_VCS=github
```

## Usage

You can access the feature from the CP menu under Tools.

![menu](https://github.com/davidsneal/statamic-circleci/blob/master/img/menu.png?raw=true)

![main](https://github.com/davidsneal/statamic-circleci/blob/master/img/main-screen.png?raw=true)

![confirmation](https://github.com/davidsneal/statamic-circleci/blob/master/img/confirmation.png?raw=true)

## Permissions

This addon adds a permission you can assign to groups as required.

![permission](https://github.com/davidsneal/statamic-circleci/blob/master/img/permission.png?raw=true)
