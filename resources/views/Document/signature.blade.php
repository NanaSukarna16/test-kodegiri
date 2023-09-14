<html>

<head>
    <title>Test Nana Kodegiri</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
    <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
    <style>
        .kbw-signature {
            width: 100%;
            height: 200px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h5>Pilih Salah satu Upload gambar atau Gambar signature</h5>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                        <div class="alert alert-success">
                            <span>{{ session('success') }}</span>
                        </div>
                        @endif

                        <form method="POST" enctype="multipart/form-data"
                            action="{{ route('signaturepad.upload', $document->id)}}">
                            @csrf
                            <div class="col-md-12">
                                <label>Foto Tanda tangan</label>
                                <input type="file" name="image_signed" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary btn-sm ml-3 mt-3">Save</button>
                        </form>

                        <hr>

                        <form method="POST" action="{{ route('signaturepad.upload', $document->id)}}">
                            @csrf
                            <div class="col-md-12">
                                <label>Draw</label>
                                <br />
                                <div id="sig"></div>
                                <br /><br />
                                <button id="clear" class="btn btn-danger btn-sm">Clear</button>
                                <button class="btn btn-primary btn-sm">Save</button>
                                <textarea id="signature" name="signed" style="display: none"></textarea>
                            </div>
                            <br />
                            <span class="ml-3">*tanda tangan bisa di lewati</span>
                        </form>

                        <a href="{{ route('document.index')}}" class="ml-3">
                            <button class="btn btn-primary">Selesai</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
    <script type="text/javascript">
        var sig = $('#sig').signature({syncField: '#signature', syncFormat: 'PNG'});
        $('#clear').click(function (e) {
            e.preventDefault();
            sig.signature('clear');
            $("#signature64").val('');
        });
    </script>
</body>

</html>