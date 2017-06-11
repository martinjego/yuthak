<template>
            <div id="wrapper">
                <!-- Sidebar -->
                <div id="sidebar-wrapper">
                    <ul class="sidebar-nav">
                        <li class="sidebar-brand">
                            <a href="#toggless" id="wew0">
                                Dashboard <span id="toggless" class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#menu1" id="wew1">Menu 1</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#menu2" id="wew2">Menu 2</a>
                        </li>
                    </ul>
                </div>
                <!-- /#sidebar-wrapper -->
                <!-- Page Content -->
                <div id="page-content-wrapper">
                    <a href="#arrow">
                        <div class="maxh inline" id="menu-toggle">
                            <span id="arrow" class="glyphicon glyphicon-chevron-left"></span>
                        </div>
                    </a>
                    <div class="container-fluid inline contents">
                        <div class="tab-content">
                            <div id="menu1" class="tab-pane fade in active">
                                Hello
                            </div>
                            <div id="menu2" class="tab-pane fade in">
                                World
                            </div>
                        </div>
                    </div>
                <!-- /#page-content-wrapper -->
                </div>
            </div>
        <!-- /#wrapper -->
</template>
<script>
    export default {
        mounted() {
            console.log('Component mounted.');
        }
    }
    $(document).ready(function(){
        $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
            $("#arrow").toggleClass("glyphicon-chevron-right");
        });
        $("#wew0").click(function (e) {
            e.preventDefault();
            $("#wew1").toggle();
            $("#wew2").toggle();
            $("#toggless").toggleClass("glyphicon-chevron-down");
        });
    });
</script>
Add Comment Collapse