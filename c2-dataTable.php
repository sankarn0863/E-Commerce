<div class="row">
    <div class="col-lg-12">
        <button class="btn btn-default data-create">Create Data</button>
        <button class="btn btn-default"><a href="form.php" target="BOT">Manage Forms </a> </button>
        <button class="btn btn-warning data-view" onclick="viewDataTable('data_t')">View Data</button>
        <button class="btn btn-info data-edit" onclick="editDataTableView('data_t')">Edit Data</button>
        <button class="btn btn-danger data-delete" onclick="deleteDataTableView('data_t')">Delete Data</button>
        <button class="btn btn-success data-reject" onclick="rejectApproveTableView('data_t')">Reject/Approve</button>
        <button class="btn data-lock" onclick="lockUnlockTableView('data_t')">Lock/Unlock</button>
        <button class="btn data-activate" onclick="activateDeactivateTableView('data_t')">Active/Deactive</button>
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-12">
        <div class="resultArea-data_t">
        </div>
    </div>
</div>
<div class="row create-record-form create-data_t">
    <form id="form-data_t" enctype="multipart/form-data">
        <div class="col-lg-12">
            <div class="col-lg-2">
                <label>Data Status</label>
            </div>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="dataStatus" required>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-2">
                <label>Data File Upload</label>
            </div>
            <div class="col-lg-10">
                <input type="file" class="form-control" name="dataFile" required>
            </div>
        </div>
<CENTER><p>OR</p></CENTER>
<div class="col-lg-12">
            <div class="col-lg-2">
                <label>Form Upload</label>
            </div>
            <div class="col-lg-10">
                <a href="form.php">FORM MANAGEMENT</a>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="col-lg-2">
                <label>Data Modifier</label>
            </div>
            <div class="col-lg-10">
                <input type="number" class="form-control" name="dataModifier" required>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-2">
                <label>Data Owner</label>
            </div>
            <div class="col-lg-10">
                <input type="number" class="form-control" name="dataOwner" required>
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