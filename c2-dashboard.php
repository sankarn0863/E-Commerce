<div class="row">
    <div class="col-lg-12">
        <div class="panel with-nav-tabs panel-primary">
            <div class="panel-heading">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab1_data" data-toggle="tab">Data</a></li>
                    <li class="tab2_item"><a href="#tab2_policy" data-toggle="tab">Policy</a></li>
                    <li class="tab2_item"><a href="#tab3_contract" data-toggle="tab">Contract</a></li>

                </ul>
            </div>
            <div class="panel-body">
                <div class="tab-content">
                    <div class="tab-pane fade in active tab1_data" id="tab1_data">
                        <?php include("c2-dataTable.php"); ?>
                    </div>
                    <div class="tab-pane fade tab2_policy" id="tab2_policy">
                        <?php include("c2-policyTable.php"); ?>
                    </div>
                    <div class="tab-pane fade tab3_contract" id="tab3_contract">
                        <?php include("c2-contractTable.php"); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

