<div class="modal fade" id="confirmDelete-{{ $mhs->nim }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form action="/delete/{{ $mhs->nim }}" method="POST" class="modal-content border-0 shadow">
            @csrf
            @method('DELETE')
            <div class="modal-header border-0 pb-0">
                <h5 class="modal-title fw-bold text-danger"><i class="fas fa-exclamation-triangle me-2"></i>Konfirmasi Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body py-4">
                Apakah Anda yakin ingin menghapus data mahasiswa dengan NIM <strong class="text-dark">{{ $mhs->nim }}</strong>?
            </div>
            <div class="modal-footer border-0 pt-0">
                <button type="button" class="btn btn-light px-4" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-danger px-4">Hapus Permanen</button>
            </div>
        </form>
    </div>
</div>