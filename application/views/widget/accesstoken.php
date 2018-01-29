<div class="x_panel" align="center">
    <h3>Your Facebook Token Access Status</h3>
    <h1 id="status">...</h1>
    <button class="btn btn-success btn-lg" type="button" data-toggle="modal" data-target=".token-modal-fb">Update Access Token</button>
</div>

<div class="modal fade token-modal-fb" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Access Token Facebook</h4>
            </div>
            <div class="modal-body modal-fb">
                <div class="form-group" id="token-fb-content">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="token-fb">Access Token</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="token-fb" class="form-control col-md-7 col-xs-12" type="text" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" onclick="check()">Save changes</button>
            </div>
        </div>
    </div>
</div>