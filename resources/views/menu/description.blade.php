<style>
  .modal-content img {
      max-width: 100%;
      height: auto;
  }
</style>
<div class="modal fade" id="descriptionModal{{ $menu->id }}" tabindex="-1"
    role="dialog" aria-labelledby="defaultModalLabel{{ $menu->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="defaultModalLabel{{ $menu->id }}">Deskripsi : {{ $menu->name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modalBody{{ $menu->id }}">
                @if ($menu->type === 'Single Data')
                    <p>{!! $menu->description !!}</p>
                @else
                    <p>tidak ada deskripsi yang tersedia.</p>
                @endif
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
