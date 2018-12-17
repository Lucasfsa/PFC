<div id="modalSystems" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="addSystemLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content text-center">
            <div class="modal-header justify-content-center modal-bc">
                <h4>Sistema</h4>
            </div>
            <div class="modal-body text-center">
                <p>Selecione um dos sistemas abaixo:</p>
                    @if($c->syspdv->count() <= 0)
                        <a href="">SYSPDV</a>
                        &nbsp;&nbsp;
                    @endif
                    @if($c->acsn->count() <= 0)
                        <input type="button" id="btnac" name="btnac" onclick="showSystem()" value="ACSN" data-dismiss="modal">
                    @endif
                    @if($c->ecletica->count() <= 0)
                        <a href="">Eclética</a>
                    @endif
            </div>
        </div>
    </div>
</div>
