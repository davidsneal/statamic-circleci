<template>
  <div>
    <div class="flex items-center justify-between">
      <div class="pr-4">
        <h2 class="font-bold">Deploy</h2>
        <p class="my-1 text-sm text-grey">Trigger a deployment of your site.</p>
      </div>
      <button @click.prevent="confirming = true" class="btn">
        <span v-if="deploying">Deploying</span>
        <span v-else>Deploy</span>
      </button>
    </div>
    <confirmation-modal
      v-if="confirming"
      title="Deploy Site"
      bodyText="Are you sure you want to deploy your site?"
      buttonText="Deploy"
      danger="true"
      @confirm="deploy"
      @cancel="confirming = false"
    />
  </div>
</template>

<script>
  export default {

    props: {
      route: {
        type: Object,
        default: () => {},
      },
    },

    data() {
      return {
        confirming: false,
        deploying: false,
      }
    },

    methods: {
      deploy() {
        this.confirming = false
        this.deploying = true

        this.$axios.post(this.route)
          .then(response => {
            this.$toast.success('Deployment triggered successfully')
          })
          .catch((error) => {
            this.$toast.error('Failed to trigger deployment')
          })
          .finally(() => {
            this.deploying = false
          })
      },
    },
  }
</script>

<style scoped>
.fade-in-out {
  opacity: 1;
  animation: fade 3s linear infinite;
}

@keyframes fade {
  0%,100% { opacity: 0.5 }
  50% { opacity: 1 }
}
</style>
