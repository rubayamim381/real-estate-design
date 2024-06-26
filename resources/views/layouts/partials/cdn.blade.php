{{-- nice admin cdn --}}
<link href="{{ asset('ui/backend') }}/assets/img/favicon.png" rel="icon">
<link href="{{ asset('ui/backend') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
<link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
{{-- <link href="{{ asset('ui/backend') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link href="{{ asset('ui/backend') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="{{ asset('ui/backend') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="{{ asset('ui/backend') }}/assets/vendor/quill/quill.snow.css" rel="stylesheet">
<link href="{{ asset('ui/backend') }}/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
<link href="{{ asset('ui/backend') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="{{ asset('ui/backend') }}/assets/vendor/simple-datatables/style.css" rel="stylesheet">
<link href="{{ asset('ui/backend') }}/assets/css/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

{{-- jquery --}}
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<!--ajax-->
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>