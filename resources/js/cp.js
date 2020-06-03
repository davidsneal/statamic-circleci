import CircleCiAddon from './CircleCiAddon.vue';

Statamic.booting(() => {
  Statamic.$components.register('circleci-addon', CircleCiAddon)
})
