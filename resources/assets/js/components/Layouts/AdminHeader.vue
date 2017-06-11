<template>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">ERS</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                 <li><a href="#"><i class="glyphicon glyphicon-bell"></i></a></li>
                 <li><a href="#"> <i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                 <li><a href="#"> <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
            </ul>
      </div>
    </nav>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
