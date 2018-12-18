<div id="modalSystems" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="addSystemLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content text-center">
            <div class="modal-header justify-content-center modal-bc">
                <h4>Adicionar Sistema</h4>
            </div>
            <div class="modal-body text-center">
                <p><strong>Sistemas disponíveis:<strong></p>
                @if($c->syspdv->count() <= 0)
                    <div class="col-12 my-2" id="btnShowSyspdv">
                        <a onclick="showSyspdvCard()" data-dismiss="modal" class="btn btn-link">SYSPDV</a>
                    </div>
                @endif
                @if($c->acsn->count() <= 0)
                    <div class="col-12 my-2" id="btnShowAcsn">
                        <a onclick="showAcsnCard()" data-dismiss="modal" class="btn btn-link">ACSN</a>
                    </div>
                @endif
                @if($c->ecletica->count() <= 0)
                    <div class="col-12 my-2" id="btnShowEcletica">
                        <a onclick="showEcleticaCard()" data-dismiss="modal" class="btn btn-link">ECLÉTICA</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
