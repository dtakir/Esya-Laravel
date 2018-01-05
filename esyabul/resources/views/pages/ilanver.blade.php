@extends('welcome')
@section('content')
<form id="form1" action="/upload" method="post" enctype="multipart/form-data" style="margin-top:30px; position:relative;">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="col-md-4 col-md-offset-2">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">Eşya ilanı ver</h3>
            </div>
            <div class="panel-body">
                <div class="col-md-6 padding-5">
                    <select name="il" class="form-control" id="il">
                        <option value="" disabled="disabled" required selected="selected">İl Seçiniz</option>
                        @foreach($il as $dat)
                            <option value="{{$dat->id}}">{{$dat->il}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 padding-5">
                    <select name="ilce"  class="form-control" id="ilce">
                        <option value="" disabled="disabled" required selected="selected">ilçe Seçiniz</option>
                    </select>
                </div>
                <div class="col-md-6 padding-5">
                    <input type="text" name="baslik" class="form-control"  value="" placeholder="eşya için başlik giriniz" required />
                </div>
                <div class="col-md-6 padding-5">
                    <input type="text" name="name" class="form-control"
                           value="" placeholder="eşya ismini giriniz" required />
                </div>
                <div class="col-md-6 padding-5">

                    <input type="text" name="ozellik" class="form-control"
                           value="" placeholder="özellik giriniz" required />
                </div>
                <div class="col-md-6 no-margin padding-5" required>
                    <input class="btn btn-md btn-success col-md-12" type="submit" value="Yükle" />
                </div>
                <div class="col-md-6 padding-5">
                    <input type="file" name="photos[]" name="file"  multiple />
                    </select>
                </div>
            </div> <!-- pane body end -->
        </div><!-- panel end -->
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
    @stop