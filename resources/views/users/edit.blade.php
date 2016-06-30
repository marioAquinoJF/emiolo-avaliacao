@extends('layouts.dashboard')



@section('content')

<!-- Page Content -->
<div id="page-content-wrapper">

    <!-- Foto -->
    <div class="row" >
        <div class="col-sm-4 text-center" style="margin-right: 10px;margin-bottom: 50px; width: 150px;">
            @if(!is_null($user->url_image))
            <img src="{{ url("{$user->url_image}") }}"  
                 name="imgProfile" style="max-height: 150px;width: 150px;box-shadow: 0px 0px 20px #ccc; border-radius:50px;"
                 class="imgProfile"/>
            @else
            <h3 class="imageProfile text-center"><i class="fa fa-user" style="font-size: 5em;"></i></h3>
            @endif
        </div>
        @if(auth()->user()->id == $user->id)
        <div class="col-sm-4">
            <form method="post" action="/image/upload" enctype="multipart/form-data">
                {{ Form::open(['method'=>'post','route'=>['image.upload'],'enctype'=>"multipart/form-data"]) }}

                <input	id="newfile" name="file" type="file" class="btn btn-default btn-primary" style="margin-bottom: 5px;"/>
                <button type="submit" class="btn btn-primary">Atualizar Imagem</button>
                {{ Form::close()}}
        </div>
    </div>
    @endif
    <!-- Apresentação -->
    <div class="row">
        {!! Form::open(['method'=>'put','route'=>['user.profile']]) !!}
        <h2 class="text-center"> Apresentação  <button type="submit" class="btn btn-primary">Atualizar apresentação</button></h2>

        <h3 class="text-right" >Por: {{ $user->name }}</h3>


        {{ Form::textarea('presentation', $user->presentation, ['class' => 'presentation','name' => 'presentation']) }}
        {!! Form::close()!!}

    </div>
</div>

<!-- /#page-content-wrapper -->

@endsection

@section('scripts')
<script type="text/javascript" src="{{ url('') }}/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="{{ url('') }}/tinymce/tinymce_editor.js"></script>
<script type="text/javascript">
/*tinymce*/
editor_config.selector = ".presentation";
editor_config.path_absolute = "{{ url('') }}/";
editor_config.path_absolute = "{{ url('') }}/";
tinymce.init(editor_config);
/* controller JQuery */
/*   $(function () {
 var edition = false;
 //  $("")
 })();*/


</script>
@endsection


