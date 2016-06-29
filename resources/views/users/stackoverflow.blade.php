<div class="col-sm-4 text-center" id='stackoverflow' style="margin-bottom: 50px; margin-left: 15px; width: 400px;">
    <h4><b>No site:</b> Stackoverflow</h4>
    <p  style="float: left;">
        <img style="width: 100px;height: 100px" />
        <span class="nome" style="display: block;"><b> Nome: </b></span>
        <span style="display: block;"><b> Perfil: </b><a class="perfil"></a></span>
        <span class="city" style="display: block;"><b> Origem: </b></span>
    </p>
</div>

@section('scripts')
<script type='text/javascript'>

    $.get('https://api.stackexchange.com/2.2/me',
            {key: 'U4DMV*8nvpm3EOpvf69Rxw((',
                site: 'stackoverflow',
                access_token: 'ZHV7ONh2VRfCy5(yyzC2Dw))',
                filter: 'default',
            })
            .done(function (data) {
                var obj = data.items[0];
                $('#stackoverflow img').attr({'src': obj.profile_image});
                $('#stackoverflow .nome').append(obj.display_name);
                $('#stackoverflow a.perfil').attr({'src': obj.link});
                $('#stackoverflow a.perfil').text(obj.link);
                $('#stackoverflow .city').append(obj.location);
                console.log(data.items[0]);
            });


</script>   
@endsection