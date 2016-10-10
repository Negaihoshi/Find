<template>
    <div class="vux-step">
        <div class="vux-step-tail" v-if="!lastStep"></div>
        <div class="vux-step-head">
            <div class="vux-step-head-inner">
                <span class="head-inner-icon"></span>
            </div>
        </div>
        <div class="vux-step-content">
            <div class="vux-step-title">{{title}}</div>
            <div class="vux-step-description">{{description}}</div>
        </div>
    </div>
</template>

<style lang="less">
	.vux-step {
        position: relative;
    }
    .vux-step-tail {
        position: absolute;
    }
    .vux-step-title {
    }
    .vux-step-description {
        font-size: 0.8rem;
    }
    .vux-step-content {

    }
    .horizon-steps {
        .vux-step {
            display: inline-block;
        }
        .vux-step-tail {
            width: 100%;
            height: 1px;
            top: 13px;
            background-color: #04be02;
        }
    }
    .vux-step-head {
        width: 12px;
        height: 12px;
        border-radius: 12px;
        border: 1px solid #00B3D3;
        display: inline-block;
    }
</style>

<script>
export default {
  props: {
    title: {
      type: String,
      default: ''
    },
    description: {
      type: String,
      default: ''
    }
  },
  data () {
    return {
      lastStep: false
    }
  }
}
</script>
