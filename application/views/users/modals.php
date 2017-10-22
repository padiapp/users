<div class="modal hide fade" id="myModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Settings</h3>
    </div>
    <div class="modal-body">
        <p>Here settings can be configured...</p>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
        <a href="#" class="btn btn-primary">Save changes</a>
    </div>
</div>
<style>
    .box-content .control-group .control-label{
        color:black;
    }
    .box-content .control-group input.span4{
        border: 1px solid black;
    }
</style>
<div class="modal hide fade" id="mdl-add">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Penambahan User</h3>
    </div>
    <div class="modal-body">
        <div class="row-fluid">
            <div class="box black span6" onTablet="span6" onDesktop="span12">
                <div class="box-header">
                    <h2><i class="halflings-icon white user"></i>
                        <span class="break"></span>Data User
                    </h2>
                </div>
                <div class="box-content">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label">Nama </label>
                            <div class="controls">
                                <input type="text" class="span12" id="username" placeholder="Nama User">
                            </div>
                        </div>                
                        <div class="control-group">
                            <label class="control-label">Email </label>
                            <div class="controls">
                            <input type="text" class="span12" id="email" placeholder="Email User">
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div><!--/span-->
        </div>
        <div class="modal-footer">
            <a class="btn" data-dismiss="modal">Close</a>
            <a class="btn btn-primary" id="btnSaveUser">Save changes</a>
        </div>
    </div>
</div>