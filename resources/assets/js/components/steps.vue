<template>
	<div class="vux-steps" :class=" { 'horizon-steps' : direction != 'vertical' } ">
        <slot></slot>
    </div>
</template>

<style lang="less">

</style>

<script>
export default {
  props: {
    direction: {
      type: String,
      default: ''
    },
    current: {
      type: Number,
      default: 0
    }
  },
  ready () {
    this.setChildrenProps()
  },
  methods: {
    setChildrenProps () {
      const len = this.$children.length - 1
      this.$children.forEach((child, index) => {
        child.lastStep = index === len
      })
    }
  }
}
</script>
