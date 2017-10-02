<section>

    <!-- Contact -->
    <section style="display: inline-block; border: #cdcece 1px solid">

        <div style="text-align: center"><h3>Contacto:</h3></div>
        <div class="widget inline_icons">
            <div class="r3_counter_box">
                <i class="pull-left fa fa-inbox user2 icon-rounded"></i>

                <div class="stats">
                    <h5><strong>{{$contacts->count()}}</strong></h5>
                    <span>Recibidos</span>
                </div>
            </div>
        </div>

        <div class="widget inline_icons">
            <div class="r3_counter_box">
                <a href="{{route('admin_contact_index_path','status=active')}}">
                    <i class="pull-left fa fa-reply-all user3 icon-rounded cursor_buttom"></i>

                    <div class="stats">
                        <h5><strong>{{$contacts->where('status','active')->count()}}</strong></h5>
                        <span>Por Responder</span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Community -->
    <section style="display: inline-block; border: #cdcece 1px solid">

        <div style="text-align: center"><h3>Comunidad:</h3></div>
        <div class="widget inline_icons">
            <div class="r3_counter_box">
                <i class="pull-left fa fa-comments user2 icon-rounded"></i>

                <div class="stats">
                    <h5><strong>{{$total_articles}}</strong></h5>
                    <span>Publicaciones</span>
                </div>
            </div>
        </div>

        <div class="widget inline_icons">
            <div class="r3_counter_box">
                <i class="pull-left fa fa-folder-open-o user7 icon-rounded"></i>

                <div class="stats">
                    <h5><strong>{{$total_categories}}</strong></h5>
                    <span>Categorías</span>
                </div>
            </div>
        </div>

        <div class="widget inline_icons">
            <div class="r3_counter_box">
                <i class="pull-left fa fa-tags user8 icon-rounded"></i>

                <div class="stats">
                    <h5><strong>{{$total_tags}}</strong></h5>
                    <span>Tags</span>
                </div>
            </div>
        </div>
    </section>
</section><br>
