<div id="removerSistema" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="addSystemLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content text-center">
            <div class="modal-header justify-content-center modal-bc">
                <h4>Remover Sistema</h4>
            </div>
            <div class="modal-body">
                <p><strong>Atenção esta ação remove as informações do sistema relacionadas a esse cliente.<strong></p>
                <p><strong>Deseja confirmar essa ação?<strong></p>
            </div>
            <div class="modal-footer">
                <form action="/clientes/{{ $c->id }}/dados/sistema" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" >Cancelar</button>
            </div>
        </div>
    </div>
</div>
