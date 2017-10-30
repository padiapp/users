<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('commons/header');?>
<body>
<?php $this->load->view('commons/menuheader');?>	
		<div class="container-fluid-full">
		<div class="row-fluid">
		<?php $this->load->view('commons/sidemenu');?>			
			<!-- start: Content -->
			<div id="content" class="span10">
			<?php $this->load->view('commons/breadcrumb');?>			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Data Pribadi</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon lock"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon hdd"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal">
						  <fieldset>
							<div class="control-group">
								<label class="control-label" for="focusedInput">Nama</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php echo $obj->username;?>" placeholder='Nama Lengkap'>
								</div>
							  </div>
							<div class="control-group">
							  <label class="control-label" for="date01">Tanggal Lahir</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date01" value="02/16/12">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="fileInput">Upload Foto</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file">
							  </div>
							</div>
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Keterangan</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3"></textarea>
							  </div>
							</div>
							<div class="control-group">
								<label class="control-label">Divisi</label>
								<div class="controls">
								  <label class="checkbox inline">
									<input type="checkbox" id="inlineCheckbox1" value="ts"> TS
								  </label>
								  <label class="checkbox inline">
									<input type="checkbox" id="inlineCheckbox2" value="field"> Field
								  </label>
								  <label class="checkbox inline">
									<input type="checkbox" id="inlineCheckbox3" value="eos"> EOS
								  </label>
								</div>
								<div class='controls'>
								  <label class="checkbox inline">
									<input type="checkbox" id="inlineCheckbox1" value="hunter"> Hunter
								  </label>
								  <label class="checkbox inline">
									<input type="checkbox" id="inlineCheckbox2" value="farmer"> Farmer
								  </label>
								  <label class="checkbox inline">
									<input type="checkbox" id="inlineCheckbox3" value="cro"> CRO
								  </label>
								</div>
								<div class='controls'>
								  <label class="checkbox inline">
									<input type="checkbox" id="inlineCheckbox1" value="salesadmin"> Sales Admin
								  </label>
								  <label class="checkbox inline">
									<input type="checkbox" id="inlineCheckbox2" value="appadmin"> App Admin
								  </label>
								  <label class="checkbox inline">
									<input type="checkbox" id="inlineCheckbox3" value="warehouse"> Warehouse
								  </label>
								</div>
							  </div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary"><i class="halflings-icon hdd"></i> Update Perubahan</button>
							  <button type="reset" class="btn"><i class="halflings-icon remove"></i> Batalkan</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->
			</div><!--/row-->
	</div><!--/.fluid-container-->
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
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
	<div class="clearfix"></div>
	<?php $this->load->view('commons/footer');?>
	<?php $this->load->view("commons/js.php");?>
</body>
</html>
