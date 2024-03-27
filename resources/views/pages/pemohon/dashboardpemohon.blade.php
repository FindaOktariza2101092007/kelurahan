<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery Modal</title>
    <!-- Tautan ke file CSS Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


<!-- Modal -->
<div class="modal fade " id="lengkapi-data-permohonan" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content " >
      <div class="modal-header" style="border: none;">

      </div>
      <div class="modal-body text-center">
        Lengkapi Data Diri Terlebih Dahulu
      </div>




      <div class="modal-footer justify-content-center" style="border: none;">
      <a href="/profile" class="btn btn-primary">Lengkapi Data</a>
      </div>
    </div>

  </div>

</div>





<!-- Tautan ke file JavaScript jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- Tautan ke file JavaScript Bootstrap -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $('#lengkapi-data-permohonan').modal('show');
    });
</script>
</body>
</html>

