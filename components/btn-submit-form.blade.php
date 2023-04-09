@props(['label' => 'Submit', 'loading' => true])
<div class="text-right">
    <button id="btnSubmitForm" type="submit" class="btn btn-primary">{{ $label }}</button>
</div>

@if ($loading)
@push('js')
    <script>
        $(document).ready(function() {
            $('#btnSubmitForm').on('click', function(event) {
                event.preventDefault(); // menghentikan event klik

                let button = $(this);
                button.prop('disabled', true); // menonaktifkan button
                button.html('Loading...'); // menambahkan teks Loading

                // mengambil form yang bersangkutan
                let form = $(this).closest('form');

                // submit form
                form.submit();
            });
        });
    </script>
@endpush
@endif
