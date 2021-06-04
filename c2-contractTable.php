<div class="row">
    <div class="col-lg-12">
        <button class="btn btn-default contract-create">Create Record</button>
        <button class="btn btn-warning data-view" onclick="viewDataTable('contract_t')">View Data</button>
        <button class="btn btn-info data-edit" onclick="editDataTableView('contract_t')">Edit Record</button>
        <button class="btn btn-danger data-delete" onclick="deleteDataTableView('contract_t')">Delete Record</button>
        <button class="btn btn-success data-reject"
            onclick="rejectApproveTableView('contract_t')">Reject/Approve</button>
        <button class="btn data-lock" onclick="lockUnlockTableView('contract_t')">Lock/Unlock</button>
        <button class="btn data-activate"
            onclick="activateDeactivateTableView('contract_t')">Activate/Deactivate</button>
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-12">
        <div class="resultArea-contract_t">
        </div>
    </div>
</div>
<div class="row create-record-form create-contract_t">
    <form id="form-contract_t" enctype="multipart/form-data">
        <div class="col-lg-12">
            <div class="col-lg-2">
                <label>Contract Title</label>
            </div>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="contractTitle">
            </div>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-2">
                <label>Policy ID</label>
            </div>
            <div class="col-lg-10">
                <input type="number" class="form-control" name="policyID">
            </div>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-2">
                <label>User ID</label>
            </div>
            <div class="col-lg-10">
                <input type="number" class="form-control" name="userID">
            </div>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-2">
                <label>Contract Status</label>
            </div>
            <div class="col-lg-10">
                <input type="number" class="form-control" name="contractStatus">
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