<div style="clear: both"></div>
<section style="border: #cdcece 0.5px solid">

    <h3 style="text-align: center">Proyectos:</h3>

    <div style="display: inline-flex">
        <div id="piechart_3d" style="width: 470px; height: 350px;"></div>

        <div id="donutchart" style="width: 650px; height: 300px; float: right"></div>

    </div>
    <div id="donutchart_region_projects" style="width: 570px; height: 480px; float: left"></div>

    <div class="widget inline_icons">
        <div class="r3_counter_box">
            <i class="pull-left fa fa-building-o user1 icon-rounded"></i>

            <div class="stats">
                <h5><strong>{{$totalProjects}}</strong></h5>
                <span>Proyectos</span>
            </div>
        </div>
    </div>

    <div class="widget inline_icons">
        <div class="r3_counter_box">
            <a href="{{route('admin_project_index_path','image=false')}}">
                <i class="pull-left fa fa-file-image-o user5 icon-rounded"></i>

                <div class="stats">
                    <h5><strong>{{($totalProjects - $projectWithAttachments)}}</strong></h5>
                    <span>Sin Imagen</span>
                </div>
            </a>
        </div>
    </div>

    <div class=""><h4>Estado de Proyecto: </h4></br>
    </div>
    <div class="widget inline_icons">
        <div class="r3_counter_box">
            <i class="pull-left fa fa-dollar user6 icon-rounded"></i>

            <div class="stats">
                <h5><strong>{{$projects->where('status','finalized')->count()}}</strong></h5>
                <span>Finalizados</span>
            </div>
        </div>
    </div>

    <div class="widget inline_icons">
        <div class="r3_counter_box">
            <a href="{{route('admin_project_index_path','status=active')}}">
                <i class="pull-left fa fa-cog user4 icon-rounded cursor_buttom"></i>

                <div class="stats">
                    <h5><strong>{{$projects->where('status','active')->count()}}</strong></h5>
                    <span>Construcción</span>
                </div>
            </a>
        </div>
    </div>

    <div class=""><h4>Publicación Proyecto: </h4><br>
    </div>
    <div class="widget inline_icons">
        <div class="r3_counter_box">
            <a href="{{route('admin_project_index_path','published=false')}}">
                <i class="pull-left fa fa-thumbs-o-down user2 icon-rounded cursor_buttom"></i>

                <div class="stats">
                    <h5><strong>{{$projects->where('published','false')->count()}}</strong></h5>
                    <span>Inactivos</span>
                </div>
            </a></div>
    </div>

    <div class="widget inline_icons">
        <div class="r3_counter_box">
            <i class="pull-left fa fa-thumbs-o-up dollar1 icon-rounded"></i>

            <div class="stats">
                <h5><strong>{{$projects->where('published','true')->count()}}</strong></h5>
                <span>Publicados</span>
            </div>
        </div>
    </div>

    <div class="widget inline_icons">
        <div class="r3_counter_box">
            <a href="{{route('admin_project_index_path','published=draft')}}">
                <i class="pull-left fa fa-eraser user3 icon-rounded cursor_buttom"></i>

                <div class="stats">
                    <h5><strong>{{$projects->where('published','draft')->count()}}</strong></h5>
                    <span>Borrador</span>
                </div>
            </a>
        </div>
    </div>
</section>
<br>

<!-- Category Projects-->

<script type="text/javascript">
    //    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
                @foreach($services as $service)
            ['{!!$service->name!!}', {{$service->projects->count()}}],
            @endforeach
    ]);

        var options = {
            title: 'Servicios',
            pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
    }
</script>

<!-- Service Projects-->
<script type="text/javascript">
    google.charts.load("current", {packages: ["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Categories', 'Cantidad'],
                @foreach($categories_project as $categories_project)
                ['{!!$categories_project->name!!}',
                {{$categories_project->projects->count()}}],
            @endforeach
        ]);

        var options = {
            title: 'Categorías',
            is3D: true
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
    }
</script>

<!-- Projects by Region -->


<script type="text/javascript">
    //            google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],

                @foreach($reg_projects as $region)
            ['{!! $region->name !!}', {{$region->projects->count()}}],
            @endforeach
    ]);

        var options = {
            title: 'Proyectos por Región',
            pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart_region_projects'));
        chart.draw(data, options);
    }
</script>
