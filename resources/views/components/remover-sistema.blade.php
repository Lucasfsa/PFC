<div id="removerSistema" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="addSystemLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content text-center">
            <div class="modal-header justify-content-center modal-danger">
                <h4>Atenção!</h4>
            </div>
            <div class="modal-body text-gray">
                <p>Esse sistema possui informações relacionadas ao cliente. A ação não poderá ser desfeita.</p>
                <p><strong>Deseja realmente remover?<strong></p>
            </div>
            <div class="modal-footer justify-content-center">
                <form action="/clientes/{{ $c->id }}/dados/sistema/#" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger">Remover</button>
                </form>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" >Cancelar</button>
            </div>
        </div>
    </div>
</div>
