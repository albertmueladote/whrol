<template>
	<div class="section section-4">
        <section-four-left></section-four-left>
        <section-four-mid></section-four-mid>
        <section-four-right></section-four-right>
    </div>
</template>

<script>
  export default {
    
  }
</script>

<style lang="scss">
  .section-4 {
    height: 25rem;
    .talents_list {
      height: 284px;
      width: 401px;
      position: absolute;
      top: 75px;
      left: 63px;
      overflow-y: auto;
      .talent {
        height: 22px;
        width: 384px;
        .talent_name {
          height: 22px;
          width: 135px;
        }
        .talent_level {
          left: 135px;
          width: 50px;
        }
        .talent_description {
          left: 185px;
          width: 194px;
        }
      }
    }
  }
</style>