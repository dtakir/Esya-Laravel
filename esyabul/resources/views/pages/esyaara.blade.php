@extends('welcome')
@section('content')
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">


<form id="form2" name="form2" action="/esyabul"  method="POST" style="margin-left:40px; position:relative;" class="bul">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="col-md-4">

        <div class="panel panel-danger">
            <div class="panel-heading">
                <h3 class="panel-title">Eşya Ara</h3>
            </div>
            <div class="panel-body">
                <div class="col-md-6 padding-5">
                    <select name="il1" class="form-control" id="il1">
                        <option value="" disabled="disabled" required selected="selected">İl Seçiniz</option>
                        @foreach($il as $dat)
                            <option value="{{$dat->id}}">{{$dat->il}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="col-md-6 padding-5">
                    <select name="ilce1"  class="form-control" id="ilce1">
                        <option value="" disabled="disabled" required selected="selected">ilçe Seçiniz</option>

                    </select>
                </div>
                <div class="col-md-6 padding-5">
                    <select name="esya1"  class="form-control" id="esya1">
                        <option value="" disabled="disabled" required selected="selected">eşya seçin</option>
                        @foreach($produc as $dat)
                            <option value="{{$dat->id}}">{{$dat->name}}</option>
                        @endforeach
                    </select>


                    <div class="col-md-12 no-margin padding-5" required>
                        <input class="btn btn-md btn-danger col-md-12"  name="esyabul" type="submit" value="esyabul">
                    </div>
                </div> <!-- panel body end -->
            </div>

        </div>
    </div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#il').change(function (e) {
            var select = document.getElementById('ilce');
            document.getElementById('ilce').innerHTML = 'ilçe Seçiniz';
            e.preventDefault();
            $.ajax({
                "url": 'ilcegetir',
                "type": 'post',
                "data": $('#il').serializeArray(),
                'dataType': 'json',
                'beforeSend': function (xhr) {
                    xhr.setRequestHeader('X-CSRF-TOKEN', $("#csrf_token").attr('content'));
                },
                "success": function (data) {
                    for (var i = 0; i < data.length; i++) {
                        var opt = document.createElement('option');
                        opt.value = data[i].id;
                        opt.innerHTML = data[i].ilce;
                        select.append(opt);
                    }
                }
            });

        });
        $('#il1').change(function (e) {
            var select = document.getElementById('ilce1');
            document.getElementById('ilce1').innerHTML = 'ilçe Seçiniz';
            e.preventDefault();
            $.ajax({
                "url": 'ilce',
                "type": 'post',
                "data": $('#il1').serializeArray(),
                'dataType': 'json',
                'beforeSend': function (xhr) {
                    xhr.setRequestHeader('X-CSRF-TOKEN', $("#csrf_token").attr('content'));
                },
                "success": function (data1) {
                    for (var i = 0; i < data1.length; i++) {
                        var opt = document.createElement('option');
                        opt.value = data1[i].id1;
                        opt.innerHTML = data1[i].ilce;
                        select.append(opt);
                    }
                }
            });
        });
    });
</script>
            </div>
        </div>
    </div>
@stop