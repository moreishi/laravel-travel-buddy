<template>
    <div class="row">
        <div class="card" style="width: 17rem;">
          <img class="card-img-top" src="https://www.microsoft.com/en-us/research/wp-content/themes/microsoft-research-theme/images/blank-avatar.png" alt="Card image cap" width="200" style="margin: auto; margin-top: 30px; margin-bottom: 30px; width: 150px;">
          <div class="card-body">
            <h5 class="card-title">{{ $user->name }} {{ $user->age }}</h5>
            <p class="card-text" style="font-size: 12px;">{{ $user->country }} </p>
          </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
