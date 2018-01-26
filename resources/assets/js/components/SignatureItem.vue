<template>
    <div class="panel panel-default">
        <div class="panel-heading">
            <a data-turbolinks-action="replace" class="navbar-brand" :href="`/show/${signature.id}`">{{signature.name}}</a>
            <span><span class="glyphicon glyphicon-user" id="start"></span> <label id="started">By {{ signature.name }}</label></span>
        </div>
        <div class="panel-body">
            <div class="col-md-2">
                <div class="thumbnail">
                    <img :src="signature.avatar" :alt="signature.name">
                </div>
            </div>
            <p>{{ signature.body }}</p>
        </div>
        <div class="panel-footer">
            <span class="glyphicon glyphicon-calendar" id="visit"></span> {{ signature.date }} |
            <span class="glyphicon glyphicon-flag" id="comment"></span>
            <a id="comments" @click="report(signature.id)">Report</a>
        </div>
    </div>
</template>

<script>
  export default {
    name: "signature-item",
    props: {
      signature: {
        type: Object,
        default: {
          name: '',
          avatar: '',
          body: '',
          date: '',
          id: ''
        }
      }
    }
  }
</script>