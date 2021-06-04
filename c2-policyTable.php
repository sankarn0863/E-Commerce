<div class="row">
    <div class="col-lg-12">
        <button class="btn btn-default policy-create">Create Record</button>
        <button class="btn btn-warning data-view" onclick="viewDataTable('policy_t')">View Data</button>
        <button class="btn btn-info data-edit" onclick="editDataTableView('policy_t')">Edit Record</button>
        <button class="btn btn-danger data-delete" onclick="deleteDataTableView('policy_t')">Delete Record</button>
        <button class="btn btn-success data-reject" onclick="rejectApproveTableView('policy_t')">Reject/Approve</button>
        <button class="btn data-lock" onclick="lockUnlockTableView('policy_t')">Lock/Unlock</button>
        <button class="btn data-activate" onclick="activateDeactivateTableView('policy_t')">Activate/Deactivate</button>
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-12">
        <div class="resultArea-policy_t">
        </div>
    </div>
</div>
<div class="row create-record-form create-policy_t">
    <form id="form-policy_t" enctype="multipart/form-data">
        <div class="col-lg-12">
            <div class="col-lg-2">
                <label>Policy Title</label>
            </div>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="policyTitle">
            </div>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-2">
                <label>Policy Owner</label>
            </div>
            <div class="col-lg-10">
                <input type="number" class="form-control" name="policyOwner">
            </div>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-2">
                <label>Policy Status</label>
            </div>
            <div class="col-lg-10">
                <input type="number" class="form-control" name="policyStatus">
            </div>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-6">
                <button class="btn btn-success btn-block create-form-save">Save</button>
            </div>
            <div class="col-lg-6">
                <button class="btn btn-danger btn-block cancel-form">Cancel</button>
            </div>
        </div>
    </form>
</div>